<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemClassInInventoryDto;
use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ItemClassInInventoryDto>
 */
class ItemClassInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(ItemClassTypeEnum::cases()),
            'attributes' => [],
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemClassInInventoryDto::class;
    }
}
