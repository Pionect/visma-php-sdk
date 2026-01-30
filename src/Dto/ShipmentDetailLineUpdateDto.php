<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentDetailLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineUpdateDtoFactory factory()
 */
class ShipmentDetailLineUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
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
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNbr = null,
        public ?ExpirationDateInShipmentDetailLineUpdateDto $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $reasonCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        public ?array $allocations = null,
        public ?CustomStr1inShipmentDetailLineUpdateDto $customStr1 = null,
        public ?CustomStr2inShipmentDetailLineUpdateDto $customStr2 = null,
        public ?CustomStr3inShipmentDetailLineUpdateDto $customStr3 = null,
        public ?CustomStr4inShipmentDetailLineUpdateDto $customStr4 = null,
        public ?CustomStr5inShipmentDetailLineUpdateDto $customStr5 = null,
        public ?CustomDec1inShipmentDetailLineUpdateDto $customDec1 = null,
        public ?CustomDec2inShipmentDetailLineUpdateDto $customDec2 = null,
        public ?CustomInt1inShipmentDetailLineUpdateDto $customInt1 = null,
        public ?CustomInt2inShipmentDetailLineUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inShipmentDetailLineUpdateDto $customDateTimeUtc1 = null,
    ) {}
}
