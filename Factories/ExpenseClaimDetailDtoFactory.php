<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDetailDto;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ExpenseClaimDetailDto>
 */
class ExpenseClaimDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'claimDetailId' => $this->faker->numberBetween(1, 1000),
            'lineId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expenseItem' => null,
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'unitCost' => null,
            'currency' => $this->faker->word(),
            'totalAmount' => null,
            'invoiceable' => $this->faker->boolean(),
            'claimAmount' => null,
            'amountInClaimCurr' => null,
            'project' => null,
            'projectTask' => null,
            'expenseAccount' => null,
            'expenseSubaccount' => null,
            'branch' => null,
            'taxCategory' => null,
            'refNbr' => $this->faker->word(),
            'salesAccount' => null,
            'salesSubaccount' => null,
            'employeePart' => null,
            'customer' => null,
            'location' => null,
            'arReferenceNbr' => $this->faker->word(),
            'approvalStatus' => $this->faker->randomElement(TimeCardSummaryApprovalStatusEnum::cases()),
            'approvalStatusText' => $this->faker->word(),
            'approver' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailDto::class;
    }
}
