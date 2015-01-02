<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldType\FieldHiddenTextPlainItem.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\StringItem;

/**
 * Plugin implementation of the 'text' field type.
 *
 * @FieldType(
 *   id = "field_hidden_text",
 *   label = @Translation("Hidden text"),
 *   description = @Translation("This field stores varchar text in the database."),
 *   default_widget = "field_hidden",
 *   default_formatter = "field_hidden_text_plain"
 * )
 */
class FieldHiddenTextPlainItem extends StringItem{}