<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Business connection* &gt; The business account this location is
 * associated with. Click the magnifier.
 *
 * @method static \Pionect\VismaSdk\Factories\BaccountInSupplierLocationDtoFactory testFactory()
 */
class BaccountInSupplierLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
