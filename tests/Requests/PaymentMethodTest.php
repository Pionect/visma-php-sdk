<?php

use Pionect\VismaSdk\Requests\PaymentMethod\PaymentMethodGetAllPaymentMethodRequest;
use Pionect\VismaSdk\Requests\PaymentMethod\PaymentMethodGetBypaymentMethodNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the paymentMethodGetBypaymentMethodNumberRequest method in the PaymentMethod resource', function () {
    Saloon::fake([
        PaymentMethodGetBypaymentMethodNumberRequest::class => MockResponse::make([
            'paymentMethodId' => 'mock-id-123',
            'active' => true,
            'meansOfPayment' => 'String value',
            'description' => 'String value',
            'useInAp' => true,
            'details' => [],
        ], 200),
    ]);

    $request = new PaymentMethodGetBypaymentMethodNumberRequest(
        paymentMethodNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentMethodGetBypaymentMethodNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->active->toBe(true)
        ->meansOfPayment->toBe('String value')
        ->description->toBe('String value')
        ->useInAp->toBe(true);
});

it('calls the paymentMethodGetAllPaymentMethodRequest method in the PaymentMethod resource', function () {
    Saloon::fake([
        PaymentMethodGetAllPaymentMethodRequest::class => MockResponse::make([
            0 => [
                'paymentMethodId' => 'mock-id-123',
                'active' => true,
                'meansOfPayment' => 'String value',
                'description' => 'String value',
                'useInAp' => true,
                'details' => [],
            ],
            1 => [
                'paymentMethodId' => 'mock-id-123',
                'active' => true,
                'meansOfPayment' => 'String value',
                'description' => 'String value',
                'useInAp' => true,
                'details' => [],
            ],
        ], 200),
    ]);

    $request = new PaymentMethodGetAllPaymentMethodRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentMethodGetAllPaymentMethodRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->paymentMethodId->toBe('mock-id-123')
        ->active->toBe(true)
        ->meansOfPayment->toBe('String value')
        ->description->toBe('String value')
        ->useInAp->toBe(true);
});
