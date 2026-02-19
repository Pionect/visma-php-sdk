<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LinkLineDto;
use Pionect\VismaSdk\Enums\LinkLinePurchaseTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LinkLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'purchaseType' => $this->faker->randomElement(LinkLinePurchaseTypeEnum::cases()),
            'purchaseNumber' => $this->faker->word(),
            'purchaseLineNbr' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return LinkLineDto::class;
    }
}
