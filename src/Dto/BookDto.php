<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BookDto extends Model
{
    /** The book id of this fixed asset */
    #[Property]
    public ?string $bookId;

    /** The description of the book */
    #[Property]
    public ?string $description;
}
