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
            'mainAddress' => MainAddressInSupplierDtoFactory::new()->make(),
            'mainContact' => MainContactInSupplierDtoFactory::new()->make(),
            'accountReference' => $this->faker->word(),
            'parentRecord' => ParentRecordInSupplierDtoFactory::new()->make(),
            'supplierClass' => SupplierClassInSupplierDtoFactory::new()->make(),
            'creditTerms' => CreditTermsInSupplierDtoFactory::new()->make(),
            'documentLanguage' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'remitAddress' => RemitAddressInSupplierDtoFactory::new()->make(),
            'remitContact' => RemitContactInSupplierDtoFactory::new()->make(),
            'paymentMethod' => PaymentMethodInSupplierDtoFactory::new()->make(),
            'cashAccount' => $this->faker->word(),
            'chargeBearer' => $this->faker->word(),
            'accountUsedForPayment' => $this->faker->word(),
            'paymentBy' => $this->faker->word(),
            'paymentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentRefDisplayMask' => $this->faker->word(),
            'paySeparately' => $this->faker->boolean(),
            'supplierAddress' => SupplierAddressInSupplierDtoFactory::new()->make(),
            'supplierContact' => SupplierContactInSupplierDtoFactory::new()->make(),
            'location' => LocationInSupplierDtoFactory::new()->make(),
            'vatRegistrationId' => $this->faker->uuid(),
            'corporateId' => $this->faker->uuid(),
            'vatZone' => VatZoneInSupplierDtoFactory::new()->make(),
            'glAccounts' => GlAccountsInSupplierDtoFactory::new()->make(),
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
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDto::class;
    }
}
