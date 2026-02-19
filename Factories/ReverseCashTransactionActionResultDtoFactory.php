<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReverseCashTransactionActionResultDto;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReverseCashTransactionActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNbr' => $this->faker->word(),
            'cashTransaction' => CashTransactionDtoFactory::new()->make(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->randomElement(ReleaseCashTransactionActionResultActionResultEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReverseCashTransactionActionResultDto::class;
    }
}
