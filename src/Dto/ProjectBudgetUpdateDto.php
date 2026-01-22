<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ProjectBudgetUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $projectId;

    #[Property]
    public ?\DtoValueOfString $projectTaskId;

    #[Property]
    public ?\DtoValueOfString $accountGroupId;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $rate;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $originalBudgetQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $originalBudgetAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $revisedBudgetQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $revisedBudgetAmount;
}
