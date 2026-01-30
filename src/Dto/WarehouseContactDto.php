<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseContactDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseContactDtoFactory testFactory()
 */
class WarehouseContactDto extends Model
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
