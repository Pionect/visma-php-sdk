<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookDtoFactory factory()
 */
class BookDto extends Model
{
    /** The book id of this fixed asset */
    #[Property]
    public ?string $bookId;

    /** The description of the book */
    #[Property]
    public ?string $description;
}
