<?php

use Pionect\VismaSdk\Foundation\Pagination\VismaPaginator;
use Pionect\VismaSdk\Requests\Branch\BranchGetAllBranchesRequest;
use Pionect\VismaSdk\VismaConnector;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\PendingRequest;
use Saloon\Http\Response;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new VismaConnector;
});

function fakeBranchResponse(VismaConnector $connector, BranchGetAllBranchesRequest $request, array $body): Response
{
    Saloon::fake([
        BranchGetAllBranchesRequest::class => MockResponse::make($body, 200),
    ]);

    return $connector->send($request);
}

function isLastPage(VismaPaginator $paginator, Response $response): bool
{
    $method = new ReflectionMethod($paginator, 'isLastPage');
    $method->setAccessible(true);

    return $method->invoke($paginator, $response);
}

it('treats an empty array response as the last page', function () {
    $request = new BranchGetAllBranchesRequest;
    $response = fakeBranchResponse($this->vismaConnector, $request, []);
    $paginator = $this->vismaConnector->paginate($request);

    expect(isLastPage($paginator, $response))->toBeTrue();
});

it('treats a non-array response body as the last page', function () {
    $request = new BranchGetAllBranchesRequest;
    $paginator = $this->vismaConnector->paginate($request);

    $response = Mockery::mock(Response::class);
    $response->shouldReceive('json')->andReturn(null);

    expect(isLastPage($paginator, $response))->toBeTrue();
});

it('treats an unrecognised item shape as the last page', function () {
    $request = new BranchGetAllBranchesRequest;
    $response = fakeBranchResponse($this->vismaConnector, $request, [
        ['number' => 'B1'],
    ]);
    $paginator = $this->vismaConnector->paginate($request);

    expect(isLastPage($paginator, $response))->toBeTrue();
});

describe('Format B - BasePaginationDto', function () {
    it('is not the last page when pageNumber is below the total pages', function () {
        $request = new BranchGetAllBranchesRequest;
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['totalCount' => 50, 'pageNumber' => 1, 'pageSize' => 20, 'records' => []],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeFalse();
    });

    it('is the last page when pageNumber reaches the total pages', function () {
        $request = new BranchGetAllBranchesRequest;
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['totalCount' => 50, 'pageNumber' => 3, 'pageSize' => 20, 'records' => []],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeTrue();
    });

    it('is the last page when totalCount is zero', function () {
        $request = new BranchGetAllBranchesRequest;
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['totalCount' => 0, 'pageNumber' => 1, 'pageSize' => 20, 'records' => []],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeTrue();
    });
});

describe('Format A - metadata per item', function () {
    it('is not the last page when the current page is below the total pages', function () {
        $request = new BranchGetAllBranchesRequest;
        $request->query()->add('pageNumber', 1);
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['metadata' => ['totalCount' => 50, 'maxPageSize' => 20]],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeFalse();
    });

    it('is the last page when the current page reaches the total pages', function () {
        $request = new BranchGetAllBranchesRequest;
        $request->query()->add('pageNumber', 3);
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['metadata' => ['totalCount' => 50, 'maxPageSize' => 20]],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeTrue();
    });

    it('defaults to page 1 when no pageNumber query param is set', function () {
        $request = new BranchGetAllBranchesRequest;
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['metadata' => ['totalCount' => 50, 'maxPageSize' => 20]],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeFalse();
    });

    it('is the last page when totalCount fits within a single page', function () {
        $request = new BranchGetAllBranchesRequest;
        $request->query()->add('pageNumber', 1);
        $response = fakeBranchResponse($this->vismaConnector, $request, [
            ['metadata' => ['totalCount' => 10, 'maxPageSize' => 20]],
        ]);
        $paginator = $this->vismaConnector->paginate($request);

        expect(isLastPage($paginator, $response))->toBeTrue();
    });
});

it('paginates through multiple pages using the metadata strategy', function () {
    Saloon::fake([
        BranchGetAllBranchesRequest::class => function (PendingRequest $pendingRequest) {
            $page = $pendingRequest->getRequest()->query()->get('pageNumber') ?? 1;

            $items = $page === 1
                ? [
                    ['number' => 'B1', 'metadata' => ['totalCount' => 3, 'maxPageSize' => 2]],
                    ['number' => 'B2', 'metadata' => ['totalCount' => 3, 'maxPageSize' => 2]],
                ]
                : [
                    ['number' => 'B3', 'metadata' => ['totalCount' => 3, 'maxPageSize' => 2]],
                ];

            return MockResponse::make($items, 200);
        },
    ]);

    $paginator = $this->vismaConnector->paginate(new BranchGetAllBranchesRequest)
        ->setPerPageLimit(2);

    $items = $paginator->dtoCollection();

    expect($items)->toHaveCount(3)
        ->and($items->pluck('number')->all())->toBe(['B1', 'B2', 'B3']);

    Saloon::assertSentCount(2);
});
