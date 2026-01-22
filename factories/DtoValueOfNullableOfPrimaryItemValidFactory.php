<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPrimaryItemValid;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPrimaryItemValidFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPrimaryItemValid::class;
    }
}
