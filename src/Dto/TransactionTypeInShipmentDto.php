<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type &gt; The 1-digit code that
 * describes the nature of the transaction (according to EU regulations for Intrastat reporting).
 */
class TransactionTypeInShipmentDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
