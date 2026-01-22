<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VolumeUominPackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VolumeUominPackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VolumeUominPackagingUpdateDto::class;
    }
}
