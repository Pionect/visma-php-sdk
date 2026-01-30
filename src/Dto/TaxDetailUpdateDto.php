<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Tax Detail Line. Used to pass data to server for updating a tax line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory testFactory()
 */
class TaxDetailUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $taxableAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $vatAmount = null,
    ) {}
}
