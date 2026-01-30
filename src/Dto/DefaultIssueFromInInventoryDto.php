<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default issue from &gt; The location of
 * the warehouse to be used by default to issue quantities of the selected stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultIssueFromInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultIssueFromInInventoryDtoFactory testFactory()
 */
class DefaultIssueFromInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
