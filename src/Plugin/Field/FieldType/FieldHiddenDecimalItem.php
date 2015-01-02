<?php
/**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldType\FieldHiddenDecimalItem.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\DecimalItem;

/**
 * Plugin implementation of the 'text' field type.
 *
 * @FieldType(
 *   id = "field_hidden_decimal",
 *   label = @Translation("Hidden decimal"),
 *   description = @Translation("This field stores a number in the database in a fixed decimal format."),
 *   default_widget = "field_hidden_numeric",
 *   default_formatter = "field_hidden_numeric_unformatted"
 * )
 */
class FieldHiddenDecimalItem extends DecimalItem{}