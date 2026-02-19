<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDto;
use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\SupplierAccountUsedForPaymentEnum;
use Pionect\VismaSdk\Enums\SupplierChargeBearerEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentByEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(EmployeeStatusEnum::cases()),
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => $this->faker->word(),
            'parentRecord' => null,
            'supplierClass' => null,
            'creditTerms' => null,
            'documentLanguage' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'remitAddress' => null,
            'remitContact' => null,
            'paymentMethod' => null,
            'cashAccount' => $this->faker->word(),
            'chargeBearer' => $this->faker->randomElement(SupplierChargeBearerEnum::cases()),
            'accountUsedForPayment' => $this->faker->randomElement(SupplierAccountUsedForPaymentEnum::cases()),
            'paymentBy' => $this->faker->randomElement(SupplierPaymentByEnum::cases()),
            'paymentLeadTime' => $this->faker->numberBetween(1, 100),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->boolean(),
            'supplierAddress' => null,
            'supplierContact' => null,
            'location' => null,
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZone' => null,
            'glAccounts' => null,
            'attributes' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => $this->faker->boolean(),
            'retainageCashAccountId' => $this->faker->uuid(),
            'retainagePct' => null,
            'note' => $this->faker->word(),
            'numberOfEmployees' => $this->faker->numberBetween(1, 100),
            'naceCode' => $this->faker->word(),
            'landedCostSupplier' => $this->faker->boolean(),
            'currencyOverride' => $this->faker->boolean(),
            'currencyRateOverride' => $this->faker->boolean(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDto::class;
    }
}
