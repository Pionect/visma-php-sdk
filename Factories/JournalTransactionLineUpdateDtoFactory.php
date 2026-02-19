<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\JournalTransactionLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class JournalTransactionLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'debitAmountInCurrency' => null,
            'creditAmountInCurrency' => null,
            'vatCodeId' => $this->faker->uuid(),
            'vatId' => $this->faker->uuid(),
            'branch' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionLineUpdateDto::class;
    }
}
