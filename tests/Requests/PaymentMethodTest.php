<?php

// auto-generated

use Pionect\VismaSdk\Requests\PaymentMethod\PaymentMethodGetAllPaymentMethodCollectionRequest;
use Pionect\VismaSdk\Requests\PaymentMethod\PaymentMethodGetBypaymentMethodNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the paymentMethodGetBypaymentMethodNumber method in the PaymentMethod resource', function () {
    Saloon::fake([
        PaymentMethodGetBypaymentMethodNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'paymentMethods',
                'id' => 'mock-id-123',
                'attributes' => [
                    'paymentMethodId' => 'mock-id-123',
                    'active' => true,
                    'meansOfPayment' => 'Mock value',
                    'description' => 'Mock value',
                    'useInAp' => true,
                    'details' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new PaymentMethodGetBypaymentMethodNumberRequest(
        paymentMethodNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentMethodGetBypaymentMethodNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->active->toBe(true)
        ->meansOfPayment->toBe('Mock value')
        ->description->toBe('Mock value')
        ->useInAp->toBe(true);
});

it('calls the paymentMethodGetAllPaymentMethodCollection method in the PaymentMethod resource', function () {
    Saloon::fake([
        PaymentMethodGetAllPaymentMethodCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'paymentMethods',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'paymentMethodId' => 'mock-id-123',
                        'active' => true,
                        'meansOfPayment' => 'Mock value',
                        'description' => 'Mock value',
                        'useInAp' => true,
                        'details' => [],
                    ],
                ],
                1 => [
                    'type' => 'paymentMethods',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'paymentMethodId' => 'mock-id-123',
                        'active' => true,
                        'meansOfPayment' => 'Mock value',
                        'description' => 'Mock value',
                        'useInAp' => true,
                        'details' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new PaymentMethodGetAllPaymentMethodCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PaymentMethodGetAllPaymentMethodCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->paymentMethodId->toBe('mock-id-123')
        ->active->toBe(true)
        ->meansOfPayment->toBe('Mock value')
        ->description->toBe('Mock value')
        ->useInAp->toBe(true);
});
