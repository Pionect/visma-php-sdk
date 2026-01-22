<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'orderLineNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyLinkInsertDto::class;
    }
}
