<?php

namespace tamanna\TestPackage;

class TestClass{
    public function greet(string $name = "World"): string
    {
        return "Hello, $name!";
    }
}
