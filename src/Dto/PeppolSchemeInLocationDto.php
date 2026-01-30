<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $endpoint = null,
        public ?string $partyIdentification = null,
        public ?string $partyLegal = null,
    ) {}
}
