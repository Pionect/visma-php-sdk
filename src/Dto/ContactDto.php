<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a contact in ContactController. Used by getting data.
 */
class ContactDto extends Model
{
    #[Property]
    public ?string $displayName;

    /** The top part &gt; Active &gt; A check box that indicates (if selected) that the contact is active. */
    #[Property]
    public ?bool $active;

    /** The top part &gt; First name &gt; The contact's courtesy title. */
    #[Property]
    public ?string $title;

    /** The top part &gt; First name &gt; The first name of the contact. */
    #[Property]
    public ?string $firstName;

    /** Mandatory field: The top part &gt; Last name* &gt; The last name of the contact. */
    #[Property]
    public ?string $lastName;

    /** The top part &gt; Job title &gt; The contact’s job title or position. */
    #[Property]
    public ?string $position;

    /** The top part &gt; Business account &gt; The business account associated with the contact. */
    #[Property]
    public ?string $businessAccount;

    /** The top part &gt; Business account &gt; The business account type of the business account associated with the contact. */
    #[Property]
    public ?string $businessAccountType;

    /** The Details tab &gt; Same as in account &gt; A check box that indicates (if selected) that the contact's address is the same as the address of the business account. */
    #[Property]
    public ?bool $sameAsAccount;

    #[Property]
    public ?addressInContactDto $address;

    /** The Details tab &gt; Contact section &gt; Email &gt; The email address of the contact. */
    #[Property]
    public ?string $email;

    /** The Details tab &gt; Contact section &gt; Web &gt; The website of the contact, if any. */
    #[Property]
    public ?string $web;

    /** The Details tab &gt; Contact section &gt; Business 1/Business 2/Business 3/Business assistant 1/Business fax /Home/Home fax/Mobile &gt; The primary phone number of the contact. Select the type from the drop down. */
    #[Property]
    public ?string $phone1;

    /** The Details tab &gt; Contact section &gt; Business 1/Business 2/Business 3/Business assistant 1/Business fax /Home/Home fax/Mobile &gt; The primary phone number of the contact. Select the type from the drop down. */
    #[Property]
    public ?string $phone2;

    /** The Details tab &gt; Contact section &gt; Business 1/Business 2/Business 3/Business assistant 1/Business fax /Home/Home fax/Mobile &gt; The primary phone number of the contact. Select the type from the drop down. */
    #[Property]
    public ?string $phone3;

    /** The Details tab &gt; Contact section &gt; Business fax &gt; The fax number of the contact. */
    #[Property]
    public ?string $fax;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?string $contactMethod;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $doNotCall;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $doNotFax;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $doNotEmail;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $doNotMail;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $noMassMail;

    /** CRM section not available in Visma.net ERP */
    #[Property]
    public ?bool $noMarketing;

    /** Background information: The date and time when the details of the contact were last updated. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The top part &gt; Contact ID &gt; The unique identifier of the contact, which the system generates automatically. */
    #[Property]
    public ?int $contactId;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
