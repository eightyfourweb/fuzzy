<?php

declare(strict_types=1);

namespace App\Service;

class TestService
{
    /**
     * @return array<string, mixed>
     */
    public function getMyCustomTests(string $param1, string $param2, int $param3): array
    {
        return [
            "testKey" => "testValue",
            "param1" => $param1,
            "param2" => $param2,
            "param3" => $param3,
        ];
    }
}
