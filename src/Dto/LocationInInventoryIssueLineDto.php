<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The warehouse location from which the goods are transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInInventoryIssueLineDtoFactory testFactory()
 */
class LocationInInventoryIssueLineDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
