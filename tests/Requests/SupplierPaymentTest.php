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
            'documentType' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04.065Z',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'supplier' => null,
            'location' => null,
            'paymentMethod' => 'String value',
            'cashAccount' => 'String value',
            'currency' => null,
            'description' => 'String value',
            'paymentAmount' => 3.14,
            'financeCharges' => 3.14,
            'balance' => 3.14,
            'unappliedBalance' => 3.14,
            'appliedAmount' => 3.14,
            'released' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branch' => 'String value',
            'paymentLines' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
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
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the supplierPaymentGetByTypeBypaymentTypepaymentNumber method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetByTypeBypaymentTypepaymentNumberRequest::class => MockResponse::make([
            'documentType' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04.065Z',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'supplier' => null,
            'location' => null,
            'paymentMethod' => 'String value',
            'cashAccount' => 'String value',
            'currency' => null,
            'description' => 'String value',
            'paymentAmount' => 3.14,
            'financeCharges' => 3.14,
            'balance' => 3.14,
            'unappliedBalance' => 3.14,
            'appliedAmount' => 3.14,
            'released' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branch' => 'String value',
            'paymentLines' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
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
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the supplierPaymentGetAllPaymentsCollection method in the SupplierPayment resource', function () {
    Saloon::fake([
        SupplierPaymentGetAllPaymentsCollectionRequest::class => MockResponse::make([
            0 => [
                'documentType' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'supplier' => null,
                'location' => null,
                'paymentMethod' => 'String value',
                'cashAccount' => 'String value',
                'currency' => null,
                'description' => 'String value',
                'paymentAmount' => 3.14,
                'financeCharges' => 3.14,
                'balance' => 3.14,
                'unappliedBalance' => 3.14,
                'appliedAmount' => 3.14,
                'released' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branch' => 'String value',
                'paymentLines' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'documentType' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'supplier' => null,
                'location' => null,
                'paymentMethod' => 'String value',
                'cashAccount' => 'String value',
                'currency' => null,
                'description' => 'String value',
                'paymentAmount' => 3.14,
                'financeCharges' => 3.14,
                'balance' => 3.14,
                'unappliedBalance' => 3.14,
                'appliedAmount' => 3.14,
                'released' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branch' => 'String value',
                'paymentLines' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SupplierPaymentGetAllPaymentsCollectionRequest(invoiceRefNbr: 'test string', paymentType: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', branch: 'test string', docDate: 'test string', docDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', financialPeriod: 'test string', balance: null, balanceCondition: 'test string', status: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierPaymentGetAllPaymentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->documentType->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBe('String value')
        ->cashAccount->toBe('String value')
        ->currency->toBeNull()
        ->description->toBe('String value')
        ->paymentAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->balance->toBe(3.14)
        ->unappliedBalance->toBe(3.14)
        ->appliedAmount->toBe(3.14)
        ->released->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
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
