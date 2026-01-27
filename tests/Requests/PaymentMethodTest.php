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
            'paymentMethodId' => 'mock-id-123',
            'active' => true,
            'meansOfPayment' => 'String value',
            'description' => 'String value',
            'useInAp' => true,
            'details' => [],
            'id' => 'mock-id-123',
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
        ->active->toBeTrue()
        ->meansOfPayment->toBe('String value')
        ->description->toBe('String value')
        ->useInAp->toBeTrue()
        ->id->toBe('mock-id-123');
});

it('calls the paymentMethodGetAllPaymentMethodCollection method in the PaymentMethod resource', function () {
    Saloon::fake([
        PaymentMethodGetAllPaymentMethodCollectionRequest::class => MockResponse::make([
            0 => [
                'paymentMethodId' => 'mock-id-123',
                'active' => true,
                'meansOfPayment' => 'String value',
                'description' => 'String value',
                'useInAp' => true,
                'details' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'paymentMethodId' => 'mock-id-123',
                'active' => true,
                'meansOfPayment' => 'String value',
                'description' => 'String value',
                'useInAp' => true,
                'details' => [],
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new PaymentMethodGetAllPaymentMethodCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PaymentMethodGetAllPaymentMethodCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->paymentMethodId->toBe('mock-id-123')
        ->active->toBeTrue()
        ->meansOfPayment->toBe('String value')
        ->description->toBe('String value')
        ->useInAp->toBeTrue()
        ->id->toBe('mock-id-123');
});
