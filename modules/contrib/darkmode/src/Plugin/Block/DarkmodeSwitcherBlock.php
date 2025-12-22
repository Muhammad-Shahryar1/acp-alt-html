<?php

namespace Drupal\darkmode\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Adds Darkmode switcher block.
 *
 * @package Drupal\darkmode\Plugin\Block
 */
#[Block(
    id: "darkmode_switcher",
    admin_label: new TranslatableMarkup("Darkmode Switcher"),
)]
class DarkmodeSwitcherBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): static {
    return new static($configuration, $plugin_id, $plugin_definition,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration(): array {
    return [
      'bottom' => '64px',
      'right' => '32px',
      'left' => 'unset',
      'time' => '0.5s',
      'mix_color' => '#fff',
      'background_color' => '#fff',
      'button_color_dark' => '#100f2c',
      'button_color_light' => '#fff',
      'save_in_cookies' => FALSE,
      'theme_mode' => 'auto',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state): array {
    $form = parent::buildConfigurationForm($form, $form_state);
    $config = $this->configuration;
    $form['title'] = [
      '#type' => 'html_tag',
      '#tag' => 'h4',
      '#value' => $this->t('Settings for the Darkmode Switcher block'),
    ];
    $form['bottom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Bottom'),
      '#default_value' => $config['bottom'],
      '#description' => $this->t('Enter number of pixel for Bottom or unset'),
    ];
    $form['right'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Right'),
      '#default_value' => $config['right'],
      '#description' => $this->t('Enter number of pixel for Right or unset'),
    ];
    $form['left'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Left'),
      '#default_value' => $config['left'],
      '#description' => $this->t('Enter number of pixel for Left or unset'),
    ];
    $form['time'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Time'),
      '#default_value' => $config['time'],
      '#description' => $this->t('Enter number of Seconds'),
    ];
    $form['mix_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mix Color'),
      '#default_value' => $config['mix_color'],
      '#description' => $this->t('Enter the color code Ex: #fff'),
    ];
    $form['background_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Background Color'),
      '#default_value' => $config['background_color'],
      '#description' => $this->t('Enter the color code Ex: #fff'),
    ];
    $form['button_color_dark'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Button Color Dark'),
      '#default_value' => $config['button_color_dark'],
      '#description' => $this->t('Enter the color code Ex: #fff'),
    ];
    $form['button_color_light'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Button Color Light'),
      '#default_value' => $config['button_color_light'],
      '#description' => $this->t('Enter the color code Ex: #fff'),
    ];
    $form['save_in_cookies'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Save in Cookies'),
      '#default_value' => $config['save_in_cookies'],
    ];
    $form['theme_mode'] = [
      '#type' => 'select',
      '#title' => $this->t('Theme Mode'),
      '#default_value' => $config['theme_mode'] ?? 'auto',
      '#options' => [
        'auto' => $this->t('Auto (match OS)'),
        'light' => $this->t('Light'),
        'dark' => $this->t('Dark'),
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state): void {
    $this->configuration['bottom'] = $form_state->getValue('bottom');
    $this->configuration['right'] = $form_state->getValue('right');
    $this->configuration['left'] = $form_state->getValue('left');
    $this->configuration['time'] = $form_state->getValue('time');
    $this->configuration['mix_color'] = $form_state->getValue('mix_color');
    $this->configuration['background_color'] = $form_state->getValue('background_color');
    $this->configuration['button_color_dark'] = $form_state->getValue('button_color_dark');
    $this->configuration['button_color_light'] = $form_state->getValue('button_color_light');
    $this->configuration['save_in_cookies'] = (bool) $form_state->getValue('save_in_cookies');
    $this->configuration['theme_mode'] = $form_state->getValue('theme_mode');
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $config = $this->configuration;
    $build['content'] = [
      '#attached' => [
        'drupalSettings' => [
          'darkmode' => [
            'bottom' => $config['bottom'],
            'right' => $config['right'],
            'left' => $config['left'],
            'time' => $config['time'],
            'mixColor' => $config['mix_color'],
            'backgroundColor' => $config['background_color'],
            'buttonColorDark' => $config['button_color_dark'],
            'buttonColorLight' => $config['button_color_light'],
            'saveInCookies' => $config['save_in_cookies'],
            'themeMode' => $config['theme_mode'],
          ],
        ],
        'library' => [
          'darkmode/initiator',
          'darkmode/darkmodecss',
        ],
      ],
    ];
    return $build;
  }

}
