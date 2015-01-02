<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldType\FieldHiddenTextLongItem.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\StringItem;

/**
 * Plugin implementation of the 'text' field type.
 *
 * @FieldType(
 *   id = "field_hidden_text_long",
 *   label = @Translation("Hidden long text"),
 *   description = @Translation("This field stores long text text in the database."),
 *   default_widget = "field_hidden",
 *   default_formatter = "field_hidden_text_plain"
 * )
 */
class FieldHiddenTextLongItem extends StringItem {
  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings() {
    return array(
      'max_length' => 10000,
    ) + parent::defaultStorageSettings();
  }
}