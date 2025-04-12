<?php

declare(strict_types=1);

namespace App;

use Waffle\Kernel as Base;
use Override;

class Kernel extends Base
{
    #[Override]
    public function boot(): self
    {
        $this->config = new Config();

        return $this;
    }
}
