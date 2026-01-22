<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class StocktakeV2dto extends Model
{
    /** The top part &gt; Ref. no. &gt; The reference number of the stocktaking document to be reviewed. */
    #[Property]
    public ?string $referenceNbr;

    /** The top part &gt; Description &gt; The description of the stocktaking. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Status &gt; An info field that shows the current status of this stocktaking document. */
    #[Property]
    public ?string $summaryStatus;

    /** The top part &gt; Freeze date &gt; An info field that shows the date when the stocktaking document was created. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $freezeDate;

    #[Property]
    public ?int $numberOfLines;

    /** The top part &gt; Total physical qty. &gt; An info field showing the total actual quantity of all stock items listed in the document. */
    #[Property]
    public ?float $physicalQty;

    /** The top part &gt; Total variance qty. &gt; An info field showing the total variance quantity for the document. */
    #[Property]
    public ?float $varianceQty;

    /** The top part &gt; Total variance cost &gt; An info field showing the total variance cost for all stock items listed in the document. */
    #[Property]
    public ?float $varianceCost;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Stocktaking details tab &gt; */
    #[Property]
    public ?array $lines;

    /** Timestamp of the stocktake record */
    #[Property]
    public ?string $timestamp;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
