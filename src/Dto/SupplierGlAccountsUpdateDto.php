<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory factory()
 */
class SupplierGlAccountsUpdateDto extends Model
{
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
