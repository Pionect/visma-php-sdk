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
            'customer' => null,
            'paymentMethod' => null,
            'active' => true,
            'cashAccount' => null,
            'cardOrAccountNo' => 'String value',
            'paymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
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
        ->active->toBeTrue()
        ->cashAccount->toBeNull()
        ->cardOrAccountNo->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsBycustomerId method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsBycustomerIdRequest::class => MockResponse::make([
            'customer' => null,
            'paymentMethod' => null,
            'active' => true,
            'cashAccount' => null,
            'cardOrAccountNo' => 'String value',
            'paymentMethodDetails' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
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
        ->active->toBeTrue()
        ->cashAccount->toBeNull()
        ->cardOrAccountNo->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerPaymentMethodGetCustomerPaymentMethodsCollection method in the CustomerPaymentMethod resource', function () {
    Saloon::fake([
        CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest::class => MockResponse::make([
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

    $request = (new CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerPaymentMethodGetCustomerPaymentMethodsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->customerId->toBe('mock-id-123');
});
