<?php

use Pionect\VismaSdk\Dto\PaymentUpdateDto;
use Pionect\VismaSdk\Requests\Payment\PaymentCreatePaymentRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentGetAllPaymentsRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentGetBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentPutBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentReleasePaymentBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentVoidPaymentBypaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the paymentGetBypaymentNumberRequest method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetBypaymentNumberRequest::class => MockResponse::make([
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

    $request = new PaymentGetBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentGetBypaymentNumberRequest::class);

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

it('calls the paymentPutBypaymentNumberRequest method in the Payment resource', function () {
    $bodyData = new PaymentUpdateDto(
        referenceNumber: null,
        type: null,
        hold: null,
        applicationDate: null,
        applicationPeriod: null,
        paymentRef: null,
        customer: null,
        location: null,
        paymentMethod: null,
        cashAccount: null,
        currency: null,
        paymentAmount: null,
        invoiceText: null,
        branch: 'String value',
        overrideNumberSeries: true,
        ordersToApply: [],
        financeCharges: [],
        paymentLines: []
    );

    Saloon::fake([
        PaymentPutBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PaymentPutBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentPutBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the paymentGetAllPaymentsRequest method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetAllPaymentsRequest::class => MockResponse::make([
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

    $request = new PaymentGetAllPaymentsRequest(
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

    Saloon::assertSent(PaymentGetAllPaymentsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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

it('calls the paymentCreatePaymentRequest method in the Payment resource', function () {
    $bodyData = new PaymentUpdateDto(
        referenceNumber: null,
        type: null,
        hold: null,
        applicationDate: null,
        applicationPeriod: null,
        paymentRef: null,
        customer: null,
        location: null,
        paymentMethod: null,
        cashAccount: null,
        currency: null,
        paymentAmount: null,
        invoiceText: null,
        branch: 'String value',
        overrideNumberSeries: true,
        ordersToApply: [],
        financeCharges: [],
        paymentLines: []
    );

    Saloon::fake([
        PaymentCreatePaymentRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PaymentCreatePaymentRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentCreatePaymentRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the paymentReleasePaymentBypaymentNumberRequest method in the Payment resource', function () {
    $bodyData = new PaymentUpdateDto(
        referenceNumber: null,
        type: null,
        hold: null,
        applicationDate: null,
        applicationPeriod: null,
        paymentRef: null,
        customer: null,
        location: null,
        paymentMethod: null,
        cashAccount: null,
        currency: null,
        paymentAmount: null,
        invoiceText: null,
        branch: 'String value',
        overrideNumberSeries: true,
        ordersToApply: [],
        financeCharges: [],
        paymentLines: []
    );

    Saloon::fake([
        PaymentReleasePaymentBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PaymentReleasePaymentBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentReleasePaymentBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the paymentVoidPaymentBypaymentNumberRequest method in the Payment resource', function () {
    $bodyData = new PaymentUpdateDto(
        referenceNumber: null,
        type: null,
        hold: null,
        applicationDate: null,
        applicationPeriod: null,
        paymentRef: null,
        customer: null,
        location: null,
        paymentMethod: null,
        cashAccount: null,
        currency: null,
        paymentAmount: null,
        invoiceText: null,
        branch: 'String value',
        overrideNumberSeries: true,
        ordersToApply: [],
        financeCharges: [],
        paymentLines: []
    );

    Saloon::fake([
        PaymentVoidPaymentBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PaymentVoidPaymentBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentVoidPaymentBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});
