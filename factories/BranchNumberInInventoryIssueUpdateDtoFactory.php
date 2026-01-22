<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInInventoryIssueUpdateDto::class;
    }
}
