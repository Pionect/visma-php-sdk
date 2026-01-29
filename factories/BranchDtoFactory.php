<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'organizationId' => $this->faker->numberBetween(1, 1000),
            'isMainBranch' => $this->faker->boolean(),
            'isActive' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'mainAddress' => MainAddressInBranchDtoFactory::new()->make(),
            'mainContact' => MainContactInBranchDtoFactory::new()->make(),
            'deliveryAddress' => DeliveryAddressInBranchDtoFactory::new()->make(),
            'deliveryContact' => DeliveryContactInBranchDtoFactory::new()->make(),
            'defaultCountry' => DefaultCountryInBranchDtoFactory::new()->make(),
            'industryCode' => IndustryCodeInBranchDtoFactory::new()->make(),
            'currency' => CurrencyInBranchDtoFactory::new()->make(),
            'vatZone' => VatZoneInBranchDtoFactory::new()->make(),
            'ledger' => LedgerInBranchDtoFactory::new()->make(),
            'bankSettings' => BankSettingsInBranchDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchDto::class;
    }
}
