<?php

namespace Pionect\VismaSdk\Enums;

/**
 * PurchaseTye can be either
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder} or
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}<para>
 * It should be noted that for stock-items, its only limited to
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt}, however,
 * for non-stock items we can choose either
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseReceipt} or
 * {Visma.net.ERP.Web.Api.Model.V1.Enum.PurchaseType.PurchaseOrder}</para>
 */
enum LinkLinePurchaseTypeEnum: string
{
    case PURCHASE_ORDER = 'PurchaseOrder';
    case PURCHASE_RECEIPT = 'PurchaseReceipt';
}
