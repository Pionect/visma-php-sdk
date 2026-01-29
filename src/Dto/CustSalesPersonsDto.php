<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustSalesPersonsDtoFactory factory()
 */
class CustSalesPersonsDto extends Model
{
    #[Property]
    public ?string $salePersonId;

    #[Property]
    public ?string $name;

    #[Property]
    public ?string $locationId;

    #[Property]
    public ?string $locationName;

    #[Property]
    public ?float $commisionPct;

    #[Property]
    public ?bool $isDefault;

    #[Property]
    public ?string $errorInfo;
}
