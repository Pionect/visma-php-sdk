<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TypeDtoFactory testFactory()
 */
class TypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The type id of this fixed asset */
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        /** The type description */
        public ?string $description = null,
    ) {}
}
