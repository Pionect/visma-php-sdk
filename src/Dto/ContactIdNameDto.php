<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactIdNameDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactIdNameDtoFactory factory()
 */
class ContactIdNameDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
