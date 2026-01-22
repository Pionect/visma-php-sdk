<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectAccountGroupDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectAccountGroupDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ProjectAccountGroupDto::class;
    }
}
