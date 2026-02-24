<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WorkTypeDto;
use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\WorkTypeDto>
 */
class WorkTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'rutRotType' => $this->faker->randomElement(WorkTypeRutRotTypeEnum::cases()),
            'description' => $this->faker->sentence(),
            'xmlTag' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WorkTypeDto::class;
    }
}
