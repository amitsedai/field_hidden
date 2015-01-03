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
 *  label = @Translation("Hidden Field"),
 *  field_types = {"integer", "decimal", "float"}
 * )
 */
class FieldHiddenNumericWidget extends NumberWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $main_widget = parent::formElement($items, $delta, $element, $form, $form_state);
    $element = $main_widget['value'];

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