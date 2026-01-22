<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ProjectDto::class;
    }
}
