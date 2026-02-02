<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type &gt; The 1-digit code that
 * describes the nature of the transaction (according to EU regulations for Intrastat reporting).
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionTypeInShipmentDtoFactory testFactory()
 */
class TransactionTypeInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
