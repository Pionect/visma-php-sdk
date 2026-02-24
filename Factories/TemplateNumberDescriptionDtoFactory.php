<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TemplateNumberDescriptionDto;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TemplateNumberDescriptionDto>
 */
class TemplateNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TemplateNumberDescriptionDto::class;
    }
}
