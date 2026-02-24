<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerCreditNoteLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerCreditNoteLineUpdateDto>
 */
class CustomerCreditNoteLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'discountCode' => $this->faker->word(),
            'taskId' => $this->faker->uuid(),
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'unitPriceInCurrency' => null,
            'manualAmountInCurrency' => null,
            'accountNumber' => $this->faker->word(),
            'vatCodeId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmountInCurrency' => null,
            'manualDiscount' => $this->faker->boolean(),
            'subaccount' => [],
            'salesperson' => $this->faker->word(),
            'deferralSchedule' => $this->faker->numberBetween(1, 100),
            'deferralCode' => $this->faker->word(),
            'termStartDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'termEndDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerCreditNoteLineUpdateDto::class;
    }
}
