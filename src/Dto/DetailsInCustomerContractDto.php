<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Details tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DetailsInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DetailsInCustomerContractDtoFactory factory()
 */
class DetailsInCustomerContractDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveFrom;

    #[Property]
    public ?PromoCodeIdDescriptionDto $promoCode;

    #[Property]
    public ?float $pendingSetup;

    #[Property]
    public ?float $pendingRecurring;

    #[Property]
    public ?float $pendingRenewal;

    #[Property]
    public ?float $totalPending;

    #[Property]
    public ?float $currentSetup;

    #[Property]
    public ?float $currentRecurring;

    #[Property]
    public ?float $currentRenewal;

    #[Property]
    public ?array $lines;
}
