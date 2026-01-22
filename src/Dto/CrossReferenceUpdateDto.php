<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\alternateTypeInCrossReferenceUpdateDto $alternateType;

    #[Property]
    public ?\DtoValueOfString $bAccount;

    #[Property]
    public ?\DtoValueOfString $alternateId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $uom;
}
