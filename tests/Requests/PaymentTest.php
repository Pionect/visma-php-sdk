<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Payment\PaymentGetAllPaymentsCollectionRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentGetBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentReleasePaymentBypaymentNumberRequest;
use Pionect\VismaSdk\Requests\Payment\PaymentVoidPaymentBypaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the paymentGetBypaymentNumber method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetBypaymentNumberRequest::class => MockResponse::make([
            'type' => 'String value',
            'refNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04.065Z',
            'applicationPeriod' => 'String value',
            'paymentRef' => 'String value',
            'customer' => null,
            'location' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'currency' => 'String value',
            'paymentAmount' => 3.14,
            'invoiceText' => 'String value',
            'appliedToDocuments' => 3.14,
            'appliedToOrders' => 3.14,
            'availableBalance' => 3.14,
            'writeOffAmount' => 3.14,
            'financeCharges' => 3.14,
            'deductedCharges' => 3.14,
            'branch' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'paymentLines' => [],
            'ordersToApply' => [],
            'financialDetails' => null,
            'paymentAmountInCurrency' => 3.14,
            'availableBalanceInCurrency' => 3.14,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new PaymentGetBypaymentNumberRequest(
        paymentNumberId: 'test string',
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
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->currency->toBe('String value')
        ->paymentAmount->toBe(3.14)
        ->invoiceText->toBe('String value')
        ->appliedToDocuments->toBe(3.14)
        ->appliedToOrders->toBe(3.14)
        ->availableBalance->toBe(3.14)
        ->writeOffAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->deductedCharges->toBe(3.14)
        ->branch->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialDetails->toBeNull()
        ->paymentAmountInCurrency->toBe(3.14)
        ->availableBalanceInCurrency->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the paymentGetAllPaymentsCollection method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetAllPaymentsCollectionRequest::class => MockResponse::make([
            0 => [
                'type' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'customer' => null,
                'location' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'currency' => 'String value',
                'paymentAmount' => 3.14,
                'invoiceText' => 'String value',
                'appliedToDocuments' => 3.14,
                'appliedToOrders' => 3.14,
                'availableBalance' => 3.14,
                'writeOffAmount' => 3.14,
                'financeCharges' => 3.14,
                'deductedCharges' => 3.14,
                'branch' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => null,
                'paymentAmountInCurrency' => 3.14,
                'availableBalanceInCurrency' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'type' => 'String value',
                'refNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'String value',
                'paymentRef' => 'String value',
                'customer' => null,
                'location' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'currency' => 'String value',
                'paymentAmount' => 3.14,
                'invoiceText' => 'String value',
                'appliedToDocuments' => 3.14,
                'appliedToOrders' => 3.14,
                'availableBalance' => 3.14,
                'writeOffAmount' => 3.14,
                'financeCharges' => 3.14,
                'deductedCharges' => 3.14,
                'branch' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => null,
                'paymentAmountInCurrency' => 3.14,
                'availableBalanceInCurrency' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new PaymentGetAllPaymentsCollectionRequest(paymentNbr: 'test string', paymentType: 'test string', customer: 'test string', greaterThanValue: 'test string', invoiceRefNbr: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', branch: 'test string', docDate: 'test string', docDateCondition: 'test string', financialPeriod: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PaymentGetAllPaymentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->type->toBe('String value')
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('String value')
        ->paymentRef->toBe('String value')
        ->customer->toBeNull()
        ->location->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->currency->toBe('String value')
        ->paymentAmount->toBe(3.14)
        ->invoiceText->toBe('String value')
        ->appliedToDocuments->toBe(3.14)
        ->appliedToOrders->toBe(3.14)
        ->availableBalance->toBe(3.14)
        ->writeOffAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->deductedCharges->toBe(3.14)
        ->branch->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialDetails->toBeNull()
        ->paymentAmountInCurrency->toBe(3.14)
        ->availableBalanceInCurrency->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the paymentReleasePaymentBypaymentNumber method in the Payment resource', function () {
    $mockClient = Saloon::fake([
        PaymentReleasePaymentBypaymentNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleasePaymentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new PaymentReleasePaymentBypaymentNumberRequest(paymentNumberId: 'payment_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentReleasePaymentBypaymentNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('payments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the paymentVoidPaymentBypaymentNumber method in the Payment resource', function () {
    $mockClient = Saloon::fake([
        PaymentVoidPaymentBypaymentNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\VoidPaymentActionResultDto::factory()->state([
        'type' => 'test value',
        'refNbr' => 'test value',
        'voidPayment' => 'test value',
        'actionId' => 'action_id-123',
    ])->make();

    $request = new PaymentVoidPaymentBypaymentNumberRequest(paymentNumberId: 'payment_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentVoidPaymentBypaymentNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('payments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->type->toBe('test value')
            ->refNbr->toBe('test value')
            ->voidPayment->toBe('test value')
            ->actionId->toBe('action_id-123')
            );

        return true;
    });
});
