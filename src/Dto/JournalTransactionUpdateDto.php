<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a journal transaction in JournalTransactionController. Used for
 * creating/updating data.
 */
class JournalTransactionUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $batchNumber;

    #[Property]
    public ?\DtoValueOfBoolean $hold;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $transactionDate;

    #[Property]
    public ?\postPeriodInJournalTransactionUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInJournalTransactionUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $ledger;

    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfBoolean $autoReversing;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfDecimal $controlTotalInCurrency;

    #[Property]
    public ?\DtoValueOfBoolean $createVatTransaction;

    #[Property]
    public ?\DtoValueOfBoolean $skipVatAmountValidation;

    #[Property]
    public ?\DtoValueOfString $transactionCode;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?array $journalTransactionLines;
}
