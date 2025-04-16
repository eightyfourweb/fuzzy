<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\TestService;
use Waffle\Attribute\Argument;
use Waffle\Attribute\Route;
use Waffle\Core\BaseController;
use Waffle\Core\View;

#[Route(path: '/test', name: 'test')]
class TestController extends BaseController
{
    #[Route(
        path: '',
        name: 'index',
    )]
    public function index(TestService $service): View
    {
        return new View(data: $service->getMyCustomTests(param1: 'test', param2: 'test1', param3: 1));
    }

    #[Route(
        path: '/params/{param1}/{param2}/{param3}',
        name: 'params',
        arguments: [
            new Argument(classType: 'string', paramName: 'param1', required: false),
            new Argument(classType: 'string', paramName: 'param2', required: false),
            new Argument(classType: 'int', paramName: 'param3', required: false),
        ],
    )]
    public function params(TestService $service, string $param1, string $param2, int $param3): View
    {
        return new View(data: $service->getMyCustomTests(param1: $param1, param2: $param2, param3: $param3));
    }

    #[Route(path: '/custom', name: 'custom')]
    public function custom(): View
    {
        return new View(data: ["custom data set"]);
    }
}
