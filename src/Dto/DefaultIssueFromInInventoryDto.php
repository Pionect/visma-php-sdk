<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default issue from &gt; The location of
 * the warehouse to be used by default to issue quantities of the selected stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultIssueFromInInventoryDtoFactory testFactory()
 */
class DefaultIssueFromInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
