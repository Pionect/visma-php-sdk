<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfProjectStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfProjectStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfProjectStatus::class;
    }
}
