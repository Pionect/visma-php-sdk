<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an Allocation. Used to add/update data.
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsUpdateBasicDtoFactory testFactory()
 */
class AllocationsUpdateBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Insert=1, Update=2, Delete=3 */
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
    ) {}
}
