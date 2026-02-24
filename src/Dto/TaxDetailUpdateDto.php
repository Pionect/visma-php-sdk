<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Tax Detail Line. Used to pass data to server for updating a tax line
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory testFactory()
 */
class TaxDetailUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $taxableAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $vatAmount = null,
    ) {}
}
