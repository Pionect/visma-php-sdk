<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentCreatePaymentRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentGetAllPaymentsRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentGetBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentPutBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentReleasePaymentBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentVoidPaymentBypaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerPaymentGetBypaymentNumberRequest method in the CustomerPayment resource', function () {
    Saloon::fake([
        CustomerPaymentGetBypaymentNumberRequest::class => MockResponse::make([
            'type' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04+00:00',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'customer' => null,
            'location' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'currency' => 'String value',
            'paymentAmount' => 42,
            'invoiceText' => 'String value',
            'appliedToDocuments' => 42,
            'appliedToOrders' => 42,
            'availableBalance' => 42,
            'writeOffAmount' => 42,
            'financeCharges' => 42,
            'deductedCharges' => 42,
            'branch' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'paymentLines' => [],
            'ordersToApply' => [],
            'financialDetails' => null,
            'paymentAmountInCurrency' => 42,
            'availableBalanceInCurrency' => 42,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerPaymentGetBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentGetBypaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->type->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->currency->toBe('String value')
        ->paymentAmount->toBe(42)
        ->invoiceText->toBe('String value')
        ->appliedToDocuments->toBe(42)
        ->appliedToOrders->toBe(42)
        ->availableBalance->toBe(42)
        ->writeOffAmount->toBe(42)
        ->financeCharges->toBe(42)
        ->deductedCharges->toBe(42)
        ->branch->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialDetails->toBeNull()
        ->paymentAmountInCurrency->toBe(42)
        ->availableBalanceInCurrency->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerPaymentPutBypaymentNumberRequest method in the CustomerPayment resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerPaymentPutBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentPutBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentPutBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerPaymentGetAllPaymentsRequest method in the CustomerPayment resource', function () {
    Saloon::fake([
        CustomerPaymentGetAllPaymentsRequest::class => MockResponse::make([
            0 => [
                'type' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04+00:00',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'customer' => null,
                'location' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'currency' => 'String value',
                'paymentAmount' => 42,
                'invoiceText' => 'String value',
                'appliedToDocuments' => 42,
                'appliedToOrders' => 42,
                'availableBalance' => 42,
                'writeOffAmount' => 42,
                'financeCharges' => 42,
                'deductedCharges' => 42,
                'branch' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => null,
                'paymentAmountInCurrency' => 42,
                'availableBalanceInCurrency' => 42,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'type' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04+00:00',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'customer' => null,
                'location' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'currency' => 'String value',
                'paymentAmount' => 42,
                'invoiceText' => 'String value',
                'appliedToDocuments' => 42,
                'appliedToOrders' => 42,
                'availableBalance' => 42,
                'writeOffAmount' => 42,
                'financeCharges' => 42,
                'deductedCharges' => 42,
                'branch' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => null,
                'paymentAmountInCurrency' => 42,
                'availableBalanceInCurrency' => 42,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CustomerPaymentGetAllPaymentsRequest(
        paymentNbr: 'test string',
        paymentType: 'test string',
        customer: 'test string',
        greaterThanValue: 'test string',
        invoiceRefNbr: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        branch: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        financialPeriod: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentGetAllPaymentsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->type->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->currency->toBe('String value')
        ->paymentAmount->toBe(42)
        ->invoiceText->toBe('String value')
        ->appliedToDocuments->toBe(42)
        ->appliedToOrders->toBe(42)
        ->availableBalance->toBe(42)
        ->writeOffAmount->toBe(42)
        ->financeCharges->toBe(42)
        ->deductedCharges->toBe(42)
        ->branch->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialDetails->toBeNull()
        ->paymentAmountInCurrency->toBe(42)
        ->availableBalanceInCurrency->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerPaymentCreatePaymentRequest method in the CustomerPayment resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerPaymentCreatePaymentRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentCreatePaymentRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentCreatePaymentRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerPaymentReleasePaymentBypaymentNumberRequest method in the CustomerPayment resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerPaymentReleasePaymentBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentReleasePaymentBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentReleasePaymentBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerPaymentVoidPaymentBypaymentNumberRequest method in the CustomerPayment resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        CustomerPaymentVoidPaymentBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPaymentVoidPaymentBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentVoidPaymentBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});
