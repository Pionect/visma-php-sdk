<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Pagination;

use Illuminate\Support\Collection;
use Pionect\VismaSdk\Dto\MetadataDto;
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
        $items = $response->json();

        if (! is_array($items) || count($items) === 0) {
            return true;
        }

        $firstItem = $items[0] ?? null;

        // Strategy 1: Format B - BasePaginationDto (pageNumber, pageSize, totalCount, records)
        if (is_array($firstItem) && isset($firstItem['totalCount'], $firstItem['pageNumber'], $firstItem['pageSize'])) {
            $totalCount = $firstItem['totalCount'];
            $pageNumber = $firstItem['pageNumber'];
            $pageSize = $firstItem['pageSize'];

            if ($totalCount > 0 && $pageSize > 0) {
                $totalPages = (int) ceil($totalCount / $pageSize);

                return $pageNumber >= $totalPages;
            }
        }

        // Strategy 2: Format A - metadata per item
        if (is_array($firstItem) && isset($firstItem['metadata']) && is_array($firstItem['metadata'])) {
            $metadata = new MetadataDto($firstItem['metadata']);

            $request = $response->getPendingRequest();
            $currentPageNumber = $request->getRequest()->query('pageNumber') ?? 1;

            if ($metadata->totalCount > $metadata->maxPageSize) {
                $totalPages = (int) ceil($metadata->totalCount / $metadata->maxPageSize);

                return $currentPageNumber >= $totalPages;
            }
        }

        // No fallback - pagination not supported without metadata
        return true;
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return $response->dto()->toArray();
    }

    protected function applyPagination(Request $request): Request
    {
        $request->query()->add('pageNumber', $this->page);

        if (isset($this->perPageLimit)) {
            $request->query()->add('pageSize', $this->perPageLimit);
        }

        return $request;
    }
}
