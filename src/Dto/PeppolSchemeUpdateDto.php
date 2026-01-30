<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory testFactory()
 */
class PeppolSchemeUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $endpoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $partyIdentification = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $partyLegal = null,
    ) {}
}
