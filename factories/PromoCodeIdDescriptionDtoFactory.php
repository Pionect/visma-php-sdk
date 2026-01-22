<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PromoCodeIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PromoCodeIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PromoCodeIdDescriptionDto::class;
    }
}
