<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PeppolSchemeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeDtoFactory testFactory()
 */
class PeppolSchemeDto extends Model
{
    public function __construct(
        public ?string $endpoint = null,
        public ?string $partyIdentification = null,
        public ?string $partyLegal = null,
    ) {}
}
