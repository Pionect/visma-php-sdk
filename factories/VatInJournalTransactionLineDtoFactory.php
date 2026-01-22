<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatInJournalTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatInJournalTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatInJournalTransactionLineDto::class;
    }
}
