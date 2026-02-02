<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EntryTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'entryTypeId' => $this->faker->uuid(),
            'disableReceipt' => $this->faker->word(),
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
            'taxCalculationMode' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeDto::class;
    }
}
