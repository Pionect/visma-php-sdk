<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentUpdateDtoFactory testFactory()
 */
class SupplierPaymentUpdateDto extends Model
{
    public function __construct(
        public ?TypeInSupplierPaymentUpdateDto $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $applicationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $applicationPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplier = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $paymentAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        public ?array $paymentLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
    ) {}
}
