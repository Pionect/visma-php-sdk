<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerGlAccountsUpdateDtoFactory testFactory()
 */
class CustomerGlAccountsUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
