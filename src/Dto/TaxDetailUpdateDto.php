<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Tax Detail Line. Used to pass data to server for updating a tax line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxDetailUpdateDtoFactory factory()
 */
class TaxDetailUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $taxableAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $vatAmount;
}
