<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentDto;
use Pionect\VismaSdk\Enums\CashSaleStatusEnum;
use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PaymentDto>
 */
class PaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PaymentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->randomElement(CashSaleStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'customer' => null,
            'location' => null,
            'paymentMethod' => null,
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'paymentAmount' => null,
            'invoiceText' => $this->faker->word(),
            'appliedToDocuments' => null,
            'appliedToOrders' => null,
            'availableBalance' => null,
            'writeOffAmount' => null,
            'financeCharges' => null,
            'deductedCharges' => null,
            'branch' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentLines' => [],
            'ordersToApply' => [],
            'financialDetails' => null,
            'paymentAmountInCurrency' => null,
            'availableBalanceInCurrency' => null,
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentDto::class;
    }
}
