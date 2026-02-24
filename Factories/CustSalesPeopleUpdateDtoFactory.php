<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustSalesPeopleUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustSalesPeopleUpdateDto>
 */
class CustSalesPeopleUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'customerId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'commissionPct' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustSalesPeopleUpdateDto::class;
    }
}
