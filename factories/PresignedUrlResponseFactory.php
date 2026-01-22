<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PresignedUrlResponse;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PresignedUrlResponseFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'preSignedUrl' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PresignedUrlResponse::class;
    }
}
