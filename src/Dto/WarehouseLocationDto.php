<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\WarehouseLocationPrimaryItemValidEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WarehouseLocationDtoFactory testFactory()
 */
class WarehouseLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Location ID > The unique ID of the warehouse location. */
        public ?string $locationId = null,
        /** Description > A brief description of the warehouse location. */
        public ?string $description = null,
        /** Active > This check box indicates whether this location is active. */
        public ?bool $active = null,
        /**
         * Include in qty. available > You select this check box if the quantities of
         * goods available at this location will be included in the quantities of
         * available goods and used in inventory transactions, such as issues and
         * transfers.
         */
        public ?bool $inclQtyAvail = null,
        /**
         * Cost separately > You select this check box if the costs for goods available
         * at this location will be calculated separately from costs calculated at the
         * system-level; that is, for FIFO and specific valuation methods, separate cost
         * layers will be created for this location.
         */
        public ?bool $isCosted = null,
        /**
         * Sales allowed > You select this check box if sales are allowed from this
         * location.
         */
        public ?bool $salesValid = null,
        /**
         * Receipts allowed > You select this check box if receipts are allowed at this
         * location.
         */
        public ?bool $receiptsValid = null,
        /**
         * Transfers allowed > You select this check box if transfers are allowed for
         * this location.
         */
        public ?bool $transfersValid = null,
        /**
         * Assembly allowed > You select this check box if assembly operations are
         * allowed at this location.
         */
        public ?bool $assemblyValid = null,
        /**
         * Primary item validation > An option indicating whether the operations with
         * the primary item should be validated for this location and how.
         */
        public ?WarehouseLocationPrimaryItemValidEnum $primaryItemValid = null,
        public ?PrimaryItemInWarehouseLocationDto $primaryItem = null,
        public ?PrimaryItemClassInWarehouseLocationDto $primaryItemClass = null,
        public ?ProjectInWarehouseLocationDto $project = null,
        public ?ProjectTaskInWarehouseLocationDto $projectTask = null,
    ) {}
}
