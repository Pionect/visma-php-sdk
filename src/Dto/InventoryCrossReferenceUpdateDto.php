<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryCrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?\alternateTypeInInventoryCrossReferenceUpdateDto $alternateType;

    #[Property]
    public ?\DtoValueOfString $bAccount;

    #[Property]
    public ?\DtoValueOfString $alternateId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $uom;
}
