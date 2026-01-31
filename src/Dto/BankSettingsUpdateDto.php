<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * Bank settings update Dto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsUpdateDtoFactory testFactory()
 */
class BankSettingsUpdateDto extends Model
{
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
