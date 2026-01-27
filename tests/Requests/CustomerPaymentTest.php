<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentGetAllPaymentsCollectionRequest;
use Pionect\VismaSdk\Requests\CustomerPayment\CustomerPaymentGetBypaymentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerPaymentGetBypaymentNumber method in the CustomerPayment resource', function () {
    Saloon::fake([
        CustomerPaymentGetBypaymentNumberRequest::class => MockResponse::make([
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
        ], 200),
    ]);

    $request = new CustomerPaymentGetBypaymentNumberRequest(
        paymentNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPaymentGetBypaymentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
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
        ->errorInfo->toBe('String value');
});

it('calls the customerPaymentGetAllPaymentsCollection method in the CustomerPayment resource', function () {
    Saloon::fake([
        CustomerPaymentGetAllPaymentsCollectionRequest::class => MockResponse::make([
            0 => [
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
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
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
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerPaymentGetAllPaymentsCollectionRequest(paymentNbr: 'test string', paymentType: 'test string', customer: 'test string', greaterThanValue: 'test string', invoiceRefNbr: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', branch: 'test string', docDate: 'test string', docDateCondition: 'test string', financialPeriod: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerPaymentGetAllPaymentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
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
        ->errorInfo->toBe('String value');
});
