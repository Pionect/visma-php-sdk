<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentDetailLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineUpdateDtoFactory factory()
 */
class ShipmentDetailLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $warehouse;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $shippedQty;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $lotSerialNbr;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $reasonCode;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?customStr1InShipmentDetailLineUpdateDto $customStr1;

    #[Property]
    public ?customStr2InShipmentDetailLineUpdateDto $customStr2;

    #[Property]
    public ?customStr3InShipmentDetailLineUpdateDto $customStr3;

    #[Property]
    public ?customStr4InShipmentDetailLineUpdateDto $customStr4;

    #[Property]
    public ?customStr5InShipmentDetailLineUpdateDto $customStr5;

    #[Property]
    public ?customDec1InShipmentDetailLineUpdateDto $customDec1;

    #[Property]
    public ?customDec2InShipmentDetailLineUpdateDto $customDec2;

    #[Property]
    public ?customInt1InShipmentDetailLineUpdateDto $customInt1;

    #[Property]
    public ?customInt2InShipmentDetailLineUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InShipmentDetailLineUpdateDto $customDateTimeUtc1;
}
