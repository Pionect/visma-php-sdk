<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDetailLineAddDtoFactory factory()
 */
class ShipmentDetailLineAddDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

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
    public ?customStr1InShipmentDetailLineAddDto $customStr1;

    #[Property]
    public ?customStr2InShipmentDetailLineAddDto $customStr2;

    #[Property]
    public ?customStr3InShipmentDetailLineAddDto $customStr3;

    #[Property]
    public ?customStr4InShipmentDetailLineAddDto $customStr4;

    #[Property]
    public ?customStr5InShipmentDetailLineAddDto $customStr5;

    #[Property]
    public ?customDec1InShipmentDetailLineAddDto $customDec1;

    #[Property]
    public ?customDec2InShipmentDetailLineAddDto $customDec2;

    #[Property]
    public ?customInt1InShipmentDetailLineAddDto $customInt1;

    #[Property]
    public ?customInt2InShipmentDetailLineAddDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InShipmentDetailLineAddDto $customDateTimeUtc1;
}
