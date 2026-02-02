<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeDtoFactory testFactory()
 */
class PeppolSchemeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $endpoint = null,
        public ?string $partyIdentification = null,
        public ?string $partyLegal = null,
    ) {}
}
