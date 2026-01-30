<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderContactDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderContactDtoFactory factory()
 */
class SalesOrderContactDto extends Model
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
