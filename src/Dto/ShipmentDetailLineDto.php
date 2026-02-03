<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineDtoFactory testFactory()
 */
class ShipmentDetailLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?string $orderType = null,
        public ?string $orderNbr = null,
        public ?string $inventoryNumber = null,
        public ?bool $freeItem = null,
        public ?WarehouseInShipmentDetailLineDto $warehouse = null,
        public ?LocationInShipmentDetailLineDto $location = null,
        public ?string $uom = null,
        public int|float|null $shippedQty = null,
        public int|float|null $orderedQty = null,
        public int|float|null $openQty = null,
        public ?string $lotSerialNbr = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?string $reasonCode = null,
        public ?string $description = null,
        /** @var AllocationsDto[]|null */
        public ?array $allocations = null,
        public ?int $orderLineNbr = null,
        public ?string $note = null,
        public ?string $externalLink = null,
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        public ?string $customStr1 = null,
        public ?string $customStr2 = null,
        public ?string $customStr3 = null,
        public ?string $customStr4 = null,
        public ?string $customStr5 = null,
        public int|float|null $customDec1 = null,
        public int|float|null $customDec2 = null,
        public ?int $customInt1 = null,
        public ?int $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
