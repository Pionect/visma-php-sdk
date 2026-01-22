<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfContactInfoUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfContactInfoUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfContactInfoUpdateDto::class;
    }
}
