<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountUpdateDtoFactory testFactory()
 */
class AccountUpdateDto extends Model
{
    public function __construct(
        #[MapName('accountCD'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountCd = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $analysisCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $extenalCode1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalCode2 = null,
        #[MapName('accountGroupCD'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountGroupCd = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postOption = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $publicCode1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $useDefaultSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
    ) {}
}
