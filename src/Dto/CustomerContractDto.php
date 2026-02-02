<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerContract in CustomerContractController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDtoFactory testFactory()
 */
class CustomerContractDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $contractId = null,
        public ?ContractTemplateInCustomerContractDto $contractTemplate = null,
        public ?string $status = null,
        public ?CustomerInCustomerContractDto $customer = null,
        public ?LocationInCustomerContractDto $location = null,
        public ?string $description = null,
        public int|float|null $balance = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?SummaryInCustomerContractDto $summary = null,
        public ?DetailsInCustomerContractDto $details = null,
        public ?array $attributes = null,
    ) {}
}
