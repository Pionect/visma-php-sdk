<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Organisation details tab &gt; Configuration settings section &gt; Industry code &gt; The
 * branch's industry code ID.
 *
 * @method static \Pionect\VismaSdk\Factories\IndustryCodeInBranchDtoFactory testFactory()
 */
class IndustryCodeInBranchDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
