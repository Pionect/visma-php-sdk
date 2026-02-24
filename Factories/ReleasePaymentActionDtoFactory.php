<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleasePaymentActionDto;
use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ReleasePaymentActionDto>
 */
class ReleasePaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PaymentTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return ReleasePaymentActionDto::class;
    }
}
