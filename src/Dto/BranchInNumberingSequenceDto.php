<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Branch &gt; The branch using the numbering series.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory testFactory()
 */
class BranchInNumberingSequenceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
