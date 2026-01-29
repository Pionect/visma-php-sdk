<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BlobMetadataFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BlobMetadataFactory factory()
 */
class BlobMetadata extends Model
{
    #[Property]
    public ?string $blobId;

    #[Property]
    public ?string $blobName;

    #[Property]
    public ?string $contentType;

    #[Property]
    public ?string $mD5hash;

    #[Property]
    public ?string $fileChecksum;

    #[Property]
    public ?int $size;

    #[Property]
    public ?string $countryCode;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTimeUtc;
}
