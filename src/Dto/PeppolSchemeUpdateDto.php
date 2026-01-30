<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory factory()
 */
class PeppolSchemeUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $endpoint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $partyIdentification;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $partyLegal;
}
