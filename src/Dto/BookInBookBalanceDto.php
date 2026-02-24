<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The book details of this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory testFactory()
 */
class BookInBookBalanceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BookInBookBalanceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The book id of this fixed asset */
        #[MapName('bookID')]
        public ?string $bookId = null,
        /** The description of the book */
        public ?string $description = null,
    ) {}
}
