<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UpdateNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\UpdateNoteDto>
 */
class UpdateNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UpdateNoteDto::class;
    }
}
