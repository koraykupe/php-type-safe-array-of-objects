<?php

final class ExampleArray extends ArrayIterator
{
    public function __construct(Example ...$example)
    {
        parent::__construct($example);
    }
    public function current(): Example
    {
        return parent::current();
    }
    public function offsetGet($offset): Example
    {
        return parent::offsetGet($offset);
    }
}
