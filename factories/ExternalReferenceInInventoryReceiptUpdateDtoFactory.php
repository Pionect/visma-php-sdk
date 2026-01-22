<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExternalReferenceInInventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExternalReferenceInInventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExternalReferenceInInventoryReceiptUpdateDto::class;
    }
}
