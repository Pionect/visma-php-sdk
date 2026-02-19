<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryCrossReferenceAlternateTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryCrossReferenceDtoFactory testFactory()
 */
class InventoryCrossReferenceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Alternate type > The type of alternate codification used for the item if
         * applicable.
         */
        public ?InventoryCrossReferenceAlternateTypeEnum $alternateType = null,
        public ?BAccountInInventoryCrossReferenceDto $bAccount = null,
        /**
         * Mandatory field: Alternate ID > The alternate ID of the stock item (under the
         * specified item ID) as used by the supplier or customer.
         */
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        /** Description > Any comments applicable to the specified cross-reference. */
        public ?string $description = null,
        /** UoM > The unit of measure used for this component. */
        public ?string $uom = null,
        /** Timestamp of the inventory item the crossreference belongs to */
        public ?string $timestamp = null,
    ) {}
}
