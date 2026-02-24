<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeDtoFactory testFactory()
 */
class PeppolSchemeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PeppolSchemeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Seller electronic address identification scheme identifier.
         * The identification scheme identifier of the seller electronic address.
         */
        public ?string $endpoint = null,
        /**
         * Buyer identifier identification scheme identifier.
         * The identification scheme identifier of the Buyer identifier.
         */
        public ?string $partyIdentification = null,
        /**
         * Seller legal registration identifier identification scheme identifier.
         * The identification scheme identifier of the Seller legal registration
         * identifier.
         */
        public ?string $partyLegal = null,
    ) {}
}
