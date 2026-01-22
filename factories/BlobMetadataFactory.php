<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BlobMetadata;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BlobMetadataFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'blobId' => $this->faker->uuid(),
            'blobName' => $this->faker->company(),
            'contentType' => $this->faker->word(),
            'mD5hash' => $this->faker->word(),
            'fileChecksum' => $this->faker->word(),
            'size' => $this->faker->numberBetween(1, 100),
            'countryCode' => $this->faker->word(),
            'createdDateTimeUtc' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return BlobMetadata::class;
    }
}
