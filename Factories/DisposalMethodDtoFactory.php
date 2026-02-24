<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DisposalMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DisposalMethodDto>
 */
class DisposalMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DisposalMethodDto::class;
    }
}
