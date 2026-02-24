<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory testFactory()
 */
class PeppolSchemeUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PeppolSchemeUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $endpoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $partyIdentification = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $partyLegal = null,
    ) {}
}
