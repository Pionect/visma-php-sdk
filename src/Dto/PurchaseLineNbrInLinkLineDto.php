<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * PurchaseLineNbr refers to either PurchaseOrder or PurchaseReceipt line number depends on the value
 * of {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType}
 * If
 * {Visma.net.ERP.Web.Api.Model.V1.AP.LinkLineDto.PurchaseType} is set to
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, then it should refer to the
 * PruchaseReceipt line number
 * otherwise it refers to the PurchaseOrder
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseLineNbrInLinkLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseLineNbrInLinkLineDtoFactory factory()
 */
class PurchaseLineNbrInLinkLineDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
