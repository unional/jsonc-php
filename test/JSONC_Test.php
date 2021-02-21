<?php

namespace Unional\Jsonc;

use PHPUnit\Framework\TestCase;

class JSONC_Test extends TestCase
{
  public function test_decode_empty_string_gets_null()
  {
    $this->assertEquals(null, JSONC::decode(''));
  }
  public function test_decode_remove_block_comment()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{ /* comment */"a":1}', true));
  }
  public function test_decode_remove_multiple_block_comment()
  {
    $this->assertEquals(
      ['a' => 1],
      JSONC::decode('{ /* comment a */"a":/*comment b*/1}', true)
    );
  }
  public function test_decode_remove_multiple_block_comment_on_multiple_lines()
  {
    $this->assertEquals(
      ['a' => 1],
      JSONC::decode('{
        /* comment a */
        "a":
        /*comment b*/
        1
      }', true)
    );
  }
  public function test_decode_remove_block_comment_with_additional_start_block()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{ /* abc /* */"a": 1 }', true));
  }
  public function test_decode_remove_line_comment()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{
      // some line comment
      "a": 1}', true));
  }
  public function test_decode_remove_multiple_line_comments()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{
      // some line comment
      "a":
      // another line comment
      1}', true));
  }
  public function test_decode_remove_line_comment_with_start_block()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{
      // some line comment /*
      "a": 1}', true));
  }

  public function test_decode_remove_mixed_comments()
  {
    $this->assertEquals(['a' => 1], JSONC::decode('{
      // some line comment
      "a":
      /*
      block comment // with embedded line comment
      */
      1
    }', true));
  }
}
