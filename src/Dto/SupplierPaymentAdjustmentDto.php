<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentDtoFactory factory()
 */
class SupplierPaymentAdjustmentDto extends Model
{
    #[Property]
    public ?string $branch;

    #[Property]
    public ?string $batchNumber;

    #[Property]
    public ?string $docType;

    #[Property]
    public ?string $invoiceRefNbr;

    #[Property]
    public ?float $amountPaid;

    #[Property]
    public ?float $cashDiscountTaken;

    #[Property]
    public ?float $withholdingTax;

    #[Property]
    public ?string $applicationPeriod;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    #[Property]
    public ?float $balance;

    #[Property]
    public ?float $cashDiscountBalance;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $currency;

    #[Property]
    public ?string $postPeriod;

    #[Property]
    public ?string $supplierRef;
}
