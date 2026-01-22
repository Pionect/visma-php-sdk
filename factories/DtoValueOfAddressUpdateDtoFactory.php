<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfAddressUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfAddressUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfAddressUpdateDto::class;
    }
}
