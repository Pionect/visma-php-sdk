<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Prebook account used on the line. Note that this feature is not available in all countries.
 *
 * @method static \Pionect\VismaSdk\Factories\PrebookAccountInSupplierInvoiceLineDtoFactory testFactory()
 */
class PrebookAccountInSupplierInvoiceLineDto extends SpatieData
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
