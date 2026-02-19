<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LotSerialClassAssignmentMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassIssueMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassTrackingMethodEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDtoFactory testFactory()
 */
class LotSerialClassDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The Id of the Lot Serial Class */
        public ?string $id = null,
        /** The description of the Lot Serial Class */
        public ?string $description = null,
        /** Method used to track the Lot Serial Class */
        public ?LotSerialClassTrackingMethodEnum $trackingMethod = null,
        /** Option for enable/disable expiration date tracking of the Lot Serial Class */
        public ?bool $trackExpirationDate = null,
        /** Option for enable/disable require drop shipping of the Lot Serial Class */
        public ?bool $requiredForDropShip = null,
        /** Assignment method used for the Lot Serial Class (When Used, When Received) */
        public ?LotSerialClassAssignmentMethodEnum $assignmentMethod = null,
        /**
         * Issue method used for the Lot Serial Class (FIFO, LIFO, Sequential,
         * Expiration, User-Enterable)
         */
        public ?LotSerialClassIssueMethodEnum $issueMethod = null,
        /**
         * Option for enable/disable auto incremental values between classes for the Lot
         * Serial Class
         */
        public ?bool $autoIncrementalValueBetweenClasses = null,
        /**
         * Value used for the auto incremental value when
         * AutoIncrementalValueBetweenClasses is enabled
         */
        public ?string $autoIncrementalValue = null,
        /**
         * Option for enable/disable auto generating the next number for the Lot Serial
         * Class
         */
        public ?bool $autoGenerateNextNumber = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var LotSerialClassDetailDto[]|null
         *                                     Lot Serial Class details (Segment Number, Type, Value)
         */
        public ?array $details = null,
        public ?string $errorInfo = null,
    ) {}
}
