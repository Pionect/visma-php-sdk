<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTaskInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskInExpenseClaimDetailUpdateDto::class;
    }
}
