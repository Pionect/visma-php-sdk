<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookDtoFactory factory()
 */
class BookDto extends Model
{
    public function __construct(
        #[MapName('bookID')]
        public ?string $bookId = null,
        public ?string $description = null,
    ) {}
}
