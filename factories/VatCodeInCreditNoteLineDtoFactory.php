<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInCreditNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInCreditNoteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInCreditNoteLineDto::class;
    }
}
