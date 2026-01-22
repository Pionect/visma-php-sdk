<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VisibilityUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInGl;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInAp;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInAr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInSo;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInPo;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInEa;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInTa;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInIn;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInCa;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $visibleInCr;
}
