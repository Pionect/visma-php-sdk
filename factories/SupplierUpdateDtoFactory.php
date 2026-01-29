<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->word(),
            'accountReference' => $this->faker->word(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'parentRecordNumber' => $this->faker->word(),
            'supplierClassId' => $this->faker->uuid(),
            'overrideWithClassValues' => $this->faker->boolean(),
            'creditTermsId' => $this->faker->uuid(),
            'documentLanguage' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'currencyOverride' => $this->faker->boolean(),
            'currencyRateOverride' => $this->faker->boolean(),
            'paymentMethodId' => $this->faker->uuid(),
            'cashAccount' => $this->faker->word(),
            'paymentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->boolean(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZoneId' => $this->faker->uuid(),
            'chargeBearer' => $this->faker->word(),
            'accountUsedForPayment' => $this->faker->word(),
            'paymentBy' => $this->faker->word(),
            'mainAddress' => AddressUpdateDtoFactory::new()->make(),
            'mainContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'remitAddress' => AddressUpdateDtoFactory::new()->make(),
            'remitContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'supplierAddress' => AddressUpdateDtoFactory::new()->make(),
            'supplierContact' => ContactInfoUpdateDtoFactory::new()->make(),
            'glAccounts' => SupplierGlAccountsUpdateDtoFactory::new()->make(),
            'supplierPaymentMethodDetails' => [],
            'attributeLines' => [],
            'retainageCashAccountId' => $this->faker->uuid(),
            'retainageApply' => $this->faker->boolean(),
            'retainagePct' => $this->faker->randomFloat(2, 0, 1000),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'naceCode' => $this->faker->word(),
            'landedCostSupplier' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierUpdateDto::class;
    }
}
