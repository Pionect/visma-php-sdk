<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AccountUpdateDtoFactory testFactory()
 */
class AccountUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\AccountUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        public ?AccountTypeEnum $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $useDefaultSub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
    ) {}
}
