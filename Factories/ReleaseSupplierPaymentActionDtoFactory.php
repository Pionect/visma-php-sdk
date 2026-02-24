<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseSupplierPaymentActionDto;
use Pionect\VismaSdk\Enums\SupplierPaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ReleaseSupplierPaymentActionDto>
 */
class ReleaseSupplierPaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(SupplierPaymentTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return ReleaseSupplierPaymentActionDto::class;
    }
}
