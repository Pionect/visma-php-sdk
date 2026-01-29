<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Fields to be used when sending electronic invoices in PEPPOL BIS 3.0 format.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PeppolSchemeInLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeInLocationDtoFactory factory()
 */
class PeppolSchemeInLocationDto extends Model
{
    /**
     * Seller electronic address identification scheme identifier.
     * The identification scheme identifier of the seller electronic address.
     */
    #[Property]
    public ?string $endpoint;

    /**
     * Buyer identifier identification scheme identifier.
     * The identification scheme identifier of the Buyer identifier.
     */
    #[Property]
    public ?string $partyIdentification;

    /**
     * Seller legal registration identifier identification scheme identifier.
     * The identification scheme identifier of the Seller legal registration identifier.
     */
    #[Property]
    public ?string $partyLegal;
}
