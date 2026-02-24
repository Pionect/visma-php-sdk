<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectBasicDto;
use Pionect\VismaSdk\Enums\TemplateNumberDescriptionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectBasicDto>
 */
class ProjectBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'projectId' => $this->faker->uuid(),
            'customer' => null,
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(TemplateNumberDescriptionStatusEnum::cases()),
            'description' => $this->faker->sentence(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'autoAllocate' => $this->faker->boolean(),
            'automaticReleaseAr' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'publicId' => $this->faker->uuid(),
            'timeStamp' => $this->faker->word(),
            'visibility' => null,
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBasicDto::class;
    }
}
