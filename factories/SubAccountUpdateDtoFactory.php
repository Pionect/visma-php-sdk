<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubAccountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubAccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'subaccountNumber' => SubaccountNumberInSubAccountUpdateDtoFactory::new()->make(),
            'subaccountId' => SubaccountIdInSubAccountUpdateDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SubAccountUpdateDto::class;
    }
}
