<?php
/*
* Description: File for easy testing of php functions in terminal
*/

class Test {

  function foos($string) {
    $this->foo = $string;
    return $this->foo . "\n";
  }

  function bars($string) {
    return "offset" . $this->foo/2 . "\n";
  }

  function tunas() {
    print $this->tuna[0];
  }

  private $foo;
  private $bar;
  private $tuna = array(
    'der',
    'drt'
  );
}

$test = new Test;
$test->tunas();
