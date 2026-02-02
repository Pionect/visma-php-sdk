<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Contact section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInEmployeeDtoFactory testFactory()
 */
class ContactInEmployeeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
