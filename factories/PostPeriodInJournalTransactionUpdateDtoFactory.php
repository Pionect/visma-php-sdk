<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInJournalTransactionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInJournalTransactionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInJournalTransactionUpdateDto::class;
    }
}
