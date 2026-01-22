<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\HoldInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class HoldInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return HoldInInventoryIssueUpdateDto::class;
    }
}
