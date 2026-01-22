<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The payment settings tab.
 */
class BankSettingsInBranchDto extends Model
{
    /** Bank name */
    #[Property]
    public ?string $bankName;

    /** Bank address1 */
    #[Property]
    public ?string $bankAddress1;

    /** BankAddress2 */
    #[Property]
    public ?string $bankAddress2;

    /** BankAddress3 */
    #[Property]
    public ?string $bankAddress3;

    /** BankCountry */
    #[Property]
    public ?string $bankCountry;

    /** IBAN */
    #[Property]
    public ?string $iban;

    /** BBAN */
    #[Property]
    public ?string $bban;

    /** BBAN2 */
    #[Property]
    public ?string $bbaN2;

    /** BBAN3 */
    #[Property]
    public ?string $bbaN3;

    /** BIC */
    #[Property]
    public ?string $bic;

    /** CreditorId */
    #[Property]
    public ?string $creditorId;
}
