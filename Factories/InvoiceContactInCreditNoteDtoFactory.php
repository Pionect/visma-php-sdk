<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceContactInCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InvoiceContactInCreditNoteDto>
 */
class InvoiceContactInCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contactId' => $this->faker->numberBetween(1, 1000),
            'businessName' => $this->faker->company(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'phone1' => $this->faker->word(),
            'overrideContact' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceContactInCreditNoteDto::class;
    }
}
