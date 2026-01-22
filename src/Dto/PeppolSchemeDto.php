<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PeppolSchemeDto extends Model
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
