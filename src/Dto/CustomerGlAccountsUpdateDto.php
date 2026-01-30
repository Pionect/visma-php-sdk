<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerGlAccountsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerGlAccountsUpdateDtoFactory factory()
 */
class CustomerGlAccountsUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerLedgerAccount = null,
        public ?array $customerLedgerSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesNonTaxableAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesEuAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesExportAccount = null,
        public ?array $salesSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountAccount = null,
        public ?array $discountSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $freightAccount = null,
        public ?array $freightSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashDiscountAccount = null,
        public ?array $cashDiscountSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $prepaymentAccount = null,
        public ?array $prepaymentSubaccount = null,
    ) {}
}
