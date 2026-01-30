<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BlobMetadataFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BlobMetadataFactory testFactory()
 */
class BlobMetadata extends Model
{
    public function __construct(
        public ?string $blobId = null,
        public ?string $blobName = null,
        public ?string $contentType = null,
        #[MapName('mD5Hash')]
        public ?string $mD5hash = null,
        public ?string $fileChecksum = null,
        public ?int $size = null,
        public ?string $countryCode = null,
        public ?\Carbon\Carbon $createdDateTimeUtc = null,
    ) {}
}
