<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory testFactory()
 */
class ExpenseClaimUpdateDto extends Model
{
    public function __construct(
        public ?DateInExpenseClaimUpdateDto $date = null,
        public ?DescriptionInExpenseClaimUpdateDto $description = null,
        public ?ClaimedByInExpenseClaimUpdateDto $claimedBy = null,
        public ?CustomerInExpenseClaimUpdateDto $customer = null,
        public ?string $customerUpdateAnswer = null,
        public ?LocationInExpenseClaimUpdateDto $location = null,
        public ?array $details = null,
    ) {}
}
