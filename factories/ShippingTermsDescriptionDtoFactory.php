<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingTermsDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingTermsDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingTermsDescriptionDto::class;
    }
}
