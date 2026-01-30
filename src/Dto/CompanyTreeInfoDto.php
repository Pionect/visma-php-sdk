<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CompanyTreeInfoDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CompanyTreeInfoDtoFactory factory()
 */
class CompanyTreeInfoDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $owner;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $workGroupId;
}
