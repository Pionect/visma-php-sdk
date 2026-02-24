<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\NoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\NoteDto>
 */
class NoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return NoteDto::class;
    }
}
