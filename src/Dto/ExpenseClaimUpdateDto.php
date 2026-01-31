<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimUpdateDtoFactory testFactory()
 */
class ExpenseClaimUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $claimedBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        public ?string $customerUpdateAnswer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        public ?array $details = null,
    ) {}
}
