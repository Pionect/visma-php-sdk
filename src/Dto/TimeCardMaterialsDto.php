<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TimeCardMaterialsDtoFactory testFactory()
 */
class TimeCardMaterialsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?string $itemId = null,
        public ?string $description = null,
        public ?string $uoM = null,
        public ?ProjectInTimeCardMaterialsDto $project = null,
        public ?ProjectTaskInTimeCardMaterialsDto $projectTask = null,
        public int|float|null $mon = null,
        public int|float|null $tue = null,
        public int|float|null $wed = null,
        public int|float|null $thu = null,
        public int|float|null $fri = null,
        public int|float|null $sat = null,
        public int|float|null $sun = null,
        public int|float|null $totalQty = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
