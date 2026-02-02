<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The Supplier info tab &gt; The Info section &gt; Terms* &gt; The specific credit
 * terms to be used for the purchase order.
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInPurchaseOrderDtoFactory testFactory()
 */
class TermsInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
