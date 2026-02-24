<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Salesperson ID &gt; The identifier of the salesperson involved.
 *
 * @method static \Pionect\VismaSdk\Factories\SellerInCustomerCreditNoteLineDtoFactory testFactory()
 */
class SellerInCustomerCreditNoteLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SellerInCustomerCreditNoteLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
