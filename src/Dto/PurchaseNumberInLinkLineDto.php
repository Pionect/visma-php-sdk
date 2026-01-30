<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * PurchaseNumber refers to either PurchaseOrder or PurchaseReceipt number depends on the value of
 * {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType}
 * If
 * {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType} is set to
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, then it should refer to the
 * PruchaseReceipt number
 * otherwise it refers to the PurchaseOrder
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseNumberInLinkLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseNumberInLinkLineDtoFactory factory()
 */
class PurchaseNumberInLinkLineDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
