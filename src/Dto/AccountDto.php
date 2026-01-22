<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AccountDto extends Model
{
    /** The table &gt; AccountID &gt; The Account ID is the actual ID that the account have in the database and are used in other tables as the relation between the Chart of accounts table and other tables. */
    #[Property]
    public ?int $accountId;

    /** Mandatory field: The table &gt; Account* &gt; The unique identifier of the general ledger account in the system. */
    #[Property]
    public ?string $accountCd;

    /** The table &gt; Account group &gt; The account group (used in project management if the Projects module has been activated) that includes this account. */
    #[Property]
    public ?string $accountGroupCd;

    /** The table &gt; Account class &gt; Optional. The account class to which the account is assigned. */
    #[Property]
    public ?string $accountClass;

    /** The table &gt; Active &gt; A check box that indicates that the account is active. */
    #[Property]
    public ?bool $active;

    /** The table &gt; Description &gt; An alphanumeric string of up to 30 characters that describes the account. */
    #[Property]
    public ?string $description;

    /** The table &gt; Desc &gt; An alphanumeric string of up to 30 characters that describes the AccountClass. */
    #[Property]
    public ?string $accountClassDescription;

    /** The table &gt; Use default sub &gt; A check box that causes the system (if selected) to set the default subaccount as the Subaccount if the account is selected. */
    #[Property]
    public ?bool $useDefaultSub;

    /** The table &gt; Post option &gt; An option that defines how transactions created in other workspaces are posted to this account. Summary (default) or Detail. */
    #[Property]
    public ?string $postOption;

    /** The table &gt; Currency &gt; Optional: This column appears only if support for multiple currencies has been activated for the system. */
    #[Property]
    public ?string $currency;

    /** The table &gt; VAT category &gt; A tax category that you define for the selected account. When you create a journal transaction manually in the GL301000 window, based on this VAT category, the taxable amount will be calculated for the journal entry. */
    #[Property]
    public ?string $taxCategory;

    /** The table &gt; Cash account &gt; A check box that indicates (if selected) that the account has a cash account or multiple cash accounts linked to it. */
    #[Property]
    public ?bool $cashAccount;

    /** The table &gt; Public code 1 &gt; The authorities valid code mapped to the account. Used for example in SAF-T and in some nationals reporting to the authorities. */
    #[Property]
    public ?string $publicCode1;

    /** This information is not visible in the window.  It is collected from the system. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?\externalCode1InfoInAccountDto $externalCode1info;

    #[Property]
    public ?\externalCode2InfoInAccountDto $externalCode2info;

    #[Property]
    public ?\analisysCodeInfoInAccountDto $analisysCodeInfo;

    #[Property]
    public ?string $controlAccountModule;

    #[Property]
    public ?bool $allowManualEntry;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
