<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentPackageLineUpdateDtoFactory testFactory()
 */
class ShipmentPackageLineUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
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
