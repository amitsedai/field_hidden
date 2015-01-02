<?php /**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldFormatter\FieldHiddenDecimalFormatter.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Plugin\Field\FieldFormatter\DecimalFormatter;

/**
 * @FieldFormatter(
 *  id = "field_hidden_decimal",
 *  label = @Translation("Display, formatted"),
 *  field_types = {"field_hidden_decimal", "field_hidden_float"}
 * )
 */
class FieldHiddenDecimalFormatter extends DecimalFormatter {}
