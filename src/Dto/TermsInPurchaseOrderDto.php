<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Supplier info tab &gt; The Info section &gt; Terms* &gt; The specific credit
 * terms to be used for the purchase order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TermsInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInPurchaseOrderDtoFactory factory()
 */
class TermsInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
