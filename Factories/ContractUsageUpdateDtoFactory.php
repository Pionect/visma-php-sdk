<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractUsageUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractUsageUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ContractUsageUpdateDto::class;
    }
}
