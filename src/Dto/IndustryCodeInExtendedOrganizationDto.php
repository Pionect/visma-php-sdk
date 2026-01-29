<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Industry Code
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IndustryCodeInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeInExtendedOrganizationDtoFactory factory()
 */
class IndustryCodeInExtendedOrganizationDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
