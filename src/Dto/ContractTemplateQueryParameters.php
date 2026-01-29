<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateQueryParametersFactory factory()
 */
class ContractTemplateQueryParameters extends Model
{
    #[Property]
    public ?string $greaterThanValue;

    #[Property]
    public ?int $numberToRead;

    #[Property]
    public ?int $skipRecords;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $lastModifiedDateTimeCondition;

    #[Property]
    public ?bool $expandAttributes;
}
