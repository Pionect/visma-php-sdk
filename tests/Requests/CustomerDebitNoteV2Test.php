<?php

use Pionect\VismaSdk\Requests\CustomerDebitNoteV2\CustomerDebitNoteV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerDebitNoteV2createRequest method in the CustomerDebitNoteV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerDebitNoteV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerDebitNoteV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerDebitNoteV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
