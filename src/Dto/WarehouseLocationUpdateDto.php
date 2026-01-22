<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?\locationIdInWarehouseLocationUpdateDto $locationId;

    #[Property]
    public ?\descriptionInWarehouseLocationUpdateDto $description;

    #[Property]
    public ?\activeInWarehouseLocationUpdateDto $active;

    #[Property]
    public ?\inclQtyAvailInWarehouseLocationUpdateDto $inclQtyAvail;

    #[Property]
    public ?\isCostedInWarehouseLocationUpdateDto $isCosted;

    #[Property]
    public ?\salesValidInWarehouseLocationUpdateDto $salesValid;

    #[Property]
    public ?\receiptsValidInWarehouseLocationUpdateDto $receiptsValid;

    #[Property]
    public ?\transfersValidInWarehouseLocationUpdateDto $transfersValid;

    #[Property]
    public ?\assemblyValidInWarehouseLocationUpdateDto $assemblyValid;

    #[Property]
    public ?\pickPriorityInWarehouseLocationUpdateDto $pickPriority;

    #[Property]
    public ?\primaryItemValidInWarehouseLocationUpdateDto $primaryItemValid;

    #[Property]
    public ?\primaryItemIdInWarehouseLocationUpdateDto $primaryItemId;

    #[Property]
    public ?\primaryItemClassIdInWarehouseLocationUpdateDto $primaryItemClassId;

    #[Property]
    public ?\projectIdInWarehouseLocationUpdateDto $projectId;

    #[Property]
    public ?\projectTaskIdInWarehouseLocationUpdateDto $projectTaskId;
}
