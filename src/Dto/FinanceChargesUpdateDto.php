<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinanceChargesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinanceChargesUpdateDtoFactory testFactory()
 */
class FinanceChargesUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $entryType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $offsetAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $offsetSubAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
    ) {}
}
