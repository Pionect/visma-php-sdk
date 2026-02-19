<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LinkLinePurchaseTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LinkLineDtoFactory testFactory()
 */
class LinkLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
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
        public ?LinkLinePurchaseTypeEnum $purchaseType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $purchaseLineNbr = null,
    ) {}
}
