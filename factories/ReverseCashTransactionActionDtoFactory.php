<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReverseCashTransactionActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReverseCashTransactionActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'returnCashTransaction' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ReverseCashTransactionActionDto::class;
    }
}
