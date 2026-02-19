<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\VatCategoryLineCalculateOnEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCashDiscountEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory testFactory()
 */
class VatCategoryLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: VAT ID* > The ID of the VAT included in the category. */
        public ?string $vatId = null,
        /** Vendor code > The vendor number associated with the VAT category line. */
        public ?string $vendorCd = null,
        /** Description > The detailed description of the VAT item. */
        public ?string $description = null,
        /** VAT type > The type of VAT, which defines how it is processed. */
        public ?VatCategoryLineTypeEnum $type = null,
        /**
         * Calculate on > The way the VAT amount is calculated, which can be one of the
         * following options: Extract from item amount, Document amount, Document and
         * VAT amount.
         */
        public ?VatCategoryLineCalculateOnEnum $calculateOn = null,
        /**
         * Cash discount > The method of calculating the taxable amount if a discount is
         * applied (based on the credit terms). It can be one of the following options:
         * Reduce VAT amount, Does not affect VAT amount.
         */
        public ?VatCategoryLineCashDiscountEnum $cashDiscount = null,
        /** @var VatRateLineDto[]|null */
        public ?array $vatRates = null,
    ) {}
}
