<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentPackageLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentPackageLineUpdateDtoFactory factory()
 */
class ShipmentPackageLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $confirmed;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $boxId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $weight;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $volume;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $declaredValue;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $codAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $trackingNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customRefNbr1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customRefNbr2;
}
