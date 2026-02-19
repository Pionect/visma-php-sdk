<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrepareInvoiceActionResultDto;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrepareInvoiceActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'customerInvoiceDto' => CustomerInvoiceDtoFactory::new()->make(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->randomElement(ReleaseCashTransactionActionResultActionResultEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrepareInvoiceActionResultDto::class;
    }
}
