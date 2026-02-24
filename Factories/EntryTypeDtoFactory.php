<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EntryTypeDto;
use Pionect\VismaSdk\Enums\EntryTypeDisableReceiptEnum;
use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\EntryTypeDto>
 */
class EntryTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'entryTypeId' => $this->faker->uuid(),
            'disableReceipt' => $this->faker->randomElement(EntryTypeDisableReceiptEnum::cases()),
            'module' => $this->faker->word(),
            'defaultOffsetAccountBranch' => null,
            'defaultOffsetAccount' => null,
            'defaultOffsetSubaccount' => null,
            'reclasificationAccount' => null,
            'businessAccount' => null,
            'description' => $this->faker->sentence(),
            'useForPaymentsReclasification' => $this->faker->boolean(),
            'reclasificationAccountOverride' => null,
            'offsetAccountOverride' => null,
            'offsetSubaccountOverride' => null,
            'offsetAccountBranch' => null,
            'vatZone' => null,
            'taxCalculationMode' => $this->faker->randomElement(EntryTypeTaxCalculationModeEnum::cases()),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeDto::class;
    }
}
