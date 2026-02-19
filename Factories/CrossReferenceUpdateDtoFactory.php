<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CrossReferenceUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\InventoryCrossReferenceAlternateTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'alternateType' => $this->faker->randomElement(InventoryCrossReferenceAlternateTypeEnum::cases()),
            'bAccount' => $this->faker->word(),
            'alternateId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CrossReferenceUpdateDto::class;
    }
}
