<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitSpecificationUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $kitInventoryId;

    #[Property]
    public ?\DtoValueOfString $revisionId;

    #[Property]
    public ?\DtoValueOfString $descr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isActive;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $allowCompAddition;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isNonStock;

    #[Property]
    public ?array $stockComponentLines;

    #[Property]
    public ?array $nonStockComponentLines;
}
