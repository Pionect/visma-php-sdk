<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\JournalTransactionQueryV2parameters;
use Pionect\VismaSdk\Enums\JournalTransactionQueryV2parametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\JournalTransactionQueryV2parameters>
 */
class JournalTransactionQueryV2parametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'periodId' => $this->faker->uuid(),
            'lastModifiedDateTime' => $this->faker->word(),
            'module' => $this->faker->word(),
            'status' => $this->faker->randomElement(JournalTransactionQueryV2parametersStatusEnum::cases()),
            'expandAttachments' => $this->faker->boolean(),
            'branch' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionQueryV2parameters::class;
    }
}
