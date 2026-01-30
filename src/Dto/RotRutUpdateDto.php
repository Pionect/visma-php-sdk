<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutUpdateDtoFactory factory()
 */
class RotRutUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $distributedAutomaticaly;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $type;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $appartment;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $estate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $organizationNbr;

    #[Property]
    public ?array $distribution;
}
