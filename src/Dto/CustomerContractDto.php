<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerContract in CustomerContractController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDtoFactory factory()
 */
class CustomerContractDto extends Model
{
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
