<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActiveMultilanguageDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActiveMultilanguageDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'isDefault' => $this->faker->boolean(),
            'languageIso' => $this->faker->word(),
            'nativeName' => $this->faker->company(),
            'isActive' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ActiveMultilanguageDto::class;
    }
}
