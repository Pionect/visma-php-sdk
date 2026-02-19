<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseSupplierInvoiceActionResultDto;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleaseSupplierInvoiceActionResultDtoFactory extends Factory
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
        return ReleaseSupplierInvoiceActionResultDto::class;
    }
}
