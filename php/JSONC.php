<?php

namespace Unional\Jsonc;

final class JSONC
{
  /**
   * decode jsonc
   */
  final public static function decode($json, $assoc = false, $depth = 512, $options = 0)
  {
    $trimmed = self::removeComments($json);
    echo "trimmed: " . $trimmed;
    return json_decode($trimmed, $assoc, $depth, $options);
  }
  private static function removeComments($json)
  {
    // <https://stackoverflow.com/questions/8148797/a-json-parser-for-php-that-supports-comments>
    return  preg_replace('~
    (" (?:[^"\\\\] | \\\\\\\\ | \\\\")*+ ") | \# [^\v]*+ | // [^\v]*+ | /\* .*? \*/
  ~xs', '$1', $json);
  }
}
