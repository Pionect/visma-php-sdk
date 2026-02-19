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
        /** The time card line number */
        public ?int $lineNumber = null,
        /** Item Id */
        public ?string $itemId = null,
        /** Description > The description of the reported quantity. */
        public ?string $description = null,
        /** The unit of measure of item */
        public ?string $uoM = null,
        public ?ProjectInTimeCardMaterialsDto $project = null,
        public ?ProjectTaskInTimeCardMaterialsDto $projectTask = null,
        /** Mon > The quantity reported for Monday. */
        public int|float|null $mon = null,
        /** Tue > The quantity reported for Tuesday. */
        public int|float|null $tue = null,
        /** Wed > The quantity reported for Wednesday. */
        public int|float|null $wed = null,
        /** Thu > The quantity reported for Thursday. */
        public int|float|null $thu = null,
        /** Fri > The quantity reported for Friday. */
        public int|float|null $fri = null,
        /** Sat > The quantity reported for Saturday. */
        public int|float|null $sat = null,
        /** Sun > The quantity reported for Sunday. */
        public int|float|null $sun = null,
        /** Total Qty */
        public int|float|null $totalQty = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
