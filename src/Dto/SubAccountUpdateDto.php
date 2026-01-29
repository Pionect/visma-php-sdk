<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubAccountUpdateDtoFactory factory()
 */
class SubAccountUpdateDto extends Model
{
    #[Property]
    public ?subaccountNumberInSubAccountUpdateDto $subaccountNumber;

    #[Property]
    public ?subaccountIdInSubAccountUpdateDto $subaccountId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $active;
}
