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
            'numberOfEmployees' => $this->faker->word(),
            'parentRecordNumber' => $this->faker->word(),
            'supplierClassId' => $this->faker->word(),
            'overrideWithClassValues' => $this->faker->boolean(),
            'creditTermsId' => $this->faker->word(),
            'documentLanguage' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
            'currencyOverride' => $this->faker->word(),
            'currencyRateOverride' => $this->faker->word(),
            'paymentMethodId' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'corporateId' => $this->faker->word(),
            'vatZoneId' => $this->faker->word(),
            'chargeBearer' => $this->faker->word(),
            'accountUsedForPayment' => $this->faker->word(),
            'paymentBy' => $this->faker->word(),
            'mainAddress' => $this->faker->word(),
            'mainContact' => $this->faker->word(),
            'remitAddress' => $this->faker->word(),
            'remitContact' => $this->faker->word(),
            'supplierAddress' => $this->faker->word(),
            'supplierContact' => $this->faker->word(),
            'glAccounts' => $this->faker->word(),
            'supplierPaymentMethodDetails' => [],
            'attributeLines' => [],
            'retainageCashAccountId' => $this->faker->word(),
            'retainageApply' => $this->faker->word(),
            'retainagePct' => $this->faker->word(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'naceCode' => $this->faker->word(),
            'landedCostSupplier' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierUpdateDto::class;
    }
}
