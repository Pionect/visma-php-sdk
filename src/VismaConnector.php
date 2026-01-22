<?php

namespace Pionect\VismaSdk;

use Pionect\VismaSdk\Foundation\Pagination\JsonApiPaginator;
use Pionect\VismaSdk\Foundation\Responses\JsonApiResponse;
use Saloon\Helpers\OAuth2\OAuthConfig;
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
     * Visma.net ERP API
     */
    public function __construct()
    {
        //
    }

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

    protected function defaultOAuth2Config(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId(config('visma.application_id'))
            ->setClientSecret(config('visma.application_secret'))
            ->setTokenEndpoint('https://connect.visma.com/connect/token')
            ->setDefaultScopes([
                'vismanet_erp_service_api:read',
                'vismanet_erp_service_api:create',
                'vismanet_erp_service_api:update',
                'vismanet_erp_service_api:delete',
            ])
            ->setRequestModifier(function (Request $request) {
                $request->body()->add('tenant_id', config('visma.tenant_id'));
            });
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
