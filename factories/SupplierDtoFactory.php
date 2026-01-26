<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->word(),
            'mainAddress' => $this->faker->word(),
            'mainContact' => $this->faker->word(),
            'accountReference' => $this->faker->word(),
            'parentRecord' => $this->faker->word(),
            'supplierClass' => $this->faker->word(),
            'creditTerms' => $this->faker->word(),
            'documentLanguage' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'remitAddress' => $this->faker->word(),
            'remitContact' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'chargeBearer' => $this->faker->word(),
            'accountUsedForPayment' => $this->faker->word(),
            'paymentBy' => $this->faker->word(),
            'paymentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->boolean(),
            'supplierAddress' => $this->faker->word(),
            'supplierContact' => $this->faker->word(),
            'location' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZone' => $this->faker->word(),
            'glAccounts' => $this->faker->word(),
            'attributes' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => $this->faker->boolean(),
            'retainageCashAccountId' => $this->faker->uuid(),
            'retainagePct' => $this->faker->randomFloat(2, 0, 1000),
            'note' => $this->faker->word(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'naceCode' => $this->faker->word(),
            'landedCostSupplier' => $this->faker->boolean(),
            'currencyOverride' => $this->faker->boolean(),
            'currencyRateOverride' => $this->faker->boolean(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDto::class;
    }
}
