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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VatAgencyIdInVatInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The internal id of the supplier */
        public ?int $internalId = null,
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
