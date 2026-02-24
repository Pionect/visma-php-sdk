<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DisposalMethodInDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DisposalMethodInDetailsDto>
 */
class DisposalMethodInDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DisposalMethodInDetailsDto::class;
    }
}
