<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Table SigmaExternalCodes2 &gt; The information row connected through the ExternalCode2
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode2infoInAccountDtoFactory testFactory()
 */
class ExternalCode2infoInAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
