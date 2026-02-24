<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentUpdateDto;
use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierPaymentUpdateDto>
 */
class SupplierPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(SupplierPaymentTypeEnum::cases()),
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'paymentAmount' => null,
            'branch' => $this->faker->word(),
            'paymentLines' => [],
            'overrideNumberSeries' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentUpdateDto::class;
    }
}
