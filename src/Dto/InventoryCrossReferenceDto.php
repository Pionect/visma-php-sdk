<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryCrossReferenceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryCrossReferenceDtoFactory factory()
 */
class InventoryCrossReferenceDto extends Model
{
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
