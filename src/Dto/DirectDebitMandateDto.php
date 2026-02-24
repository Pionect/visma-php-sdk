<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Customer Mandate
 *
 * @method static \Pionect\VismaSdk\Factories\DirectDebitMandateDtoFactory testFactory()
 */
class DirectDebitMandateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DirectDebitMandateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandate Guid as stored in the database. */
        public ?string $id = null,
        /** The id shown on Billing Address tab */
        public ?string $mandateId = null,
        /** Mandate description show on Billing Address tab */
        public ?string $mandateDescription = null,
    ) {}
}
