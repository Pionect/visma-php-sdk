<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ArAdjustDto extends Model
{
    #[Property]
    public ?string $docType;

    #[Property]
    public ?string $customerCd;

    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?float $amountPaid;

    #[Property]
    public ?float $cashDiscountTaken;

    #[Property]
    public ?float $balance;

    #[Property]
    public ?bool $pendingPpd;

    #[Property]
    public ?bool $released;

    #[Property]
    public ?bool $hold;

    #[Property]
    public ?bool $voided;

    #[Property]
    public ?string $ppdCrMemoRefNbr;

    #[Property]
    public ?string $paymentRef;

    #[Property]
    public ?string $status;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $applicationDate;

    #[Property]
    public ?string $applicationPeriod;

    #[Property]
    public ?string $invoiceText;
}
