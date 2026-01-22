<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a PackagingType in PackagingTypeController. Used by getting data.
 */
class PackagingTypeDto extends Model
{
    /** Mandatory field: The table &gt; Box ID* &gt; The ID of the type of box. */
    #[Property]
    public ?string $boxId;

    /** The table &gt; Description &gt; A description of the box. */
    #[Property]
    public ?string $description;

    /** The table &gt; Tare weight &gt; The weight of an empty box of this type, which may include the weight of any packaging material used to pack items inside the box. */
    #[Property]
    public ?float $boxWeight;

    /** The table &gt; Max weight &gt; The maximum weight a box of the type can hold. */
    #[Property]
    public ?float $maxWeight;

    /** The table &gt; Weight UoM &gt; The unit of measure used for the weight. */
    #[Property]
    public ?string $weightUoM;

    /** The table &gt; Max. volume &gt; The maximum volume of items that can fit into a package of the type. */
    #[Property]
    public ?float $maxVolume;

    /** The table &gt; Volume UoM &gt; The unit of measure used for the volume as specified in the Inventory preferences (IN101000) window. */
    #[Property]
    public ?string $volumeUoM;

    /** The table &gt; Length &gt; The length of the package. */
    #[Property]
    public ?int $length;

    /** The table &gt; Width &gt; The width of the package. */
    #[Property]
    public ?int $width;

    /** The table &gt; Height &gt; The height of the package. */
    #[Property]
    public ?int $height;

    /** The table &gt; Active by default &gt; If you select this check box, the package will be added by default to the list of packages for each new ship via code. */
    #[Property]
    public ?bool $activeByDefault;

    /** The table &gt; The date and time when the type was last modified. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?\MetadataDto $metadata;
}
