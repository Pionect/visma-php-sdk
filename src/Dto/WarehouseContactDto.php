<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\WarehouseContactDtoFactory testFactory()
 */
class WarehouseContactDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\WarehouseContactDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Information retrieved from the system. */
        public ?int $contactId = null,
        /**
         * Company name > The legal business name of the warehouse to appear on the
         * documents.
         */
        public ?string $companyName = null,
        /**
         * Attention > The department or person to be noted on the attention line, if
         * this line is used by your company.
         */
        public ?string $attention = null,
        /** Email > The email address of the contact person assigned to this warehouse. */
        public ?string $email = null,
        /**
         * Web > The URL of the web page where information about the warehouse is
         * published.
         */
        public ?string $web = null,
        /**
         * Phone 1 > The primary phone number of the contact person assigned to this
         * warehouse.
         */
        public ?string $phone1 = null,
        /**
         * Phone 2 > 	A secondary phone number of the contact person assigned to this
         * warehouse.
         */
        public ?string $phone2 = null,
        /** Fax > The fax number of the contact person assigned to this warehouse. */
        public ?string $fax = null,
    ) {}
}
