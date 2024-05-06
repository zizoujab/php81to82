<?php
trait Foo
{
    public const CONSTANT = 1;
}
class Bar
{
    use Foo;
}
var_dump(Bar::CONSTANT);
var_dump(Foo::CONSTANT);