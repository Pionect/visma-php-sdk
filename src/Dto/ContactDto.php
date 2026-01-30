<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a contact in ContactController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactDtoFactory factory()
 */
class ContactDto extends Model
{
    public function __construct(
        public ?string $displayName = null,
        public ?bool $active = null,
        public ?string $title = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $position = null,
        public ?string $businessAccount = null,
        public ?string $businessAccountType = null,
        public ?bool $sameAsAccount = null,
        public ?AddressInContactDto $address = null,
        public ?string $email = null,
        public ?string $web = null,
        public ?string $phone1 = null,
        public ?string $phone2 = null,
        public ?string $phone3 = null,
        public ?string $fax = null,
        public ?string $contactMethod = null,
        public ?bool $doNotCall = null,
        public ?bool $doNotFax = null,
        public ?bool $doNotEmail = null,
        public ?bool $doNotMail = null,
        public ?bool $noMassMail = null,
        public ?bool $noMarketing = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?int $contactId = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
