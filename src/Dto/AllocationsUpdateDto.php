<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptEndpoint. Used to
 * add/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsUpdateDtoFactory testFactory()
 */
class AllocationsUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
    ) {}
}
