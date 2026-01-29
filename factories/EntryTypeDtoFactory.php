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
            'defaultOffsetAccountBranch' => DefaultOffsetAccountBranchInEntryTypeDtoFactory::new()->make(),
            'defaultOffsetAccount' => DefaultOffsetAccountInEntryTypeDtoFactory::new()->make(),
            'defaultOffsetSubaccount' => DefaultOffsetSubaccountInEntryTypeDtoFactory::new()->make(),
            'reclasificationAccount' => ReclasificationAccountInEntryTypeDtoFactory::new()->make(),
            'businessAccount' => BusinessAccountInEntryTypeDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'useForPaymentsReclasification' => $this->faker->boolean(),
            'reclasificationAccountOverride' => ReclasificationAccountOverrideInEntryTypeDtoFactory::new()->make(),
            'offsetAccountOverride' => OffsetAccountOverrideInEntryTypeDtoFactory::new()->make(),
            'offsetSubaccountOverride' => OffsetSubaccountOverrideInEntryTypeDtoFactory::new()->make(),
            'offsetAccountBranch' => OffsetAccountBranchInEntryTypeDtoFactory::new()->make(),
            'vatZone' => VatZoneInEntryTypeDtoFactory::new()->make(),
            'taxCalculationMode' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeDto::class;
    }
}
