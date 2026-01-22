<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a VAT Detail Line. Used for getting data.
 */
class TaxDetailDto extends Model
{
    /** Mandatory field: VAT ID* &gt; The ID of the VAT applied to the document. */
    #[Property]
    public ?string $taxId;

    /** The id as stored in the database. It can be used when we want to update a VAT record. */
    #[Property]
    public ?int $recordId;

    #[Property]
    public ?\vatIdInTaxDetailDto $vatId;

    /** VAT rate &gt; The rate of the VAT. */
    #[Property]
    public ?float $vatRate;

    /** Taxable amount &gt; The taxable amount for the VAT, which is calculated at the document level. */
    #[Property]
    public ?float $taxableAmount;

    /** VAT &gt; The VAT amount for the specific VAT, which is calculated at the document level. */
    #[Property]
    public ?float $vatAmount;
}
