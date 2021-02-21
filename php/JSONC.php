<?php

namespace Unional\Jsonc;

final class JSONC
{
  /**
   * decode jsonc
   */
  final public static function decode($json, $assoc = false, $depth = 512, $options = 0)
  {
    $trimmed = self::removeLineComments(self::removeBlockComments($json));
    return json_decode($trimmed, $assoc, $depth, $options);
  }
  private static function removeBlockComments($json)
  {
    return $json;
  }
  private static function removeLineComments($json)
  {
    return $json;
  }
}
