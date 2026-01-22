<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AlternateTypeInInventoryCrossReferenceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AlternateTypeInInventoryCrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AlternateTypeInInventoryCrossReferenceUpdateDto::class;
    }
}
