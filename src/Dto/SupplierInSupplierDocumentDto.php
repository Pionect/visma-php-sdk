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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierInSupplierDocumentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The internal id of the supplier */
        public ?int $internalId = null,
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
