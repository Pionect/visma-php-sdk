<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractUpdateDtoFactory factory()
 */
class CustomerContractUpdateDto extends Model
{
    public function __construct(
        public ?ContractIdInCustomerContractUpdateDto $contractId = null,
        public ?ContractTemplateInCustomerContractUpdateDto $contractTemplate = null,
        public ?CustomerInCustomerContractUpdateDto $customer = null,
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
        public ?string $invoiceTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceLocation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $owner = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesPerson = null,
        public ?array $details = null,
        public ?array $attributeLines = null,
    ) {}
}
