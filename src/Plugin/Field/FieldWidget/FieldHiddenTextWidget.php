<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldWidget\FieldHidden.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\StringTextfieldWidget;

/**
 * Plugin implementation of the 'field_hidden' widget.
 * @FieldWidget(
 *  id = "field_hidden",
 *  label = @Translation("Hidden field"),
 *  field_types = {"field_hidden_text","field_hidden_text_long"}
 * )
 */
class FieldHiddenTextWidget extends StringTextfieldWidget{
  /**
   * @FIXME
   * Move all logic relating to the field_hidden widget into this class.
   * For more information, see:
   *
   * https://www.drupal.org/node/1796000
   * https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Field%21WidgetInterface.php/interface/WidgetInterface/8
   * https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Field%21WidgetBase.php/class/WidgetBase/8
   */
  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $main_widget = parent::formElement($items, $delta, $element, $form, $form_state);
    $element = $main_widget['value'];
    $element['#type'] = 'hidden';

    if($form_state->getFormObject()->getFormId() == 'field_ui_field_edit_form'){
      $element['#type'] = 'textfield';
      $field_hidden_settings = \Drupal::config('field_hidden.settings')->get('field_hidden_instance_settings_hide_defval');
      if($field_hidden_settings == 1){
        $element['#type'] = 'hidden';
      }
    }


    $element['#format'] = isset($items[$delta]->format) ? $items[$delta]->format : NULL;
    $element['#base_type'] = $main_widget['value']['#type'];
    return $element;
  }
}




