<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VoidPaymentActionDto;
use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VoidPaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PaymentTypeEnum::cases()),
            'returnVoidPayment' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return VoidPaymentActionDto::class;
    }
}
