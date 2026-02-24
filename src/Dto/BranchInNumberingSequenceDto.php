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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BranchInNumberingSequenceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
