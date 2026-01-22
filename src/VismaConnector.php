<?php

namespace Pionect\VismaSdk;

use Pionect\VismaSdk\Foundation\Pagination\JsonApiPaginator;
use Pionect\VismaSdk\Foundation\Responses\JsonApiResponse;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

/**
 * Visma.net ERP API
 */
class VismaConnector extends Connector implements HasPagination
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant;

    /**
     * @param  string  $clientId
     * @param  string  $clientSecret
     * @param  null|string  $tokenUrl
     * @param  null|string  $refreshUrl
     * @param  null|array  $scopes
     */
    public function __construct(
        protected ?string $bearerToken = null,
    ) {}

    public function resolveBaseUrl(): string
    {
        return config('visma.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/vnd.api+json',
        ];
    }

    public function resolveResponseClass(): string
    {
        return JsonApiResponse::class;
    }

    public function paginate(Request $request): JsonApiPaginator
    {
        return new JsonApiPaginator($this, $request);
    }
}
