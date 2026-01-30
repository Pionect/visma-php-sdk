<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTransactionTaxDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTransactionTaxDetailUpdateDtoFactory factory()
 */
class CashTransactionTaxDetailUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $taxableAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $vatAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $expenseAmount;
}
