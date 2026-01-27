<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class LotSerialClassDto extends Model
{
    /** The description of the Lot Serial Class */
    #[Property]
    public ?string $description;

    /** Method used to track the Lot Serial Class */
    #[Property]
    public ?string $trackingMethod;

    /** Option for enable/disable expiration date tracking of the Lot Serial Class */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $trackExpirationDate;

    /** Option for enable/disable require drop shipping of the Lot Serial Class */
    #[Property]
    public ?bool $requiredForDropShip;

    /** Assignment method used for the Lot Serial Class (When Used, When Received) */
    #[Property]
    public ?string $assignmentMethod;

    /** Issue method used for the Lot Serial Class (FIFO, LIFO, Sequential, Expiration, User-Enterable) */
    #[Property]
    public ?string $issueMethod;

    /** Option for enable/disable auto incremental values between classes for the Lot Serial Class */
    #[Property]
    public ?bool $autoIncrementalValueBetweenClasses;

    /** Value used for the auto incremental value when AutoIncrementalValueBetweenClasses is enabled */
    #[Property]
    public ?string $autoIncrementalValue;

    /** Option for enable/disable auto generating the next number for the Lot Serial Class */
    #[Property]
    public ?bool $autoGenerateNextNumber;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Lot Serial Class details (Segment Number, Type, Value) */
    #[Property]
    public ?array $details;

    #[Property]
    public ?string $errorInfo;
}
