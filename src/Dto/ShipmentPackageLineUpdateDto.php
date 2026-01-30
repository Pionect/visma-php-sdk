<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentPackageLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentPackageLineUpdateDtoFactory factory()
 */
class ShipmentPackageLineUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $confirmed = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $boxId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $weight = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $volume = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $declaredValue = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $codAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $trackingNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customRefNbr1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customRefNbr2 = null,
    ) {}
}
