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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the paymentGetBypaymentNumber method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetBypaymentNumberRequest::class => MockResponse::make([
            'refNbr' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'applicationDate' => '2025-11-22T10:40:04.065Z',
            'applicationPeriod' => 'Mock value',
            'paymentRef' => 'Mock value',
            'customer' => 'Mock value',
            'location' => 'Mock value',
            'paymentMethod' => 'Mock value',
            'cashAccount' => 'Mock value',
            'currency' => 'Mock value',
            'paymentAmount' => 3.14,
            'invoiceText' => 'Mock value',
            'appliedToDocuments' => 3.14,
            'appliedToOrders' => 3.14,
            'availableBalance' => 3.14,
            'writeOffAmount' => 3.14,
            'financeCharges' => 3.14,
            'deductedCharges' => 3.14,
            'branch' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'paymentLines' => [],
            'ordersToApply' => [],
            'financialDetails' => 'Mock value',
            'paymentAmountInCurrency' => 3.14,
            'availableBalanceInCurrency' => 3.14,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->location->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->paymentAmount->toBe(3.14)
        ->invoiceText->toBe('Mock value')
        ->appliedToDocuments->toBe(3.14)
        ->appliedToOrders->toBe(3.14)
        ->availableBalance->toBe(3.14)
        ->writeOffAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->deductedCharges->toBe(3.14)
        ->branch->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialDetails->toBe('Mock value')
        ->paymentAmountInCurrency->toBe(3.14)
        ->availableBalanceInCurrency->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the paymentGetAllPaymentsCollection method in the Payment resource', function () {
    Saloon::fake([
        PaymentGetAllPaymentsCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'Mock value',
                'paymentRef' => 'Mock value',
                'customer' => 'Mock value',
                'location' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'currency' => 'Mock value',
                'paymentAmount' => 3.14,
                'invoiceText' => 'Mock value',
                'appliedToDocuments' => 3.14,
                'appliedToOrders' => 3.14,
                'availableBalance' => 3.14,
                'writeOffAmount' => 3.14,
                'financeCharges' => 3.14,
                'deductedCharges' => 3.14,
                'branch' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => 'Mock value',
                'paymentAmountInCurrency' => 3.14,
                'availableBalanceInCurrency' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'refNbr' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'applicationDate' => '2025-11-22T10:40:04.065Z',
                'applicationPeriod' => 'Mock value',
                'paymentRef' => 'Mock value',
                'customer' => 'Mock value',
                'location' => 'Mock value',
                'paymentMethod' => 'Mock value',
                'cashAccount' => 'Mock value',
                'currency' => 'Mock value',
                'paymentAmount' => 3.14,
                'invoiceText' => 'Mock value',
                'appliedToDocuments' => 3.14,
                'appliedToOrders' => 3.14,
                'availableBalance' => 3.14,
                'writeOffAmount' => 3.14,
                'financeCharges' => 3.14,
                'deductedCharges' => 3.14,
                'branch' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'paymentLines' => [],
                'ordersToApply' => [],
                'financialDetails' => 'Mock value',
                'paymentAmountInCurrency' => 3.14,
                'availableBalanceInCurrency' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new PaymentGetAllPaymentsCollectionRequest(paymentNbr: 'test string', paymentType: 'test string', customer: 'test string', greaterThanValue: 'test string', invoiceRefNbr: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', branch: 'test string', docDate: 'test string', docDateCondition: 'test string', financialPeriod: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PaymentGetAllPaymentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->applicationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->applicationPeriod->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->location->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->paymentAmount->toBe(3.14)
        ->invoiceText->toBe('Mock value')
        ->appliedToDocuments->toBe(3.14)
        ->appliedToOrders->toBe(3.14)
        ->availableBalance->toBe(3.14)
        ->writeOffAmount->toBe(3.14)
        ->financeCharges->toBe(3.14)
        ->deductedCharges->toBe(3.14)
        ->branch->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->financialDetails->toBe('Mock value')
        ->paymentAmountInCurrency->toBe(3.14)
        ->availableBalanceInCurrency->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
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
        'refNbr' => 'test value',
        'voidPayment' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new PaymentVoidPaymentBypaymentNumberRequest(paymentNumberId: 'payment_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PaymentVoidPaymentBypaymentNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('payments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->refNbr->toBe('test value')
            ->voidPayment->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});
