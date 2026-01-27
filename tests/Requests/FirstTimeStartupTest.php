<?php

// auto-generated

use Pionect\VismaSdk\Requests\FirstTimeStartup\FirstTimeStartupGetCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the firstTimeStartupGetCollection method in the FirstTimeStartup resource', function () {
    Saloon::fake([
        FirstTimeStartupGetCollectionRequest::class => MockResponse::make([
            0 => [
                'financials' => true,
                'message' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'financials' => true,
                'message' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new FirstTimeStartupGetCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FirstTimeStartupGetCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->financials->toBeTrue()
        ->message->toBe('String value')
        ->errorInfo->toBe('String value');
});
