<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfProjTaskStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfProjTaskStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfProjTaskStatus::class;
    }
}
