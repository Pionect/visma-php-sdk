<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory factory()
 */
class LotSerialClassQueryParameters extends Model
{
    #[Property]
    public ?string $description;

    #[Property]
    public ?string $trackingMethod;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $trackExpirationDate;

    #[Property]
    public ?bool $requiredForDropShip;

    #[Property]
    public ?string $assignmentMethod;

    #[Property]
    public ?string $issueMethod;

    #[Property]
    public ?bool $autoIncrementalValueBetweenClasses;

    #[Property]
    public ?string $autoIncrementalValue;

    #[Property]
    public ?bool $autoGenerateNextNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $lastModifiedDateTimeCondition;

    /** Pagination parameter. Page number. */
    #[Property]
    public ?int $pageNumber;

    /**
     * Pagination parameter. Number of items to be collected.
     * Please use a page size lower or equal to the allowed max page size which is returned as part of the metadata information.
     * If requested page size is greater than allowed max page size, request will be limited to max page size.
     */
    #[Property]
    public ?int $pageSize;
}
