<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryIssueDto;
use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryIssueDto>
 */
class InventoryIssueDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'totalAmount' => null,
            'controlAmount' => null,
            'issueLines' => [],
            'referenceNumber' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryAdjustmentStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'totalQuantity' => null,
            'controlQuantity' => null,
            'batchNumber' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'attachments' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIssueDto::class;
    }
}
