<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Pagination;

use Illuminate\Support\Collection;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;

class PlainJsonPaginator extends Paginator
{
    public function dtoCollection(): Collection
    {
        return parent::collect()->collect();
    }

    protected function isLastPage(Response $response): bool
    {
        // Check if we received fewer items than requested (meaning no more pages)
        $items = $response->json();

        if (! is_array($items)) {
            return true;
        }

        // If we have a per_page limit and received fewer items, we're on the last page
        if (isset($this->perPageLimit) && count($items) < $this->perPageLimit) {
            return true;
        }

        // If the response is empty, we're on the last page
        return count($items) === 0;
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return $response->dto()->toArray();
    }

    protected function applyPagination(Request $request): Request
    {
        $request->query()->add('page', $this->page);

        if (isset($this->perPageLimit)) {
            $request->query()->add('per_page', $this->perPageLimit);
        }

        return $request;
    }
}
