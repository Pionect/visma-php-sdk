<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryCrossReferenceUpdateDto;
use Pionect\VismaSdk\Enums\InventoryCrossReferenceAlternateTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryCrossReferenceUpdateDto>
 */
class InventoryCrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'alternateType' => $this->faker->randomElement(InventoryCrossReferenceAlternateTypeEnum::cases()),
            'bAccount' => $this->faker->word(),
            'alternateId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryCrossReferenceUpdateDto::class;
    }
}
