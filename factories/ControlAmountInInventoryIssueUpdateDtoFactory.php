<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ControlAmountInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ControlAmountInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ControlAmountInInventoryIssueUpdateDto::class;
    }
}
