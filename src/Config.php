<?php

declare(strict_types=1);

namespace App;

use Waffle\Attribute\Configuration;

#[Configuration(
    controller: 'src/Controller',
    service: 'src/Service',
    securityLevel: 10,
)]
class Config extends Configuration
{
}
