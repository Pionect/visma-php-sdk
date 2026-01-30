<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineAddDtoFactory factory()
 */
class ShipmentDetailLineAddDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $shippedQty = null,
        public ?CustomStr1inShipmentDetailLineAddDto $customStr1 = null,
        public ?CustomStr2inShipmentDetailLineAddDto $customStr2 = null,
        public ?CustomStr3inShipmentDetailLineAddDto $customStr3 = null,
        public ?CustomStr4inShipmentDetailLineAddDto $customStr4 = null,
        public ?CustomStr5inShipmentDetailLineAddDto $customStr5 = null,
        public ?CustomDec1inShipmentDetailLineAddDto $customDec1 = null,
        public ?CustomDec2inShipmentDetailLineAddDto $customDec2 = null,
        public ?CustomInt1inShipmentDetailLineAddDto $customInt1 = null,
        public ?CustomInt2inShipmentDetailLineAddDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inShipmentDetailLineAddDto $customDateTimeUtc1 = null,
    ) {}
}
