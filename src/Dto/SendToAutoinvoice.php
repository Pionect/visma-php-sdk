<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The field SendToAutoinvoice only applies to files attached to Customer documents
 *
 * @method static \Pionect\VismaSdk\Factories\SendToAutoinvoiceFactory testFactory()
 */
class SendToAutoinvoice extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $value = null,
    ) {}
}
