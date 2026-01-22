<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalespersonInCreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalespersonInCreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalespersonInCreditNoteUpdateDto::class;
    }
}
