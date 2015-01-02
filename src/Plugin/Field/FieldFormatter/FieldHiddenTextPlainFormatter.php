<?php /**
 * @file
 * Contains \Drupal\field_hidden\Plugin\Field\FieldFormatter\FieldHiddenTextPlainFormatter.
 */

namespace Drupal\field_hidden\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Plugin\Field\FieldFormatter\StringFormatter;

/**
 * @FieldFormatter(
 *  id = "field_hidden_text_plain",
 *  label = @Translation("Display, as plain text"),
 *  field_types = {"field_hidden_text", "field_hidden_text_long"}
 * )
 */
class FieldHiddenTextPlainFormatter extends StringFormatter {}
