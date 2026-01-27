<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerDirectDebitDto extends Model
{
    #[Property]
    public ?string $id;

    #[Property]
    public ?string $mandateId;

    #[Property]
    public ?string $mandateDescription;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dateOfSignature;

    #[Property]
    public ?bool $isDefault;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $oneTime;

    #[Property]
    public ?string $bic;

    #[Property]
    public ?string $iban;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastCollectionDate;

    #[Property]
    public ?float $maxAmount;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?string $branch;
}
