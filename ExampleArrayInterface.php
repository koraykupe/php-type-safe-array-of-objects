<?php
use Iterator;

interface ExampleArrayInterface extends Iterator
{
   public function current(): Example
}
