<?php

namespace Drupal\acp_contact_email\Plugin\Mail;

use Drupal\Core\Mail\Attribute\Mail;
use Drupal\Core\Mail\MailInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\smtp\Plugin\Mail\SMTPMailSystem;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Custom mail system that preserves HTML for contact form emails.
 *
 * This extends SMTPMailSystem but overrides format() to preserve HTML
 * for contact_us_form and partner_form emails, even if smtp_allowhtml is disabled.
 */
#[Mail(
  id: 'acp_contact_mail',
  label: new TranslatableMarkup('ACP Contact Mail System'),
  description: new TranslatableMarkup('Preserves HTML formatting for contact form emails.')
)]
class ACPContactMailSystem extends SMTPMailSystem implements MailInterface, ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function format(array $message) {
    // Check if this is a contact form email that should preserve HTML
    $preserve_html = FALSE;
    
    // Check message ID
    if (!empty($message['id']) && strpos($message['id'], 'contact_') === 0) {
      $mail_key = str_replace('contact_', '', $message['id']);
      if (in_array($mail_key, ['page_mail', 'page_copy'], TRUE)) {
        // Check if it's our contact form
        if (!empty($message['params']['contact_message'])) {
          $contact_message = $message['params']['contact_message'];
          if (method_exists($contact_message, 'bundle')) {
            $bundle = $contact_message->bundle();
            if (in_array($bundle, ['contact_us_form', 'partner_form'], TRUE)) {
              $preserve_html = TRUE;
            }
          }
        }
      }
    }
    
    // If this is a contact form email with HTML Content-Type, preserve it
    if ($preserve_html && !empty($message['headers']['Content-Type'])) {
      $content_type = $message['headers']['Content-Type'];
      if (strpos($content_type, 'text/html') !== FALSE) {
        // Temporarily enable HTML processing for this email
        $original_allow_html = $this->AllowHtml;
        $this->AllowHtml = TRUE;
        
        // Call parent format() which will now preserve HTML
        $result = parent::format($message);
        
        // Restore original setting
        $this->AllowHtml = $original_allow_html;
        
        return $result;
      }
    }
    
    // For all other emails, use standard SMTP formatting
    return parent::format($message);
  }

}

