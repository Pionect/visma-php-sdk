<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleasePaymentActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleasePaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ReleasePaymentActionDto::class;
    }
}
