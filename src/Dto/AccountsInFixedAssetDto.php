<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * All accounts selected for this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountsInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountsInFixedAssetDtoFactory factory()
 */
class AccountsInFixedAssetDto extends Model
{
    /** The fixed asset account for this fixed asset */
    #[Property]
    public ?string $accountId;

    /** The sub account for this fixed asset */
    #[Property]
    public ?string $subAccountId;

    /** The accrual account for this fixed asset */
    #[Property]
    public ?string $accrualAccountId;

    /** The accrual sub account for this fixed asset */
    #[Property]
    public ?string $accrualSubAccountId;

    /** The accumulated depreciation account for this fixed asset */
    #[Property]
    public ?string $accumulatedDepreciationAccountId;

    /** The accumulated depreciation sub for this fixed asset */
    #[Property]
    public ?string $accumulatedDepreciationSubAccountId;

    /** The depreciation expense account for this fixed asset */
    #[Property]
    public ?string $depreciatedExpenseAccountId;

    /** The depreciation expense sub for this fixed asset */
    #[Property]
    public ?string $depreciatedExpenseSubAccountId;

    /** The proceeds account for this fixed asset */
    #[Property]
    public ?string $disposalAccountId;

    /** The proceeds sub for this fixed asset */
    #[Property]
    public ?string $disposalSubAccountId;

    /** The gain account for this fixed asset */
    #[Property]
    public ?string $gainAccountId;

    /** The gain sub for this fixed asset */
    #[Property]
    public ?string $gainSubAccountId;

    /** The loss account for this fixed asset */
    #[Property]
    public ?string $lossAccountId;

    /** The loss sub for this fixed asset */
    #[Property]
    public ?string $lossSubAccountId;

    /** The debit account */
    #[Property]
    public ?string $debitAccountId;

    /** The debit sub account */
    #[Property]
    public ?string $debitSubAccountId;

    /** The credit account */
    #[Property]
    public ?string $creditAccountId;

    /** The credit sub account */
    #[Property]
    public ?string $creditSubAccountId;
}
