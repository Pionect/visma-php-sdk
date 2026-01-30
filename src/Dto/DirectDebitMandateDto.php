<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Customer Mandate
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DirectDebitMandateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DirectDebitMandateDtoFactory factory()
 */
class DirectDebitMandateDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $mandateId = null,
        public ?string $mandateDescription = null,
    ) {}
}
