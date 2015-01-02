<?php /**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldFormatter\FieldHiddenIntegerFormatter.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Plugin\Field\FieldFormatter\IntegerFormatter;

/**
 * @FieldFormatter(
 *  id = "field_hidden_integer",
 *  label = @Translation("Display, formatted"),
 *  field_types = {"field_hidden_integer"}
 * )
 */
class FieldHiddenIntegerFormatter extends IntegerFormatter {}
