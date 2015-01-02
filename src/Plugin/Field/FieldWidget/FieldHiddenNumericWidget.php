<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldWidget\FieldHiddenNumericWidget.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\NumberWidget;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'field_hidden' widget.
 * @FieldWidget(
 *  id = "field_hidden_numeric",
 *  label = @Translation("Hidden field Numeric"),
 *  field_types = {"field_hidden_integer", "field_hidden_decimal", "field_hidden_float"}
 * )
 */
class FieldHiddenNumericWidget extends NumberWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $parent_element = parent::formElement($items, $delta,  $element, $form, $form_state);
    $element = $parent_element['value'];
    $field_settings = $this->getFieldSettings();

    // Set the step for floating point and decimal numbers.
    switch ($this->fieldDefinition->getType()) {
      case 'field_hidden_decimal':
        $element['#step'] = pow(0.1, $field_settings['scale']);
        break;

      case 'field_hidden_float':
        $element['#step'] = 'any';
        break;
    }

    if($form_state->getFormObject()->getFormId() != 'field_ui_field_edit_form'){
      $element['#type'] = 'hidden';
    }
    else {
      $field_hidden_settings = \Drupal::config('field_hidden.settings')->get('field_hidden_instance_settings_hide_defval');
      if($field_hidden_settings == 1){
        $element['#type'] = 'hidden';
      }
    }
    return array('value' => $element);
  }
}