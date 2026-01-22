<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BbaN3inBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BbaN3inBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BbaN3inBankSettingsUpdateDto::class;
    }
}
