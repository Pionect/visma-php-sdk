<?php

use Pionect\VismaSdk\Requests\CustomerCreditNoteV2\CustomerCreditNoteV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerCreditNoteV2createRequest method in the CustomerCreditNoteV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerCreditNoteV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
