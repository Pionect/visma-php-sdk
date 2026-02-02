<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInInventoryReceiptUpdateDto::class;
    }
}
