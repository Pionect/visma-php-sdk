<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTransactionDetailUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CashTransactionDetailUpdateDto>
 */
class CashTransactionDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branchNumber' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'price' => null,
            'amount' => null,
            'offsetAccount' => $this->faker->word(),
            'offsetSubaccount' => [],
            'vatCode' => $this->faker->word(),
            'notInvoiceable' => $this->faker->boolean(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionDetailUpdateDto::class;
    }
}
