<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesInvoiceContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesInvoiceContactUpdateDto>
 */
class SalesInvoiceContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideContact' => $this->faker->boolean(),
            'name' => $this->faker->name(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'phone1' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesInvoiceContactUpdateDto::class;
    }
}
