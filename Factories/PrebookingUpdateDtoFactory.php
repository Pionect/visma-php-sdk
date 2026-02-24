<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrebookingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PrebookingUpdateDto>
 */
class PrebookingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PrebookingUpdateDto::class;
    }
}
