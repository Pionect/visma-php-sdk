<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ContactTitleEnum;
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
        /**
         * Employee contact > The link to the contact record associated with the
         * employee.
         */
        public ?string $employeeContact = null,
        /** Title > The courtesy title to be used for the employee. */
        public ?ContactTitleEnum $title = null,
        /** First name > The first name of the employee. */
        public ?string $firstName = null,
        /** Middle name > The middle name of the employee. */
        public ?string $midName = null,
        /** Mandatory field: Last name* > The last name of the employee. */
        public ?string $lastName = null,
        /** Phone 3 > An additional phone number of the employee. */
        public ?string $phone3 = null,
        public ?int $contactId = null,
        /** Name > The legal name of to appear on the documents. */
        public ?string $name = null,
        /**
         * Attention > The attention line as it is used in your
         * customer's/supplier's/company's business letters. The intention of this line
         * is to direct the letter to the right person if the letter is not addressed to
         * any specific person.
         */
        public ?string $attention = null,
        /**
         * Email > The email address of the customer/supplier/company as a business
         * entity.
         */
        public ?string $email = null,
        /** Web > The website of the company, if one exists. */
        public ?string $web = null,
        /** Phone 1 > The default phone number. */
        public ?string $phone1 = null,
        /** Phone 2 > An additional phone number. */
        public ?string $phone2 = null,
        /** Fax > The fax number. */
        public ?string $fax = null,
    ) {}
}
