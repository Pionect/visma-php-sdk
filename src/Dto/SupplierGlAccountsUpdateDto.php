<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierGlAccountsUpdateDtoFactory factory()
 */
class SupplierGlAccountsUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierSubaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseAccountNonTax;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseEuaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseAccountImport;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseSubaccount;
}
