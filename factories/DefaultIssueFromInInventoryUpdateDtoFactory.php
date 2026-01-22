<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultIssueFromInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultIssueFromInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultIssueFromInInventoryUpdateDto::class;
    }
}
