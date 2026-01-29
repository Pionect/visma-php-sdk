<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractQueryParametersFactory factory()
 */
class CustomerContractQueryParameters extends Model
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

    #[Property]
    public ?string $contractTemplate;

    #[Property]
    public ?string $status;

    #[Property]
    public ?string $customer;

    #[Property]
    public ?bool $expandSummary;

    #[Property]
    public ?bool $expandDetails;

    /**
     * Attributes (additional information) connected to the entity.
     *  Examples:
     * {{base}}/customerContract?attributes={"AttributeID":"ValueID","AttributeID":"ValueID"}
     * {{base}}/customerContract?attributes={"AttributeID":"ValueID1,ValueID2"}
     */
    #[Property]
    public ?string $attributes;

    #[Property]
    public ?bool $expandAttributes;
}
