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
        public ?string $endpoint = null,
        public ?string $partyIdentification = null,
        public ?string $partyLegal = null,
    ) {}
}
