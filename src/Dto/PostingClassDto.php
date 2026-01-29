<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostingClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostingClassDtoFactory factory()
 */
class PostingClassDto extends Model
{
    /** The identifier. */
    #[Property]
    public ?string $id;

    /** The description. */
    #[Property]
    public ?string $description;
}
