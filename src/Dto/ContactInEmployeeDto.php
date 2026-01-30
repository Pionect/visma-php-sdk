<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Contact section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInEmployeeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInEmployeeDtoFactory testFactory()
 */
class ContactInEmployeeDto extends Model
{
    public function __construct(
        public ?string $employeeContact = null,
        public ?string $title = null,
        public ?string $firstName = null,
        public ?string $midName = null,
        public ?string $lastName = null,
        public ?string $phone3 = null,
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
