<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerDirectDebitUpdateDtoFactory testFactory()
 */
class CustomerDirectDebitUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        public ?string $id = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $mandateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $mandateDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $dateOfSignature = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isDefault = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $oneTime = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $bic = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $iban = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $lastCollectionDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $maxAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
    ) {}
}
