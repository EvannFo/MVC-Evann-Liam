<?php

namespace App\Routing\Controller;

use Attribute;

#[Attribute]
class Route
{


    public function __construct(
        private string $name = "default",
        private string $path,
        private string $httpMethod = "GET"
    ) {
    }
}
