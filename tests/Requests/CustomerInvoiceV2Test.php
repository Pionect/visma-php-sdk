<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\CustomerInvoiceV2\CustomerInvoiceV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerInvoiceV2createRequest method in the CustomerInvoiceV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerInvoiceV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
