<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerBalanceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceQueryParametersFactory factory()
 */
class CustomerBalanceQueryParameters extends Model
{
    #[Property]
    public ?string $greaterThanValue;

    #[Property]
    public ?int $numberToRead;

    #[Property]
    public ?int $skipRecords;

    #[Property]
    public ?string $orderBy;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $lastModifiedDateTimeCondition;
}
