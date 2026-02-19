<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\VatCategoryLineCalculateOnEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCashDiscountEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineTypeEnum;
use Pionect\VismaSdk\Enums\VatInformationEuReportCodeEnum;
use Pionect\VismaSdk\Enums\VatInformationVismaXmlVatTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatInformationDtoFactory testFactory()
 */
class VatInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** VatCategoryId is deprecated, please use Vat Id instead */
        public ?string $vatCategoryId = null,
        /** Mandatory field: VAT settings tab > VAT ID* > The unique ID of the VAT. */
        public ?string $vatId = null,
        /** VAT settings tab > Description > A detailed description of the VAT. */
        public ?string $description = null,
        /** VAT settings tab > VAT type > The type of VAT. */
        public ?VatCategoryLineTypeEnum $type = null,
        /**
         * VAT settings tab > Partially deductible VAT > A check box that indicates (if
         * selected) that this is a deductible value-added VAT.
         */
        public ?bool $deductibleVat = null,
        /**
         * VAT settings tab > Reverse VAT > A check box that indicates (if selected)
         * that this is a reverse VAT.
         */
        public ?bool $reverseVat = null,
        /**
         * VAT settings tab > Statistical VAT > A check box that indicates (if selected)
         * that the VAT on documents will be calculated only for statistical purposes or
         * will be reported only but not actually paid.
         */
        public ?bool $statisticalVat = null,
        /**
         * VAT settings tab > Pendig VAT > A check box that indicates (if selected) that
         * the VAT that should be calculated in documents, but should not be recorded to
         * the VAT report until the VAT invoice is received.
         */
        public ?bool $pendingVat = null,
        /**
         * VAT settings tab > Include in VAT exempt total > A check box that indicates
         * (if selected) that this value-added VAT has a zero rate and is used to
         * calculate a document subtotal that is actually exempt from VAT.
         */
        public ?bool $includeinVatExemptTotal = null,
        /**
         * VAT settings tab > Include in VAT taxable total > A check box that indicates
         * (if selected) that the VAT taxable amount should appear in the VAT taxable
         * total field in the documents (such as invoices).
         */
        public ?bool $includeinVatTotal = null,
        /**
         * VAT settings tab > Enter from VAT invoice > A check box that indicates (if
         * selected) that this VAT should be calculated for documents only if the
         * documents are added to a VAT invoice or VAT adjustment.
         */
        public ?bool $enterFromVatInvoice = null,
        /**
         * VAT settings tab > Calculate on > The method of calculating the tax amount,
         * which is one of the following options: Extract from item amount, Item amount,
         * Item and VAT amount, Document amount, Document and VAT amount.
         */
        public ?VatCategoryLineCalculateOnEnum $calculateOn = null,
        /**
         * VAT settings tab > Cash discount > The method of calculating the tax base
         * amount if a cash discount is applied.
         */
        public ?VatCategoryLineCashDiscountEnum $cashDiscount = null,
        public ?VatAgencyIdInVatInformationDto $vatAgencyId = null,
        /**
         * VAT settings tab > Not valid after > The date after which the VAT is not
         * effective.
         */
        public ?\Carbon\Carbon $notValidAfter = null,
        /** VAT settings tab > EU report code > The EU reporting code for the VAT. */
        public ?VatInformationEuReportCodeEnum $euReportCode = null,
        /**
         * VAT Settings tab > Document text tab > Document text > The text to be printed
         * to the VAT document.
         */
        public ?string $documentText = null,
        public ?DefaultNonStockItemInVatInformationDto $defaultNonStockItem = null,
        /**
         * VAT settings tab > Visma XML VAT type > The VAT type to be used in Visma XML
         * files.
         */
        public ?VatInformationVismaXmlVatTypeEnum $vismaXmlVatType = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?GlAccountsInVatInformationDto $glAccounts = null,
        /**
         * @var VatInformationScheduleDto[]|null
         *                                       Both tabs > VAT schedule >
         */
        public ?array $schedules = null,
        /**
         * @var VatCategoryDto[]|null
         *                            Both tabs > Categories tab >
         */
        public ?array $categories = null,
        /**
         * @var VatZoneDto[]|null
         *                        Both tabs > Zones tab >
         */
        public ?array $zones = null,
    ) {}
}
