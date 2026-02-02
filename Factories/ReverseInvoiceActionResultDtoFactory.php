<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReverseInvoiceActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReverseInvoiceActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'creditNoteDto' => CreditNoteDtoFactory::new()->make(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReverseInvoiceActionResultDto::class;
    }
}
