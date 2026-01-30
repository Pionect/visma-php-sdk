<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The book details of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory factory()
 */
class BookInBookBalanceDto extends Model
{
    public function __construct(
        #[MapName('bookID')]
        public ?string $bookId = null,
        public ?string $description = null,
    ) {}
}
