<?php

declare(strict_types=1);

namespace App\Controller;

class TestController
{
    public function index(): array
    {
        return ["custom data set"];
    }

    public function params(): array
    {
        return ["custom data set"];
    }

    public function custom(): array
    {
        return ["custom data set"];
    }
}
