<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AddPoreceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AddPoreceiptLineDtoFactory factory()
 */
class AddPoreceiptLineDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poReceiptNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $poReceiptLineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCostInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $costInCurrency = null,
    ) {}
}
