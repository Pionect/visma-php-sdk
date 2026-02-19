<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountDetailUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'skipDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'sequanceId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountDetailUpdateDto::class;
    }
}
