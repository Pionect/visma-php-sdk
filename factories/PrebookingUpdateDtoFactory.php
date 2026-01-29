<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrebookingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrebookingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountNumber' => AccountNumberInPrebookingUpdateDtoFactory::new()->make(),
            'subaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PrebookingUpdateDto::class;
    }
}
