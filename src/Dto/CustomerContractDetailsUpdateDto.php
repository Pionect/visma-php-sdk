<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractDetailsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsUpdateDtoFactory factory()
 */
class CustomerContractDetailsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $contractDetailId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $itemCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $included;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $setupPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $recurringPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $extraUsagePrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $renewalPrice;
}
