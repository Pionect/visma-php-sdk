<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LinkLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LinkLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'purchaseType' => $this->faker->word(),
            'purchaseNumber' => PurchaseNumberInLinkLineDtoFactory::new()->make(),
            'purchaseLineNbr' => PurchaseLineNbrInLinkLineDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return LinkLineDto::class;
    }
}
