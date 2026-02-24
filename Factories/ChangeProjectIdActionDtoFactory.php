<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeProjectIdActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ChangeProjectIdActionDto>
 */
class ChangeProjectIdActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return ChangeProjectIdActionDto::class;
    }
}
