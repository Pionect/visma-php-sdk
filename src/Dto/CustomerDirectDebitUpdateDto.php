<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDirectDebitUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDirectDebitUpdateDtoFactory factory()
 */
class CustomerDirectDebitUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
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
