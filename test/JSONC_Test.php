<?php

namespace Unional\Jsonc;

use PHPUnit\Framework\TestCase;

class jsonc_decode_Test extends TestCase
{
  public function test_empty_string_gets_null()
  {
    $a = JSONC::decode('');
    $this->assertEquals(null, $a);
  }
}
