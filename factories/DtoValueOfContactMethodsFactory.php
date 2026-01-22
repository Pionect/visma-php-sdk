<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfContactMethods;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfContactMethodsFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfContactMethods::class;
    }
}
