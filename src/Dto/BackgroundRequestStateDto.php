<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BackgroundRequestStateDtoFactory testFactory()
 */
class BackgroundRequestStateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Identifies a started background API operation
         */
        public ?string $id = null,
        /**
         * Current status of a background API operation. Possible values are 'Started',
         * 'Finished' and 'Failed'.
         */
        public ?string $status = null,
        /**
         * The Http Status Code of the finished background API operation. Value is 0
         * when operation is not done.
         */
        public ?int $statusCode = null,
        /**
         * Time when background API operation was requested
         */
        public ?\Carbon\Carbon $receivedUtc = null,
        /**
         * Time when processing of background API operation was started
         */
        public ?\Carbon\Carbon $startedUtc = null,
        /**
         * Time when background API operation was finished processing
         */
        public ?\Carbon\Carbon $finishedUtc = null,
        /**
         * The webhook uri used to notify when background API operation is finished, or
         * 'none' if no notification is configured
         */
        public ?string $webhookAddress = null,
        /**
         * Any error message during processing of background API operation request. Note
         * that any error response from the actual endpoint can be obtained by calling
         * the ContentLocation address from the webhook notifaction response or the
         * background state document.
         */
        public ?string $errorMessage = null,
        public ?string $reference = null,
        /**
         * The endpoint that was requested to be processed as a background API
         * operation.
         */
        public ?string $originalUri = null,
        /**
         * Indicates whether or not the background API operation ended with a response
         * content. Value is updated only when background API operation is finished.
         */
        public ?bool $hasResponseContent = null,
        /**
         * Indicates whether or not the background API operation request has a request
         * content.
         */
        public ?bool $hasRequestContent = null,
        /**
         * The uri from where the client can get the response from the background API
         * operation, if any is available.
         */
        public ?string $contentLocation = null,
        /**
         * Any response headers from the finished background API operation.
         */
        public ?object $responseHeaders = null,
    ) {}
}
