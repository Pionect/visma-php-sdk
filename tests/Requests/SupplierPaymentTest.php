<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\SupplierPaymentUpdateDto;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentCreateSupplierPaymentRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetAllPaymentsRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentPutBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentReleasePaymentBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierPaymentGetBypaymentNumberRequest method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetBypaymentNumberRequest::class => MockResponse::make([
            'type' => 'String value',
            'documentType' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04+00:00',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'supplier' => null,
            'location' => null,
            'paymentMethod' => 'String value',
            'cashAccount' => 'String value',
            'currency' => null,
            'description' => 'String value',
            'paymentAmount' => 42,
            'financeCharges' => 42,
            'balance' => 42,
            'unappliedBalance' => 42,
            'appliedAmount' => 42,
            'released' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branch' => 'String value',
            'paymentLines' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierPaymentGetBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentGetBypaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->type->toBe('String value')
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(42)
        ->financeCharges->toBe(42)
        ->balance->toBe(42)
        ->unappliedBalance->toBe(42)
        ->appliedAmount->toBe(42)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPaymentPutBypaymentNumberRequest method in the SupplierPayment resource', function () {
    $bodyData = new SupplierPaymentUpdateDto(
        type: null,
        referenceNumber: 'String value',
        hold: true,
        applicationDate: '2025-11-22T10:40:04+00:00',
        applicationPeriod: 'String value',
        paymentRef: 'String value',
        supplier: 'String value',
        location: 'String value',
        paymentMethod: 'String value',
        cashAccount: 'String value',
        currency: 'String value',
        description: 'String value',
        paymentAmount: 42,
        branch: 'String value',
        paymentLines: [],
        overrideNumberSeries: true
    );

    Saloon::fake([
        SupplierPaymentPutBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPaymentPutBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentPutBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierPaymentGetByTypeBypaymentTypepaymentNumberRequest method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest::class => MockResponse::make([
            'type' => 'String value',
            'documentType' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04+00:00',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'supplier' => null,
            'location' => null,
            'paymentMethod' => 'String value',
            'cashAccount' => 'String value',
            'currency' => null,
            'description' => 'String value',
            'paymentAmount' => 42,
            'financeCharges' => 42,
            'balance' => 42,
            'unappliedBalance' => 42,
            'appliedAmount' => 42,
            'released' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branch' => 'String value',
            'paymentLines' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest(
        paymentType: 'test string',
        paymentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->type->toBe('String value')
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(42)
        ->financeCharges->toBe(42)
        ->balance->toBe(42)
        ->unappliedBalance->toBe(42)
        ->appliedAmount->toBe(42)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPaymentGetAllPaymentsRequest method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetAllPaymentsRequest::class => MockResponse::make([
            0 => [
                'type' => 'String value',
                'documentType' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04+00:00',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'supplier' => null,
                'location' => null,
                'paymentMethod' => 'String value',
                'cashAccount' => 'String value',
                'currency' => null,
                'description' => 'String value',
                'paymentAmount' => 42,
                'financeCharges' => 42,
                'balance' => 42,
                'unappliedBalance' => 42,
                'appliedAmount' => 42,
                'released' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branch' => 'String value',
                'paymentLines' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'type' => 'String value',
                'documentType' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04+00:00',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'supplier' => null,
                'location' => null,
                'paymentMethod' => 'String value',
                'cashAccount' => 'String value',
                'currency' => null,
                'description' => 'String value',
                'paymentAmount' => 42,
                'financeCharges' => 42,
                'balance' => 42,
                'unappliedBalance' => 42,
                'appliedAmount' => 42,
                'released' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branch' => 'String value',
                'paymentLines' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierPaymentGetAllPaymentsRequest(
        invoiceRefNbr: 'test string',
        paymentType: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        supplier: 'test string',
        branch: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        financialPeriod: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
        status: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentGetAllPaymentsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->type->toBe('String value')
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(42)
        ->financeCharges->toBe(42)
        ->balance->toBe(42)
        ->unappliedBalance->toBe(42)
        ->appliedAmount->toBe(42)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPaymentCreateSupplierPaymentRequest method in the SupplierPayment resource', function () {
    $bodyData = new SupplierPaymentUpdateDto(
        type: null,
        referenceNumber: 'String value',
        hold: true,
        applicationDate: '2025-11-22T10:40:04+00:00',
        applicationPeriod: 'String value',
        paymentRef: 'String value',
        supplier: 'String value',
        location: 'String value',
        paymentMethod: 'String value',
        cashAccount: 'String value',
        currency: 'String value',
        description: 'String value',
        paymentAmount: 42,
        branch: 'String value',
        paymentLines: [],
        overrideNumberSeries: true
    );

    Saloon::fake([
        SupplierPaymentCreateSupplierPaymentRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPaymentCreateSupplierPaymentRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentCreateSupplierPaymentRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierPaymentReleasePaymentBypaymentNumberRequest method in the SupplierPayment resource', function () {
    $bodyData = new SupplierPaymentUpdateDto(
        type: null,
        referenceNumber: 'String value',
        hold: true,
        applicationDate: '2025-11-22T10:40:04+00:00',
        applicationPeriod: 'String value',
        paymentRef: 'String value',
        supplier: 'String value',
        location: 'String value',
        paymentMethod: 'String value',
        cashAccount: 'String value',
        currency: 'String value',
        description: 'String value',
        paymentAmount: 42,
        branch: 'String value',
        paymentLines: [],
        overrideNumberSeries: true
    );

    Saloon::fake([
        SupplierPaymentReleasePaymentBypaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPaymentReleasePaymentBypaymentNumberRequest(
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentReleasePaymentBypaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest method in the SupplierPayment resource', function () {
    $bodyData = new SupplierPaymentUpdateDto(
        type: null,
        referenceNumber: 'String value',
        hold: true,
        applicationDate: '2025-11-22T10:40:04+00:00',
        applicationPeriod: 'String value',
        paymentRef: 'String value',
        supplier: 'String value',
        location: 'String value',
        paymentMethod: 'String value',
        cashAccount: 'String value',
        currency: 'String value',
        description: 'String value',
        paymentAmount: 42,
        branch: 'String value',
        paymentLines: [],
        overrideNumberSeries: true
    );

    Saloon::fake([
        SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest(
        paymentType: 'test string',
        paymentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest::class);

    expect($response->status())->toBe(201);
});
