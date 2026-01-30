<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseLocationUpdateDtoFactory testFactory()
 */
class WarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?LocationIdInWarehouseLocationUpdateDto $locationId = null,
        public ?DescriptionInWarehouseLocationUpdateDto $description = null,
        public ?ActiveInWarehouseLocationUpdateDto $active = null,
        public ?InclQtyAvailInWarehouseLocationUpdateDto $inclQtyAvail = null,
        public ?IsCostedInWarehouseLocationUpdateDto $isCosted = null,
        public ?SalesValidInWarehouseLocationUpdateDto $salesValid = null,
        public ?ReceiptsValidInWarehouseLocationUpdateDto $receiptsValid = null,
        public ?TransfersValidInWarehouseLocationUpdateDto $transfersValid = null,
        public ?AssemblyValidInWarehouseLocationUpdateDto $assemblyValid = null,
        public ?PickPriorityInWarehouseLocationUpdateDto $pickPriority = null,
        public ?PrimaryItemValidInWarehouseLocationUpdateDto $primaryItemValid = null,
        public ?PrimaryItemIdInWarehouseLocationUpdateDto $primaryItemId = null,
        public ?PrimaryItemClassIdInWarehouseLocationUpdateDto $primaryItemClassId = null,
        public ?ProjectIdInWarehouseLocationUpdateDto $projectId = null,
        public ?ProjectTaskIdInWarehouseLocationUpdateDto $projectTaskId = null,
    ) {}
}
