<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldType\FieldHiddenIntegerItem.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\IntegerItem;

/**
 * Plugin implementation of the 'text' field type.
 *
 * @FieldType(
 *   id = "field_hidden_integer",
 *   label = @Translation("Hidden integer"),
 *   description = @Translation("This field stores a number in the database as an integer."),
 *   default_widget = "field_hidden_numeric",
 *   default_formatter = "field_hidden_numeric_unformatted"
 * )
 */
class FieldHiddenIntegerItem extends IntegerItem{}