<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReasonCodeInInventoryIssueLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReasonCodeInInventoryIssueLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReasonCodeInInventoryIssueLineDto::class;
    }
}
