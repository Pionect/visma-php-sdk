<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDto;
use Pionect\VismaSdk\Enums\ExpenseClaimQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ExpenseClaimDto>
 */
class ExpenseClaimDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->randomElement(ExpenseClaimQueryParametersStatusEnum::cases()),
            'approvalStatus' => $this->faker->randomElement(TimeCardSummaryApprovalStatusEnum::cases()),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'claimedBy' => null,
            'claimTotal' => null,
            'vatTaxableTotal' => null,
            'vatExemptTotal' => null,
            'customer' => null,
            'currency' => $this->faker->word(),
            'approvalDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'department' => null,
            'location' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'details' => [],
            'approvalStatusText' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDto::class;
    }
}
