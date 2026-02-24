<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesCategoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesCategoryDto>
 */
class SalesCategoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'categoryId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
            'parentId' => $this->faker->numberBetween(1, 1000),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'subCategories' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SalesCategoryDto::class;
    }
}
