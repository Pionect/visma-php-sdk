<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a VAT Detail Line. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailDtoFactory testFactory()
 */
class TaxDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TaxDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: VAT ID* > The ID of the VAT applied to the document. */
        public ?string $taxId = null,
        /**
         * The id as stored in the database. It can be used when we want to update a VAT
         * record.
         */
        public ?int $recordId = null,
        public ?VatIdInTaxDetailDto $vatId = null,
        /** VAT rate > The rate of the VAT. */
        public int|float|null $vatRate = null,
        /**
         * Taxable amount > The taxable amount for the VAT, which is calculated at the
         * document level.
         */
        public int|float|null $taxableAmount = null,
        /**
         * VAT > The VAT amount for the specific VAT, which is calculated at the
         * document level.
         */
        public int|float|null $vatAmount = null,
    ) {}
}
