<?php
readonly class Foo
{
    public int $bar;
    public function __construct() {
        $this->bar = 1;
    }
}
$foo = new Foo();
$foo->baz = 1;
var_dump($foo->baz);