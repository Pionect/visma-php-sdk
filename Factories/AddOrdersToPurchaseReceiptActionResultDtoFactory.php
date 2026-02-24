<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddOrdersToPurchaseReceiptActionResultDto;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AddOrdersToPurchaseReceiptActionResultDto>
 */
class AddOrdersToPurchaseReceiptActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->randomElement(ReleaseCashTransactionActionResultActionResultEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddOrdersToPurchaseReceiptActionResultDto::class;
    }
}
