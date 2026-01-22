<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInJournalTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInJournalTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInJournalTransactionLineDto::class;
    }
}
