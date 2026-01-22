<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest;
use Pionect\VismaSdk\Requests\CustomerPaymentMethod\CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodId method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerPaymentMethods',
                'id' => 'mock-id-123',
                'attributes' => [
                    'customer' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'active' => true,
                    'cashAccount' => 'Mock value',
                    'cardOrAccountNo' => 'Mock value',
                    'paymentMethodDetails' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest(
        customerIdId: 'test string',
        customerPaymentMethodIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodGetCustomerPaymentMethodBycustomerIdcustomerPaymentMethodIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->active->toBe(true)
        ->cashAccount->toBe('Mock value')
        ->cardOrAccountNo->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsBycustomerId method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerPaymentMethods',
                'id' => 'mock-id-123',
                'attributes' => [
                    'customer' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'active' => true,
                    'cashAccount' => 'Mock value',
                    'cardOrAccountNo' => 'Mock value',
                    'paymentMethodDetails' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest(
        customerIdId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->active->toBe(true)
        ->cashAccount->toBe('Mock value')
        ->cardOrAccountNo->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsCollection method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customerPaymentMethods',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'customerId' => 'mock-id-123',
                        'paymentMethods' => [],
                    ],
                ],
                1 => [
                    'type' => 'customerPaymentMethods',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'customerId' => 'mock-id-123',
                        'paymentMethods' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->customerId->toBe('mock-id-123');
});
