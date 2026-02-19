<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\StocktakeV2dtoSummaryStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakeV2dtoFactory testFactory()
 */
class StocktakeV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Ref. no. > The reference number of the stocktaking document to
         * be reviewed.
         */
        public ?string $referenceNbr = null,
        /** The top part > Description > The description of the stocktaking. */
        public ?string $description = null,
        /**
         * The top part > Status > An info field that shows the current status of this
         * stocktaking document.
         */
        public ?StocktakeV2dtoSummaryStatusEnum $summaryStatus = null,
        /**
         * The top part > Freeze date > An info field that shows the date when the
         * stocktaking document was created.
         */
        public ?\Carbon\Carbon $freezeDate = null,
        public ?int $numberOfLines = null,
        /**
         * The top part > Total physical qty. > An info field showing the total actual
         * quantity of all stock items listed in the document.
         */
        public int|float|null $physicalQty = null,
        /**
         * The top part > Total variance qty. > An info field showing the total variance
         * quantity for the document.
         */
        public int|float|null $varianceQty = null,
        /**
         * The top part > Total variance cost > An info field showing the total variance
         * cost for all stock items listed in the document.
         */
        public int|float|null $varianceCost = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var StocktakeLineV2dto[]|null
         *                                Stocktaking details tab >
         */
        public ?array $lines = null,
        /** Timestamp of the stocktake record */
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
