<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory testFactory()
 */
class SupplierGlAccountsUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccountNonTax = null,
        #[MapName('expenseEUAccount'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseEuaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccountImport = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseSubaccount = null,
    ) {}
}
