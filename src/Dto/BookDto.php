<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BookDtoFactory testFactory()
 */
class BookDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The book id of this fixed asset */
        #[MapName('bookID')]
        public ?string $bookId = null,
        /** The description of the book */
        public ?string $description = null,
    ) {}
}
