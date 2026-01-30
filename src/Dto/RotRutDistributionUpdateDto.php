<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutDistributionUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDistributionUpdateDtoFactory factory()
 */
class RotRutDistributionUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $personalId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $extra;
}
