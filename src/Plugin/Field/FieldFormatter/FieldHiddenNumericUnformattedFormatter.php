<?php /**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldFormatter\FieldHiddenNumericUnformattedFormatter.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Plugin\Field\FieldFormatter\DecimalFormatter;

/**
 * @FieldFormatter(
 *  id = "field_hidden_numeric_unformatted",
 *  label = @Translation("Display, unformatted"),
 *  field_types = {"field_hidden_integer", "field_hidden_decimal", "field_hidden_float"}
 * )
 */
class FieldHiddenNumericUnformattedFormatter extends DecimalFormatter {}
