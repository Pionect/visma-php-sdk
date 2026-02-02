<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInCreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInCreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInCreditNoteUpdateDto::class;
    }
}
