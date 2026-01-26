<?php

// auto-generated

use Pionect\VismaSdk\Requests\FirstTimeStartup\FirstTimeStartupGetCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the firstTimeStartupGetCollection method in the FirstTimeStartup resource', function () {
    Saloon::fake([
        FirstTimeStartupGetCollectionRequest::class => MockResponse::make([
            0 => [
                'financials' => true,
                'message' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'financials' => true,
                'message' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new FirstTimeStartupGetCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FirstTimeStartupGetCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->financials->toBeTrue()
        ->message->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
