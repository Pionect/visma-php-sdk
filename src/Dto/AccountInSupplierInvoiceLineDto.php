<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Mandatory field: Account* &gt; The purchase account used for the invoice line.
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInSupplierInvoiceLineDtoFactory testFactory()
 */
class AccountInSupplierInvoiceLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
