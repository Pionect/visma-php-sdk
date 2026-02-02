<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT settings tab &gt; Tax agency &gt; The name of the tax agency to receive the VAT.
 *
 * @method static \Pionect\VismaSdk\Factories\VatAgencyIdInVatInformationDtoFactory testFactory()
 */
class VatAgencyIdInVatInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
