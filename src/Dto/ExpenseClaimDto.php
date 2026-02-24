<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ExpenseClaimQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Expense Claim in ExpenseClaimController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDtoFactory testFactory()
 */
class ExpenseClaimDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseClaimDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Ref. no. > The unique reference number of the expense claim
         * document.
         */
        public ?string $refNbr = null,
        /**
         * The top part > Status > The current status of the expense claim: On
         * Hold/Pending Approval/Approved/Rejected/Released.
         */
        public ?ExpenseClaimQueryParametersStatusEnum $status = null,
        /** The top part > Approval status > The status of the claim in Approval. */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        /** Mandatory field: The top part > Date* > The date when the claim was entered. */
        public ?\Carbon\Carbon $date = null,
        /** Mandatory field: The top part > Description > A description of the claim. */
        public ?string $description = null,
        public ?ClaimedByInExpenseClaimDto $claimedBy = null,
        /** The top part > Claim total > The total amount of the claim. */
        public int|float|null $claimTotal = null,
        /**
         * The top part > VAT taxable total > The document total that is subjected to
         * VAT.
         */
        public int|float|null $vatTaxableTotal = null,
        /** The top part > VAT exempt total > The document total that is exempt from VAT. */
        public int|float|null $vatExemptTotal = null,
        public ?CustomerInExpenseClaimDto $customer = null,
        /** The top part > Currency > The currency of the claim. */
        public ?string $currency = null,
        /** The top part > Approval date > The date when the claim was approved. */
        public ?\Carbon\Carbon $approvalDate = null,
        public ?DepartmentInExpenseClaimDto $department = null,
        public ?LocationInExpenseClaimDto $location = null,
        /** System generated information: The lastest time the expense claim was modified */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var ExpenseClaimDetailDto[]|null
         *                                   Expence claim details tab >
         */
        public ?array $details = null,
        /** The top part > Approval status > A text field. */
        public ?string $approvalStatusText = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
