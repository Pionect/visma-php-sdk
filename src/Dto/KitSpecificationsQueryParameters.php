<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationsQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationsQueryParametersFactory factory()
 */
class KitSpecificationsQueryParameters extends Model
{
    public function __construct(
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        #[MapName('kitInventoryID')]
        public ?string $kitInventoryId = null,
        #[MapName('revisionID')]
        public ?string $revisionId = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
