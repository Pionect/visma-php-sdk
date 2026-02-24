<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentDto;
use Pionect\VismaSdk\Enums\SupplierPaymentStatusEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierPaymentDto>
 */
class SupplierPaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(SupplierPaymentTypeEnum::cases()),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->randomElement(SupplierPaymentStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'supplier' => null,
            'location' => null,
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => null,
            'description' => $this->faker->sentence(),
            'paymentAmount' => null,
            'financeCharges' => null,
            'balance' => null,
            'unappliedBalance' => null,
            'appliedAmount' => null,
            'released' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => $this->faker->word(),
            'paymentLines' => [],
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentDto::class;
    }
}
