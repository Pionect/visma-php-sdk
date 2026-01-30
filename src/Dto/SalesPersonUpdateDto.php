<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonUpdateDtoFactory factory()
 */
class SalesPersonUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salespersonId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $name;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $isActive;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $commissionPct;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesSub;

    #[Property]
    public ?array $customers;
}
