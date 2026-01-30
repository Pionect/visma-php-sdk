<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type &gt; The 1-digit code that
 * describes the nature of the transaction (according to EU regulations for Intrastat reporting).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransactionTypeInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionTypeInShipmentDtoFactory testFactory()
 */
class TransactionTypeInShipmentDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
