<?php
function likha_autoloader($classString){
  $namespaceList = explode('\\', $classString);
  if($namespaceList[0] == 'Likha')
  {
    if($type = strtolower($namespaceList[1]))
    {
      if($class = $namespaceList[2])
      {
        require_once __DIR__ . "/../{$type}/{$class}.php";
      }
    }
  }
}

spl_autoload_register('likha_autoloader');