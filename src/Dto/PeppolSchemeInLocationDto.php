<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Fields to be used when sending electronic invoices in PEPPOL BIS 3.0 format.
 *
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeInLocationDtoFactory testFactory()
 */
class PeppolSchemeInLocationDto extends SpatieData
{
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
