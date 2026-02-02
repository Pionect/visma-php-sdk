<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Supplier* &gt; The identifier of the supplier referred to in the document.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierDocumentDtoFactory testFactory()
 */
class SupplierInSupplierDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
