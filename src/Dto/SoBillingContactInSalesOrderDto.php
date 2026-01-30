<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial settings tab &gt; The Invoice address section or on the Delivery address section
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SoBillingContactInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SoBillingContactInSalesOrderDtoFactory factory()
 */
class SoBillingContactInSalesOrderDto extends Model
{
    public function __construct(
        public ?bool $overrideContact = null,
        public ?int $contactId = null,
        public ?string $name = null,
        public ?string $attention = null,
        public ?string $email = null,
        public ?string $web = null,
        public ?string $phone1 = null,
        public ?string $phone2 = null,
        public ?string $fax = null,
    ) {}
}
