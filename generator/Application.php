<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator;

use Pionect\VismaSdk\Generator\Commands\GenerateCommand;
use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public function __construct()
    {
        parent::__construct('Plain JSON SDK Generator', '1.0.0');

        $this->add(new GenerateCommand);
    }
}
