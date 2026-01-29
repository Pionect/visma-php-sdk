<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ModeOfTransportDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ModeOfTransportDtoFactory factory()
 */
class ModeOfTransportDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?int $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
