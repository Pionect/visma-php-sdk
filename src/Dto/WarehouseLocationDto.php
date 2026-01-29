<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WarehouseLocationDto extends Model
{
    /** Location ID &gt; The unique ID of the warehouse location. */
    #[Property]
    public ?string $locationId;

    /** Description &gt; A brief description of the warehouse location. */
    #[Property]
    public ?string $description;

    /** Active &gt; This check box indicates whether this location is active. */
    #[Property]
    public ?bool $active;

    /** Include in qty. available &gt; You select this check box if the quantities of goods available at this location will be included in the quantities of available goods and used in inventory transactions, such as issues and transfers. */
    #[Property]
    public ?bool $inclQtyAvail;

    /** Cost separately &gt; You select this check box if the costs for goods available at this location will be calculated separately from costs calculated at the system-level; that is, for FIFO and specific valuation methods, separate cost layers will be created for this location. */
    #[Property]
    public ?bool $isCosted;

    /** Sales allowed &gt; You select this check box if sales are allowed from this location. */
    #[Property]
    public ?bool $salesValid;

    /** Receipts allowed &gt; You select this check box if receipts are allowed at this location. */
    #[Property]
    public ?bool $receiptsValid;

    /** Transfers allowed &gt; You select this check box if transfers are allowed for this location. */
    #[Property]
    public ?bool $transfersValid;

    /** Assembly allowed &gt; You select this check box if assembly operations are allowed at this location. */
    #[Property]
    public ?bool $assemblyValid;

    /** Primary item validation &gt; An option indicating whether the operations with the primary item should be validated for this location and how. */
    #[Property]
    public ?string $primaryItemValid;

    #[Property]
    public ?primaryItemInWarehouseLocationDto $primaryItem;

    #[Property]
    public ?primaryItemClassInWarehouseLocationDto $primaryItemClass;

    #[Property]
    public ?projectInWarehouseLocationDto $project;

    #[Property]
    public ?projectTaskInWarehouseLocationDto $projectTask;
}
