<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldWidget\FieldHiddenTextAreaWidget.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\StringTextareaWidget;

/**
 * Plugin implementation of the 'field_hidden' widget.
 * @FieldWidget(
 *  id = "field_hidden_string_long",
 *  label = @Translation("Hidden Field"),
 *  field_types = {"string_long"}
 * )
 */
class FieldHiddenTextAreaWidget extends StringTextareaWidget {
  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $main_widget = parent::formElement($items, $delta, $element, $form, $form_state);
    $element = $main_widget['value'];
    $element['#type'] = 'hidden';

    if($form_state->getFormObject()->getFormId() == 'field_ui_field_edit_form'){
      $element['#type'] = 'textarea';
      $field_hidden_settings = \Drupal::config('field_hidden.settings')->get('field_hidden_instance_settings_hide_defval');
      if($field_hidden_settings == 1){
        $element['#type'] = 'hidden';
      }
    }
    return $element;
  }

}