<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExternalReferenceInInventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExternalReferenceInInventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExternalReferenceInInventoryAdjustmentUpdateDto::class;
    }
}
