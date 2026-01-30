<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Expense Claim in ExpenseClaimController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDtoFactory testFactory()
 */
class ExpenseClaimDto extends Model
{
    public function __construct(
        public ?string $refNbr = null,
        public ?string $status = null,
        public ?string $approvalStatus = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $description = null,
        public ?ClaimedByInExpenseClaimDto $claimedBy = null,
        public int|float|null $claimTotal = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatExemptTotal = null,
        public ?CustomerInExpenseClaimDto $customer = null,
        public ?string $currency = null,
        public ?\Carbon\Carbon $approvalDate = null,
        public ?DepartmentInExpenseClaimDto $department = null,
        public ?LocationInExpenseClaimDto $location = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $details = null,
        public ?string $approvalStatusText = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
