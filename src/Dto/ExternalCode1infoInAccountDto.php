<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Table SigmaExternalCodes1 &gt; The information row connected through the ExternalCode1
 *
 * @method static \Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory testFactory()
 */
class ExternalCode1infoInAccountDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExternalCode1infoInAccountDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
