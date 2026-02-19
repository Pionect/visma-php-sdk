<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ContactContactMethodEnum;
use Pionect\VismaSdk\Enums\ContactTitleEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a contact in ContactController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ContactDtoFactory testFactory()
 */
class ContactDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $displayName = null,
        /**
         * The top part > Active > A check box that indicates (if selected) that the
         * contact is active.
         */
        public ?bool $active = null,
        /** The top part > First name > The contact's courtesy title. */
        public ?ContactTitleEnum $title = null,
        /** The top part > First name > The first name of the contact. */
        public ?string $firstName = null,
        /** Mandatory field: The top part > Last name* > The last name of the contact. */
        public ?string $lastName = null,
        /** The top part > Job title > The contact’s job title or position. */
        public ?string $position = null,
        /**
         * The top part > Business account > The business account associated with the
         * contact.
         */
        public ?string $businessAccount = null,
        /**
         * The top part > Business account > The business account type of the business
         * account associated with the contact.
         */
        public ?string $businessAccountType = null,
        /**
         * The Details tab > Same as in account > A check box that indicates (if
         * selected) that the contact's address is the same as the address of the
         * business account.
         */
        public ?bool $sameAsAccount = null,
        public ?AddressInContactDto $address = null,
        /** The Details tab > Contact section > Email > The email address of the contact. */
        public ?string $email = null,
        /** The Details tab > Contact section > Web > The website of the contact, if any. */
        public ?string $web = null,
        /**
         * The Details tab > Contact section > Business 1/Business 2/Business 3/Business
         * assistant 1/Business fax /Home/Home fax/Mobile > The primary phone number of
         * the contact. Select the type from the drop down.
         */
        public ?string $phone1 = null,
        /**
         * The Details tab > Contact section > Business 1/Business 2/Business 3/Business
         * assistant 1/Business fax /Home/Home fax/Mobile > The primary phone number of
         * the contact. Select the type from the drop down.
         */
        public ?string $phone2 = null,
        /**
         * The Details tab > Contact section > Business 1/Business 2/Business 3/Business
         * assistant 1/Business fax /Home/Home fax/Mobile > The primary phone number of
         * the contact. Select the type from the drop down.
         */
        public ?string $phone3 = null,
        /**
         * The Details tab > Contact section > Business fax > The fax number of the
         * contact.
         */
        public ?string $fax = null,
        /** CRM section not available in Visma.net ERP */
        public ?ContactContactMethodEnum $contactMethod = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $doNotCall = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $doNotFax = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $doNotEmail = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $doNotMail = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $noMassMail = null,
        /** CRM section not available in Visma.net ERP */
        public ?bool $noMarketing = null,
        /**
         * Background information: The date and time when the details of the contact
         * were last updated.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * The top part > Contact ID > The unique identifier of the contact, which the
         * system generates automatically.
         */
        public ?int $contactId = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
