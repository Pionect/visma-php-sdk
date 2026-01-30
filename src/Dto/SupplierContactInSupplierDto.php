<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Purchase settings tab &gt; Shipping contact information section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierContactInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierContactInSupplierDtoFactory factory()
 */
class SupplierContactInSupplierDto extends Model
{
    public function __construct(
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
