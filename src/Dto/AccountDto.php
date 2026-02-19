<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AccountDtoFactory testFactory()
 */
class AccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * AccountID > The Account ID is the actual ID that the account have in the
         * database and are used in other tables as the relation between the Chart of
         * accounts table and other tables.
         */
        #[MapName('accountID')]
        public ?int $accountId = null,
        /**
         * Mandatory field: The table > Account* > The unique identifier of the general
         * ledger account in the system.
         */
        #[MapName('accountCD')]
        public ?string $accountCd = null,
        /**
         * Account group > The account group (used in project management if the Projects
         * module has been activated) that includes this account.
         */
        #[MapName('accountGroupCD')]
        public ?string $accountGroupCd = null,
        /** Account class > Optional. The account class to which the account is assigned. */
        public ?string $accountClass = null,
        /** Type > The type of account: Asset, Liability, Income, or Expense. */
        public ?AccountTypeEnum $type = null,
        /** Active > A check box that indicates that the account is active. */
        public ?bool $active = null,
        /**
         * Description > An alphanumeric string of up to 30 characters that describes
         * the account.
         */
        public ?string $description = null,
        /**
         * Desc > An alphanumeric string of up to 30 characters that describes the
         * AccountClass.
         */
        public ?string $accountClassDescription = null,
        /**
         * Use default sub > A check box that causes the system (if selected) to set the
         * default subaccount as the Subaccount if the account is selected.
         */
        public ?bool $useDefaultSub = null,
        /**
         * Post option > An option that defines how transactions created in other
         * workspaces are posted to this account. Summary (default) or Detail.
         */
        public ?string $postOption = null,
        /**
         * Currency > Optional: This column appears only if support for multiple
         * currencies has been activated for the system.
         */
        public ?string $currency = null,
        /**
         * VAT category > A tax category that you define for the selected account. When
         * you create a journal transaction manually in the GL301000 window, based on
         * this VAT category, the taxable amount will be calculated for the journal
         * entry.
         */
        public ?string $taxCategory = null,
        /**
         * Cash account > A check box that indicates (if selected) that the account has
         * a cash account or multiple cash accounts linked to it.
         */
        public ?bool $cashAccount = null,
        /**
         * Public code 1 > The authorities valid code mapped to the account. Used for
         * example in SAF-T and in some nationals reporting to the authorities.
         */
        public ?string $publicCode1 = null,
        /**
         * This information is not visible in the window.  It is collected from the
         * system.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        #[MapName('externalCode1Info')]
        public ?ExternalCode1infoInAccountDto $externalCode1info = null,
        #[MapName('externalCode2Info')]
        public ?ExternalCode2infoInAccountDto $externalCode2info = null,
        public ?AnalisysCodeInfoInAccountDto $analisysCodeInfo = null,
        public ?string $controlAccountModule = null,
        public ?bool $allowManualEntry = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
