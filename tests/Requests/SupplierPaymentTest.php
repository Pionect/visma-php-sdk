<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetAllPaymentsCollectionRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest;
use Pionect\VismaSdk\Requests\SupplierPayment\SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierPaymentGetBypaymentNumber method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetBypaymentNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'supplierPayments',
                'id' => 'mock-id-123',
                'attributes' => [
                    'documentType' => 'Mock value',
                    'refNbr' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'applicationDate' => '2025-11-22T10:40:04.065Z',
                    'applicationPeriod' => 'Mock value',
                    'paymentRef' => 'Mock value',
                    'supplier' => 'Mock value',
                    'location' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'currency' => 'Mock value',
                    'description' => 'Mock value',
                    'paymentAmount' => 3.14,
                    'financeCharges' => 3.14,
                    'balance' => 3.14,
                    'unappliedBalance' => 3.14,
                    'appliedAmount' => 3.14,
                    'released' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'branch' => 'Mock value',
                    'paymentLines' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new SupplierPaymentGetBypaymentNumberRequest(
        paymentNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentGetBypaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->documentType->toBe('Mock value')
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierPaymentGetByTypeBypaymentTypepaymentNumber method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'supplierPayments',
                'id' => 'mock-id-123',
                'attributes' => [
                    'documentType' => 'Mock value',
                    'refNbr' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'applicationDate' => '2025-11-22T10:40:04.065Z',
                    'applicationPeriod' => 'Mock value',
                    'paymentRef' => 'Mock value',
                    'supplier' => 'Mock value',
                    'location' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'currency' => 'Mock value',
                    'description' => 'Mock value',
                    'paymentAmount' => 3.14,
                    'financeCharges' => 3.14,
                    'balance' => 3.14,
                    'unappliedBalance' => 3.14,
                    'appliedAmount' => 3.14,
                    'released' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'branch' => 'Mock value',
                    'paymentLines' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest(
        paymentTypeId: 'test string',
        paymentNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->documentType->toBe('Mock value')
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierPaymentGetAllPaymentsCollection method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetAllPaymentsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'supplierPayments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'documentType' => 'Mock value',
                        'refNbr' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'applicationDate' => '2025-11-22T10:40:04.065Z',
                        'applicationPeriod' => 'Mock value',
                        'paymentRef' => 'Mock value',
                        'supplier' => 'Mock value',
                        'location' => 'Mock value',
                        'paymentMethod' => 'Mock value',
                        'cashAccount' => 'Mock value',
                        'currency' => 'Mock value',
                        'description' => 'Mock value',
                        'paymentAmount' => 3.14,
                        'financeCharges' => 3.14,
                        'balance' => 3.14,
                        'unappliedBalance' => 3.14,
                        'appliedAmount' => 3.14,
                        'released' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
                        'paymentLines' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'supplierPayments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'documentType' => 'Mock value',
                        'refNbr' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'applicationDate' => '2025-11-22T10:40:04.065Z',
                        'applicationPeriod' => 'Mock value',
                        'paymentRef' => 'Mock value',
                        'supplier' => 'Mock value',
                        'location' => 'Mock value',
                        'paymentMethod' => 'Mock value',
                        'cashAccount' => 'Mock value',
                        'currency' => 'Mock value',
                        'description' => 'Mock value',
                        'paymentAmount' => 3.14,
                        'financeCharges' => 3.14,
                        'balance' => 3.14,
                        'unappliedBalance' => 3.14,
                        'appliedAmount' => 3.14,
                        'released' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
                        'paymentLines' => [],
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new SupplierPaymentGetAllPaymentsCollectionRequest(invoiceRefNbr: 'test string', paymentType: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', branch: 'test string', docDate: 'test string', docDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', financialPeriod: 'test string', balance: null, balanceCondition: 'test string', status: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierPaymentGetAllPaymentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->documentType->toBe('Mock value')
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierPaymentWriteoffPaymentBypaymentTypepaymentNumber method in the SupplierPayment resource', function () {
    $mockClient = Saloon::fake([
        SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\WriteoffPaymentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest(paymentTypeId: 'payment_type_id-123', paymentNumberId: 'payment_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPaymentWriteoffPaymentBypaymentTypepaymentNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('supplierPayments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
