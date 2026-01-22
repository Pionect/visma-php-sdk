<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TypeInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TypeInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TypeInPaymentUpdateDto::class;
    }
}
