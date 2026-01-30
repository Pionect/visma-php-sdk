<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT settings tab &gt; Tax agency &gt; The name of the tax agency to receive the VAT.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatAgencyIdInVatInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatAgencyIdInVatInformationDtoFactory factory()
 */
class VatAgencyIdInVatInformationDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
