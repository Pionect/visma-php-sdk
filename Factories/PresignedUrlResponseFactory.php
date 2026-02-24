<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PresignedUrlResponse;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PresignedUrlResponse>
 */
class PresignedUrlResponseFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'preSignedUrl' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PresignedUrlResponse::class;
    }
}
