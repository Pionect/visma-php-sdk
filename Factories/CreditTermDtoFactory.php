<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreditTermDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreditTermDto>
 */
class CreditTermDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'termsId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'visibleTo' => $this->faker->word(),
            'dueDateType' => $this->faker->word(),
            'moveDueDateIfOnTheWeekend' => $this->faker->word(),
            'dueDay1' => $this->faker->numberBetween(1, 100),
            'dueDay1dayFrom1' => $this->faker->numberBetween(1, 100),
            'dueDay1dayTo1' => $this->faker->numberBetween(1, 100),
            'dueDay2' => $this->faker->numberBetween(1, 100),
            'dueDay2dayFrom1' => $this->faker->numberBetween(1, 100),
            'dueDay2dayTo1' => $this->faker->numberBetween(1, 100),
            'discountType' => $this->faker->word(),
            'discountDay' => $this->faker->numberBetween(1, 100),
            'discountPercent' => null,
            'delayDays' => $this->faker->numberBetween(1, 100),
            'calculationType' => $this->faker->word(),
            'instalmentType' => $this->faker->word(),
            'numberOfInstalments' => $this->faker->numberBetween(1, 100),
            'instalmentFrequency' => $this->faker->word(),
            'instalmentMethod' => $this->faker->word(),
            'instalmentsSchedule' => [],
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermDto::class;
    }
}
