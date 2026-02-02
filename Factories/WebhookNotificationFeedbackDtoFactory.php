<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WebhookNotificationFeedbackDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WebhookNotificationFeedbackDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'notificationId' => $this->faker->uuid(),
            'source' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'isSuccess' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return WebhookNotificationFeedbackDto::class;
    }
}
