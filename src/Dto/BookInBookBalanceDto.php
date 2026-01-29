<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The book details of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory factory()
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
