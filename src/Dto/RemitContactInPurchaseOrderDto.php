<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier info tab &gt; The Supplier contact section &gt; The default contact settings for the
 * supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RemitContactInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RemitContactInPurchaseOrderDtoFactory testFactory()
 */
class RemitContactInPurchaseOrderDto extends Model
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
