<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The book details of this fixed asset
 */
class BookInBookBalanceDto extends Model
{
    /** The book id of this fixed asset */
    #[Property]
    public ?string $bookId;

    /** The description of the book */
    #[Property]
    public ?string $description;
}
