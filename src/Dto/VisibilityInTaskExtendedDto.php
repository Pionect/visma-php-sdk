<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Information retrieved from the Summary tab
 */
class VisibilityInTaskExtendedDto extends Model
{
    /** General ledger */
    #[Property]
    public ?bool $visibleInGl;

    /** Supplier ledger */
    #[Property]
    public ?bool $visibleInAp;

    /** Customer ledger */
    #[Property]
    public ?bool $visibleInAr;

    /** Sales */
    #[Property]
    public ?bool $visibleInSo;

    /** Purchases */
    #[Property]
    public ?bool $visibleInPo;

    /** Expenses */
    #[Property]
    public ?bool $visibleInEa;

    /** Time entries */
    #[Property]
    public ?bool $visibleInTa;

    /** Inventory */
    #[Property]
    public ?bool $visibleInIn;

    /** Cash management */
    #[Property]
    public ?bool $visibleInCa;

    #[Property]
    public ?bool $visibleInCr;
}
