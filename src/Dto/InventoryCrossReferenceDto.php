<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryCrossReferenceDtoFactory testFactory()
 */
class InventoryCrossReferenceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $alternateType = null,
        public ?BAccountInInventoryCrossReferenceDto $bAccount = null,
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        public ?string $description = null,
        public ?string $uom = null,
        public ?string $timestamp = null,
    ) {}
}
