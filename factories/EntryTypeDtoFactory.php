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
            'defaultOffsetAccountBranch' => $this->faker->word(),
            'defaultOffsetAccount' => $this->faker->word(),
            'defaultOffsetSubaccount' => $this->faker->word(),
            'reclasificationAccount' => $this->faker->word(),
            'businessAccount' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'useForPaymentsReclasification' => $this->faker->boolean(),
            'reclasificationAccountOverride' => $this->faker->word(),
            'offsetAccountOverride' => $this->faker->word(),
            'offsetSubaccountOverride' => $this->faker->word(),
            'offsetAccountBranch' => $this->faker->word(),
            'vatZone' => $this->faker->word(),
            'taxCalculationMode' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeDto::class;
    }
}
