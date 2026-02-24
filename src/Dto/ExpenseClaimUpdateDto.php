<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ExpenseClaimUpdateCustomerUpdateAnswerEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory testFactory()
 */
class ExpenseClaimUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $claimedBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        /**
         * If the customer is updated the claim details customer information can be
         * updated using the provided answer. By default 'SelectedCustomer' is selected.
         */
        public ?ExpenseClaimUpdateCustomerUpdateAnswerEnum $customerUpdateAnswer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        /**
         * @var ExpenseClaimDetailUpdateDto[]|null
         *                                         Expense Claim detail information
         */
        public ?array $details = null,
    ) {}
}
