<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\OrderToApplyDto;
use Pionect\VismaSdk\Enums\SalesOrderQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\OrderToApplyDto>
 */
class OrderToApplyDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNo' => $this->faker->word(),
            'status' => $this->faker->randomElement(SalesOrderQueryParametersStatusEnum::cases()),
            'appliedToOrder' => null,
            'transferredToInvoice' => null,
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => null,
            'description' => $this->faker->sentence(),
            'orderTotal' => null,
            'currency' => $this->faker->word(),
            'invoiceNbr' => $this->faker->word(),
            'invoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return OrderToApplyDto::class;
    }
}
