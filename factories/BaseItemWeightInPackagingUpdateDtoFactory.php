<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BaseItemWeightInPackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BaseItemWeightInPackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return BaseItemWeightInPackagingUpdateDto::class;
    }
}
