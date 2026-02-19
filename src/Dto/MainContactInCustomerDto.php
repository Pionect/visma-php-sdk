<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Main contact section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\MainContactInCustomerDtoFactory testFactory()
 */
class MainContactInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
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
