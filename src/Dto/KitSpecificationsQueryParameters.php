<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationsQueryParametersFactory testFactory()
 */
class KitSpecificationsQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
