<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Bank settings update Dto
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsUpdateDtoFactory testFactory()
 */
class BankSettingsUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bankName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bankAddress1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bankAddress2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bankAddress3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bankCountry = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $iban = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bban = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bbaN2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bbaN3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bic = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditorId = null,
    ) {}
}
