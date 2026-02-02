<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ClaimedByInExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ClaimedByInExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ClaimedByInExpenseClaimUpdateDto::class;
    }
}
