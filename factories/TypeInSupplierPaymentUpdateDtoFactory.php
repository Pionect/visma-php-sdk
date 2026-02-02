<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TypeInSupplierPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TypeInSupplierPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TypeInSupplierPaymentUpdateDto::class;
    }
}
