<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDetailDtoFactory factory()
 */
class LotSerialClassDetailDto extends Model
{
    /** The Id of the Lot Serial Class */
    #[Property]
    public ?string $id;

    /** Segment number for the Lot Serial segment */
    #[Property]
    public ?int $segmentNumber;

    /** Segment type for the Lot Serial segment */
    #[Property]
    public ?string $type;

    /** Segment value for the Lot Serial segment */
    #[Property]
    public ?string $value;

    #[Property]
    public ?string $errorInfo;
}
