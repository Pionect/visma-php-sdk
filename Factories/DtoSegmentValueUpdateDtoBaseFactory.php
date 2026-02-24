<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoSegmentValueUpdateDtoBase;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DtoSegmentValueUpdateDtoBase>
 */
class DtoSegmentValueUpdateDtoBaseFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'value' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoSegmentValueUpdateDtoBase::class;
    }
}
