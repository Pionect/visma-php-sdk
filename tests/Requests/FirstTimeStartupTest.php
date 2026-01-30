<?php

use Pionect\VismaSdk\Requests\FirstTimeStartup\FirstTimeStartupGetRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the firstTimeStartupGetRequest method in the FirstTimeStartup resource', function () {
    Saloon::fake([
        FirstTimeStartupGetRequest::class => MockResponse::make([
            0 => [
                'financials' => true,
                'message' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'financials' => true,
                'message' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FirstTimeStartupGetRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FirstTimeStartupGetRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->financials->toBe(true)
        ->message->toBe('String value')
        ->errorInfo->toBe('String value');
});
