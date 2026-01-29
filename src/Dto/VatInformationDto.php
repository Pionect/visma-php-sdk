<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class VatInformationDto extends Model
{
    /** VatCategoryId is deprecated, please use Vat Id instead */
    #[Property]
    public ?string $vatCategoryId;

    /** Mandatory field: VAT settings tab &gt; VAT ID* &gt; The unique ID of the VAT. */
    #[Property]
    public ?string $vatId;

    /** VAT settings tab &gt; Description &gt; A detailed description of the VAT. */
    #[Property]
    public ?string $description;

    /** VAT settings tab &gt; VAT type &gt; The type of VAT. */
    #[Property]
    public ?string $type;

    /** VAT settings tab &gt; Partially deductible VAT &gt; A check box that indicates (if selected) that this is a deductible value-added VAT. */
    #[Property]
    public ?bool $deductibleVat;

    /** VAT settings tab &gt; Reverse VAT &gt; A check box that indicates (if selected) that this is a reverse VAT. */
    #[Property]
    public ?bool $reverseVat;

    /** VAT settings tab &gt; Statistical VAT &gt; A check box that indicates (if selected) that the VAT on documents will be calculated only for statistical purposes or will be reported only but not actually paid. */
    #[Property]
    public ?bool $statisticalVat;

    /** VAT settings tab &gt; Pendig VAT &gt; A check box that indicates (if selected) that the VAT that should be calculated in documents, but should not be recorded to the VAT report until the VAT invoice is received. */
    #[Property]
    public ?bool $pendingVat;

    /** VAT settings tab &gt; Include in VAT exempt total &gt; A check box that indicates (if selected) that this value-added VAT has a zero rate and is used to calculate a document subtotal that is actually exempt from VAT. */
    #[Property]
    public ?bool $includeinVatExemptTotal;

    /** VAT settings tab &gt; Include in VAT taxable total &gt; A check box that indicates (if selected) that the VAT taxable amount should appear in the VAT taxable total field in the documents (such as invoices). */
    #[Property]
    public ?bool $includeinVatTotal;

    /** VAT settings tab &gt; Enter from VAT invoice &gt; A check box that indicates (if selected) that this VAT should be calculated for documents only if the documents are added to a VAT invoice or VAT adjustment. */
    #[Property]
    public ?bool $enterFromVatInvoice;

    /** VAT settings tab &gt; Calculate on &gt; The method of calculating the tax amount, which is one of the following options: Extract from item amount, Item amount, Item and VAT amount, Document amount, Document and VAT amount. */
    #[Property]
    public ?string $calculateOn;

    /** VAT settings tab &gt; Cash discount &gt; The method of calculating the tax base amount if a cash discount is applied. */
    #[Property]
    public ?string $cashDiscount;

    #[Property]
    public ?vatAgencyIdInVatInformationDto $vatAgencyId;

    /** VAT settings tab &gt; Not valid after &gt; The date after which the VAT is not effective. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $notValidAfter;

    /** VAT settings tab &gt; EU report code &gt; The EU reporting code for the VAT. */
    #[Property]
    public ?string $euReportCode;

    /** VAT Settings tab &gt; Document text tab &gt; Document text &gt; The text to be printed to the VAT document. */
    #[Property]
    public ?string $documentText;

    #[Property]
    public ?defaultNonStockItemInVatInformationDto $defaultNonStockItem;

    /** VAT settings tab &gt; Visma XML VAT type &gt; The VAT type to be used in Visma XML files. */
    #[Property]
    public ?string $vismaXmlVatType;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?glAccountsInVatInformationDto $glAccounts;

    /** Both tabs &gt; VAT schedule &gt; */
    #[Property]
    public ?array $schedules;

    /** Both tabs &gt; Categories tab &gt; */
    #[Property]
    public ?array $categories;

    /** Both tabs &gt; Zones tab &gt; */
    #[Property]
    public ?array $zones;
}
