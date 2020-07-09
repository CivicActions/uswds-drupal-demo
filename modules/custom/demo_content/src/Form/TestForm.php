<?php

namespace Drupal\demo_content\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Class TestForm.
 *
 * @package Drupal\demo_content\Form
 */
class TestForm extends ConfigFormBase {

  /**
   * Constructs a TestForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\State\State $state
   *   The Drupal State service.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    parent::__construct($config_factory);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'demo_content_test_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['aefla_core_setup.contact_settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['states'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('States and territories'),
      'radio-example' => [
        '#type' => 'radios',
        '#title' => $this->t('Radio.'),
        '#default_value' => 'no',
        '#options' => [
          'no' => 'No',
          'yes' => 'Yes',
        ],
      ],
      'check-example' => [
        '#type' => 'checkbox',
        '#title' => $this->t('Checkbox'),
        '#default_value' => 1,
      ],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save settings'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    parent::submitForm($form, $form_state);
  }
}
