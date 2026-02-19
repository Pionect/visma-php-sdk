<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VoidPaymentActionResultDto;
use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VoidPaymentActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PaymentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'voidPayment' => PaymentDtoFactory::new()->make(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->randomElement(ReleaseCashTransactionActionResultActionResultEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VoidPaymentActionResultDto::class;
    }
}
