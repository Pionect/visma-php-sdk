<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatInformationDtoFactory factory()
 */
class VatInformationDto extends Model
{
    public function __construct(
        public ?string $vatCategoryId = null,
        public ?string $vatId = null,
        public ?string $description = null,
        public ?string $type = null,
        public ?bool $deductibleVat = null,
        public ?bool $reverseVat = null,
        public ?bool $statisticalVat = null,
        public ?bool $pendingVat = null,
        public ?bool $includeinVatExemptTotal = null,
        public ?bool $includeinVatTotal = null,
        public ?bool $enterFromVatInvoice = null,
        public ?string $calculateOn = null,
        public ?string $cashDiscount = null,
        public ?VatAgencyIdInVatInformationDto $vatAgencyId = null,
        public ?\Carbon\Carbon $notValidAfter = null,
        public ?string $euReportCode = null,
        public ?string $documentText = null,
        public ?DefaultNonStockItemInVatInformationDto $defaultNonStockItem = null,
        public ?string $vismaXmlVatType = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?GlAccountsInVatInformationDto $glAccounts = null,
        public ?array $schedules = null,
        public ?array $categories = null,
        public ?array $zones = null,
    ) {}
}
