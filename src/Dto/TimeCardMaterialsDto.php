<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class TimeCardMaterialsDto extends Model
{
    /** The time card line number */
    #[Property]
    public ?int $lineNumber;

    /** Item Id */
    #[Property]
    public ?string $itemId;

    /** Description &gt; The description of the reported quantity. */
    #[Property]
    public ?string $description;

    /** The unit of measure of item */
    #[Property]
    public ?string $uoM;

    #[Property]
    public ?\projectInTimeCardMaterialsDto $project;

    #[Property]
    public ?\projectTaskInTimeCardMaterialsDto $projectTask;

    /** Mon &gt; The quantity reported for Monday. */
    #[Property]
    public ?float $mon;

    /** Tue &gt; The quantity reported for Tuesday. */
    #[Property]
    public ?float $tue;

    /** Wed &gt; The quantity reported for Wednesday. */
    #[Property]
    public ?float $wed;

    /** Thu &gt; The quantity reported for Thursday. */
    #[Property]
    public ?float $thu;

    /** Fri &gt; The quantity reported for Friday. */
    #[Property]
    public ?float $fri;

    /** Sat &gt; The quantity reported for Saturday. */
    #[Property]
    public ?float $sat;

    /** Sun &gt; The quantity reported for Sunday. */
    #[Property]
    public ?float $sun;

    /** Total Qty */
    #[Property]
    public ?float $totalQty;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
