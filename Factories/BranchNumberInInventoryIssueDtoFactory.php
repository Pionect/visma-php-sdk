<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryIssueDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryIssueDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInInventoryIssueDto::class;
    }
}
