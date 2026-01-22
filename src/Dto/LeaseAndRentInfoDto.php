<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class LeaseAndRentInfoDto extends Model
{
    #[Property]
    public ?string $lessorId;

    #[Property]
    public ?string $lessorName;

    #[Property]
    public ?int $leaseRentTerm;

    #[Property]
    public ?string $leaseNumber;

    #[Property]
    public ?float $rentAmount;

    #[Property]
    public ?float $retailCost;

    #[Property]
    public ?string $manufacturingYear;
}
