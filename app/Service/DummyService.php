<?php

declare(strict_types=1);

namespace App\Service;

class DummyService
{
    /**
     * @return string[]
     */
    public function getResults(): array
    {
        return [
            "someKey" => "someValue",
            "anotherKey" => "anotherValue",
            "get" => "TODO: Implement GET method"
        ];
    }
}
