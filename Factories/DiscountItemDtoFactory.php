<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountItemDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountItemDto>
 */
class DiscountItemDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'itemId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountItemDto::class;
    }
}
