<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerContractSummaryInvoiceToEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory testFactory()
 */
class CustomerContractUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $contractId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $contractTemplate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $setupDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $activationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $massRenewal = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $renewalPoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $gracePeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?CustomerContractSummaryInvoiceToEnum $invoiceTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceLocation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $owner = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesPerson = null,
        /** @var CustomerContractDetailsUpdateDto[]|null */
        public ?array $details = null,
        /** @var AttributeLineUpdateDto[]|null */
        public ?array $attributeLines = null,
    ) {}
}
