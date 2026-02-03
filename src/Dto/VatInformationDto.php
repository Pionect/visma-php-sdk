<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatInformationDtoFactory testFactory()
 */
class VatInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var VatInformationScheduleDto[]|null */
        public ?array $schedules = null,
        /** @var VatCategoryDto[]|null */
        public ?array $categories = null,
        /** @var VatZoneDto[]|null */
        public ?array $zones = null,
    ) {}
}
