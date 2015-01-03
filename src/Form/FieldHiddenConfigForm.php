<?php

/**
 * @file
 * Contains \Drupal\getid3\Form\FieldHiddenConfigForm.
 */

namespace Drupal\field_hidden\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class FieldHiddenConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'field_hidden_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['field_hidden_help'] = array(
      '#type' => 'markup',
      '#markup' => '<p>' . \Drupal::l($this->t('Help/Readme'), Url::fromRoute('help.page', ['name' => 'field_hidden'])) . '</p><p><hr/></p>',
    );
    $form['field_hidden_instance_settings_hide_defval'] = array(
      '#type' => 'checkbox',
      '#title' => t('Do not display default value field in instance setting form'),
      '#decription' => t('If checked, controlling/setting the default value in the field instance setting dialogue gets kind of hard.'),
      '#default_value' => \Drupal::config('field_hidden.settings')->get('field_hidden_instance_settings_hide_defval'),
      '#required' => FALSE,
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    // Save the new value.
    $this->config('field_hidden.settings')
      ->set('field_hidden_instance_settings_hide_defval', $form_state->getValue('field_hidden_instance_settings_hide_defval'))
      ->save();
  }
}