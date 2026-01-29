<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank settings update Dto
 */
class BankSettingsUpdateDto extends Model
{
    #[Property]
    public ?bankNameInBankSettingsUpdateDto $bankName;

    #[Property]
    public ?bankAddress1InBankSettingsUpdateDto $bankAddress1;

    #[Property]
    public ?bankAddress2InBankSettingsUpdateDto $bankAddress2;

    #[Property]
    public ?bankAddress3InBankSettingsUpdateDto $bankAddress3;

    #[Property]
    public ?bankCountryInBankSettingsUpdateDto $bankCountry;

    #[Property]
    public ?ibanInBankSettingsUpdateDto $iban;

    #[Property]
    public ?bbanInBankSettingsUpdateDto $bban;

    #[Property]
    public ?bbaN2InBankSettingsUpdateDto $bbaN2;

    #[Property]
    public ?bbaN3InBankSettingsUpdateDto $bbaN3;

    #[Property]
    public ?bicInBankSettingsUpdateDto $bic;

    #[Property]
    public ?creditorIdInBankSettingsUpdateDto $creditorId;
}
