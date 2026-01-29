<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'organizationCd' => $this->faker->word(),
            'name' => $this->faker->name(),
            'organizationType' => $this->faker->word(),
            'fileTaxByBranches' => $this->faker->boolean(),
            'baseCurrency' => $this->faker->word(),
            'mainAddress' => MainAddressInExtendedOrganizationDtoFactory::new()->make(),
            'mainContact' => MainContactInExtendedOrganizationDtoFactory::new()->make(),
            'deliveryAddress' => DeliveryAddressInExtendedOrganizationDtoFactory::new()->make(),
            'deliveryContact' => DeliveryContactInExtendedOrganizationDtoFactory::new()->make(),
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'defaultCountry' => DefaultCountryInExtendedOrganizationDtoFactory::new()->make(),
            'industryCode' => IndustryCodeInExtendedOrganizationDtoFactory::new()->make(),
            'currency' => CurrencyInExtendedOrganizationDtoFactory::new()->make(),
            'vatZone' => VatZoneInExtendedOrganizationDtoFactory::new()->make(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'ledger' => LedgerInExtendedOrganizationDtoFactory::new()->make(),
            'bankSettings' => BankSettingsInExtendedOrganizationDtoFactory::new()->make(),
            'branches' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ExtendedOrganizationDto::class;
    }
}
