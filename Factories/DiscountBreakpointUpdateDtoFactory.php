<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DiscountBreakpointUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountBreakpointUpdateDto>
 */
class DiscountBreakpointUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'pendingBreakAmount' => null,
            'pendingDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'pendingDiscountPercent' => null,
            'pendingDiscountAmount' => null,
            'pendingBreakQuantity' => null,
            'breakAmount' => null,
            'discountAmount' => null,
            'discountPercent' => null,
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBreakpointUpdateDto::class;
    }
}
