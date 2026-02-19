<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentLineBaseUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLineBaseUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'documentType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'amountPaid' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLineBaseUpdateDto::class;
    }
}
