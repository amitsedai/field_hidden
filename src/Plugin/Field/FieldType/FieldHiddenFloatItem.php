<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldType\FieldHiddenFloatItem.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\FloatItem;

/**
 * Plugin implementation of the 'text' field type.
 *
 * @FieldType(
 *   id = "field_hidden_float",
 *   label = @Translation("Hidden float"),
 *   description = @Translation("This field stores a number in the database in a floating point format."),
 *   default_widget = "field_hidden_numeric",
 *   default_formatter = "field_hidden_numeric_unformatted"
 * )
 */
class FieldHiddenFloatItem extends FloatItem {}