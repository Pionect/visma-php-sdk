<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BudgetUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BudgetUpdateDtoFactory factory()
 */
class BudgetUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $ledger;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $financialYear;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $account;

    #[Property]
    public ?array $subaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    public ?array $periods;
}
