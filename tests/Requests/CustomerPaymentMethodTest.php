<?php

use Pionect\VismaSdk\Dto\CustomerPaymentMethodUpdateDto;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodCreateCustomerPaymentMethodRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodsRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class => MockResponse::make([
            'customer' => null,
            'paymentMethod' => null,
            'active' => true,
            'cashAccount' => null,
            'cardOrAccountNo' => 'String value',
            'paymentMethodDetails' => [],
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest(
        customerId: 'test string',
        customerPaymentMethodId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->toBeNull()
        ->paymentMethod->toBeNull()
        ->active->toBe(true)
        ->cashAccount->toBeNull()
        ->cardOrAccountNo->toBe('String value')
        ->timeStamp->toBe('String value');
});

it('calls the customerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest method in the CustomerPaymentMethod resource', function () {
    $bodyData = new CustomerPaymentMethodUpdateDto(
        active: true,
        cashAccountId: 'mock-id-123',
        paymentMethodDetails: []
    );

    Saloon::fake([
        CustomerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest(
        customerId: 'test string',
        customerPaymentMethodId: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodUpdateCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest::class => MockResponse::make([
            'customer' => null,
            'paymentMethod' => null,
            'active' => true,
            'cashAccount' => null,
            'cardOrAccountNo' => 'String value',
            'paymentMethodDetails' => [],
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest(
        customerId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->toBeNull()
        ->paymentMethod->toBeNull()
        ->active->toBe(true)
        ->cashAccount->toBeNull()
        ->cardOrAccountNo->toBe('String value')
        ->timeStamp->toBe('String value');
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsRequest method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsRequest::class => MockResponse::make([
            0 => [
                'customerId' => 'mock-id-123',
                'paymentMethods' => [],
            ],
            1 => [
                'customerId' => 'mock-id-123',
                'paymentMethods' => [],
            ],
        ], 200),
    ]);

    $request = new CustomerPaymentMethodGetCustomerPaymentMethodsRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodGetCustomerPaymentMethodsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->customerId->toBe('mock-id-123');
});

it('calls the customerPaymentMethodCreateCustomerPaymentMethodRequest method in the CustomerPaymentMethod resource', function () {
    $bodyData = new CustomerPaymentMethodUpdateDto(
        active: true,
        cashAccountId: 'mock-id-123',
        paymentMethodDetails: []
    );

    Saloon::fake([
        CustomerPaymentMethodCreateCustomerPaymentMethodRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentMethodCreateCustomerPaymentMethodRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodCreateCustomerPaymentMethodRequest::class);

    expect($response->status())->toBe(201);
});
