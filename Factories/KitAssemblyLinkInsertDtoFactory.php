<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitAssemblyLinkInsertDto>
 */
class KitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'orderLineNumber' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyLinkInsertDto::class;
    }
}
