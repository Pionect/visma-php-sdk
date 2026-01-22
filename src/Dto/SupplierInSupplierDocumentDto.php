<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Supplier* &gt; The identifier of the supplier referred to in the document.
 */
class SupplierInSupplierDocumentDto extends Model
{
    /** The internal id of the supplier */
    #[Property]
    public ?int $internalId;

    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
