<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LinkLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LinkLineDtoFactory factory()
 */
class LinkLineDto extends Model
{
    /**
     * PurchaseTye can be either {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder} or {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}<para>
     * It should be noted that for stock-items, its only limited to {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, however,
     * for non-stock items we can choose either {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt} or {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder}</para>
     */
    #[Property]
    public ?string $purchaseType;

    #[Property]
    public ?purchaseNumberInLinkLineDto $purchaseNumber;

    #[Property]
    public ?purchaseLineNbrInLinkLineDto $purchaseLineNbr;
}
