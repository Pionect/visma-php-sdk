<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractTemplateIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractTemplateIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractTemplateIdDescriptionDto::class;
    }
}
