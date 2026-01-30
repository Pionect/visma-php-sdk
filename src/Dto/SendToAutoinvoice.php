<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The field SendToAutoinvoice only applies to files attached to Customer documents
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SendToAutoinvoiceFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SendToAutoinvoiceFactory testFactory()
 */
class SendToAutoinvoice extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
