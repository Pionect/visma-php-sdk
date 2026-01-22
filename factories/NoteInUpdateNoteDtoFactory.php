<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\NoteInUpdateNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class NoteInUpdateNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return NoteInUpdateNoteDto::class;
    }
}
