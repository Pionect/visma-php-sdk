<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CogsSubaccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CogsSubaccountInInventoryAccountInformationDto>
 */
class CogsSubaccountInInventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CogsSubaccountInInventoryAccountInformationDto::class;
    }
}
