<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentOrdersLinesUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PaymentOrdersLinesUpdateDto>
 */
class PaymentOrdersLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'appliedToOrder' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentOrdersLinesUpdateDto::class;
    }
}
