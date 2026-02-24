<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentLineDto;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PaymentLineDto>
 */
class PaymentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'amountPaid' => null,
            'cashDiscountTaken' => null,
            'balanceWriteOff' => null,
            'writeOffReasonCode' => null,
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => null,
            'cashDiscountBalance' => null,
            'description' => $this->faker->sentence(),
            'currency' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'customerOrder' => $this->faker->word(),
            'crossRate' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLineDto::class;
    }
}
