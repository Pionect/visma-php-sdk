<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierUpdateDto;
use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\SupplierAccountUsedForPaymentEnum;
use Pionect\VismaSdk\Enums\SupplierChargeBearerEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentByEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(EmployeeStatusEnum::cases()),
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
            'paymentLeadTime' => $this->faker->numberBetween(1, 100),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->boolean(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZoneId' => $this->faker->uuid(),
            'chargeBearer' => $this->faker->randomElement(SupplierChargeBearerEnum::cases()),
            'accountUsedForPayment' => $this->faker->randomElement(SupplierAccountUsedForPaymentEnum::cases()),
            'paymentBy' => $this->faker->randomElement(SupplierPaymentByEnum::cases()),
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
            'retainagePct' => null,
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
