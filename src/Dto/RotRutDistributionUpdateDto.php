<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\RotRutDistributionUpdateDtoFactory testFactory()
 */
class RotRutDistributionUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $personalId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $extra = null,
    ) {}
}
