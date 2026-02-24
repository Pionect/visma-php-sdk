<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectAccountGroupDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectAccountGroupDto>
 */
class ProjectAccountGroupDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountGroupId' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'attributes' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectAccountGroupDto::class;
    }
}
