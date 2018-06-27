<?php
namespace Likha\Engine
{
  class Path
  {
    public static function absolute(string $path) : string
    {
      return __DIR__ . "/../../{$path}";
    }
  }
}