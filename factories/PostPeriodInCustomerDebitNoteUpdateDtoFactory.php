<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInCustomerDebitNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInCustomerDebitNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInCustomerDebitNoteUpdateDto::class;
    }
}
