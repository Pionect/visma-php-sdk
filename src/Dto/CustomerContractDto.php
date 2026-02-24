<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerContractStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerContract in CustomerContractController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDtoFactory testFactory()
 */
class CustomerContractDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerContractDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Contract ID* > The unique identifier of a
         * contract.
         */
        public ?string $contractId = null,
        public ?ContractTemplateInCustomerContractDto $contractTemplate = null,
        /**
         * The top part > Status > The status of the contract, which is one of the
         * following: Draft, Pending activation, Active, Expired, Cancelled, Pending
         * update.
         */
        public ?CustomerContractStatusEnum $status = null,
        public ?CustomerInCustomerContractDto $customer = null,
        public ?LocationInCustomerContractDto $location = null,
        /**
         * Mandatory field: The top part > Description* > The description of the
         * contract, which includes any related comments.
         */
        public ?string $description = null,
        /**
         * The top part > Balance > A read-only field that displays the sum of the
         * balances of open invoices associated with the contract.
         */
        public int|float|null $balance = null,
        /** System generated information */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?SummaryInCustomerContractDto $summary = null,
        public ?DetailsInCustomerContractDto $details = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Project attributes tab
         */
        public ?array $attributes = null,
    ) {}
}
