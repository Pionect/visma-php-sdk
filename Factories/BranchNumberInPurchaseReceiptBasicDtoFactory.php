<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInPurchaseReceiptBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInPurchaseReceiptBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInPurchaseReceiptBasicDto::class;
    }
}
