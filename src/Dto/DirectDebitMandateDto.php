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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $mandateId = null,
        public ?string $mandateDescription = null,
    ) {}
}
