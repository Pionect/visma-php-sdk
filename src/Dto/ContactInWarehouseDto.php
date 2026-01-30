<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Address information tab &gt; Contact section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInWarehouseDtoFactory factory()
 */
class ContactInWarehouseDto extends Model
{
    public function __construct(
        public ?int $contactId = null,
        public ?string $companyName = null,
        public ?string $attention = null,
        public ?string $email = null,
        public ?string $web = null,
        public ?string $phone1 = null,
        public ?string $phone2 = null,
        public ?string $fax = null,
    ) {}
}
