<?php

use Pionect\VismaSdk\Enums\DetailsPropertyTypeEnum;
use Pionect\VismaSdk\Enums\DetailsStatusEnum;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetAllRequest;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetByFixedAssetIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetGetByFixedAssetIdRequest method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetByFixedAssetIdRequest::class => MockResponse::make([
            'assetId' => 'mock-id-123',
            'recordType' => 'String value',
            'parentAssetId' => 'mock-id-123',
            'description' => 'String value',
            'classId' => 'mock-id-123',
            'isTangible' => true,
            'quantity' => 42,
            'depreciable' => true,
            'usefulLife' => 42,
            'accounts' => [
                'accountId' => 'mock-id-123',
                'subAccountId' => 'mock-id-123',
                'accrualAccountId' => 'mock-id-123',
                'accrualSubAccountId' => 'mock-id-123',
                'accumulatedDepreciationAccountId' => 'mock-id-123',
                'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                'depreciatedExpenseAccountId' => 'mock-id-123',
                'depreciatedExpenseSubAccountId' => 'mock-id-123',
                'disposalAccountId' => 'mock-id-123',
                'disposalSubAccountId' => 'mock-id-123',
                'gainAccountId' => 'mock-id-123',
                'gainSubAccountId' => 'mock-id-123',
                'lossAccountId' => 'mock-id-123',
                'lossSubAccountId' => 'mock-id-123',
                'debitAccountId' => 'mock-id-123',
                'debitSubAccountId' => 'mock-id-123',
                'creditAccountId' => 'mock-id-123',
                'creditSubAccountId' => 'mock-id-123',
            ],
            'details' => [
                'propertyType' => 'Property',
                'status' => 'Active',
                'receiptDate' => '2025-11-22T10:40:04+00:00',
                'depreciateFromDate' => '2025-11-22T10:40:04+00:00',
                'acquisitionCost' => 42,
                'salvageAmount' => 42,
                'disposalDate' => '2025-11-22T10:40:04+00:00',
                'disposalPeriodId' => 'mock-id-123',
                'disposalMethodId' => 42,
                'saleAmount' => 42,
                'billNumber' => 'String value',
                'serialNumber' => 'String value',
                'disposalMethod' => [
                    'description' => 'String value',
                ],
                'leaseAndRentInfo' => [
                    'lessorId' => 'mock-id-123',
                    'lessorName' => 'String value',
                    'leaseRentTerm' => 42,
                    'leaseNumber' => 'String value',
                    'rentAmount' => 42,
                    'retailCost' => 42,
                    'manufacturingYear' => 'String value',
                ],
            ],
            'bookBalance' => [
                'acquisitionCost' => 42,
                'depreciationMethodId' => 'mock-id-123',
                'depreciationFromDate' => '2025-11-22T10:40:04+00:00',
                'depreciationFromPeriod' => 'String value',
                'depreciationToPeriod' => 'String value',
                'lastDepreciationPeriod' => 'String value',
                'salvageAmount' => 42,
                'usefulLife' => 42,
                'book' => [
                    'bookId' => 'mock-id-123',
                    'description' => 'String value',
                ],
            ],
            'location' => [
                'departmentId' => 'mock-id-123',
                'branchId' => 'mock-id-123',
            ],
            'propertyTax' => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'String value',
            ],
            'type' => [
                'assetTypeId' => 'mock-id-123',
                'description' => 'String value',
            ],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new FixedAssetGetByFixedAssetIdRequest(
        fixedAssetId: 'test string',
        expandAccounts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetGetByFixedAssetIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->quantity->toBe(42)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->accounts->accountId->toBe('mock-id-123')
        ->accounts->subAccountId->toBe('mock-id-123')
        ->accounts->accrualAccountId->toBe('mock-id-123')
        ->accounts->accrualSubAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationSubAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseSubAccountId->toBe('mock-id-123')
        ->accounts->disposalAccountId->toBe('mock-id-123')
        ->accounts->disposalSubAccountId->toBe('mock-id-123')
        ->accounts->gainAccountId->toBe('mock-id-123')
        ->accounts->gainSubAccountId->toBe('mock-id-123')
        ->accounts->lossAccountId->toBe('mock-id-123')
        ->accounts->lossSubAccountId->toBe('mock-id-123')
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
        ->details->propertyType->toEqual(DetailsPropertyTypeEnum::PROPERTY)
        ->details->status->toEqual(DetailsStatusEnum::ACTIVE)
        ->details->receiptDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->depreciateFromDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->acquisitionCost->toBe(42)
        ->details->salvageAmount->toBe(42)
        ->details->disposalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->disposalPeriodId->toBe('mock-id-123')
        ->details->disposalMethodId->toBe(42)
        ->details->saleAmount->toBe(42)
        ->details->billNumber->toBe('String value')
        ->details->serialNumber->toBe('String value')
        ->details->disposalMethod->description->toBe('String value')
        ->details->leaseAndRentInfo->lessorId->toBe('mock-id-123')
        ->details->leaseAndRentInfo->lessorName->toBe('String value')
        ->details->leaseAndRentInfo->leaseRentTerm->toBe(42)
        ->details->leaseAndRentInfo->leaseNumber->toBe('String value')
        ->details->leaseAndRentInfo->rentAmount->toBe(42)
        ->details->leaseAndRentInfo->retailCost->toBe(42)
        ->details->leaseAndRentInfo->manufacturingYear->toBe('String value')
        ->bookBalance->acquisitionCost->toBe(42)
        ->bookBalance->depreciationMethodId->toBe('mock-id-123')
        ->bookBalance->depreciationFromDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->bookBalance->depreciationFromPeriod->toBe('String value')
        ->bookBalance->depreciationToPeriod->toBe('String value')
        ->bookBalance->lastDepreciationPeriod->toBe('String value')
        ->bookBalance->salvageAmount->toBe(42)
        ->bookBalance->usefulLife->toBe(42)
        ->bookBalance->book->bookId->toBe('mock-id-123')
        ->bookBalance->book->description->toBe('String value')
        ->location->departmentId->toBe('mock-id-123')
        ->location->branchId->toBe('mock-id-123')
        ->propertyTax->propertyTaxId->toBe('mock-id-123')
        ->propertyTax->description->toBe('String value')
        ->type->assetTypeId->toBe('mock-id-123')
        ->type->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetGetAllRequest method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetAllRequest::class => MockResponse::make([
            0 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 42,
                'depreciable' => true,
                'usefulLife' => 42,
                'accounts' => [
                    'accountId' => 'mock-id-123',
                    'subAccountId' => 'mock-id-123',
                    'accrualAccountId' => 'mock-id-123',
                    'accrualSubAccountId' => 'mock-id-123',
                    'accumulatedDepreciationAccountId' => 'mock-id-123',
                    'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                    'depreciatedExpenseAccountId' => 'mock-id-123',
                    'depreciatedExpenseSubAccountId' => 'mock-id-123',
                    'disposalAccountId' => 'mock-id-123',
                    'disposalSubAccountId' => 'mock-id-123',
                    'gainAccountId' => 'mock-id-123',
                    'gainSubAccountId' => 'mock-id-123',
                    'lossAccountId' => 'mock-id-123',
                    'lossSubAccountId' => 'mock-id-123',
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
                'details' => [
                    'propertyType' => 'Property',
                    'status' => 'Active',
                    'receiptDate' => '2025-11-22T10:40:04+00:00',
                    'depreciateFromDate' => '2025-11-22T10:40:04+00:00',
                    'acquisitionCost' => 42,
                    'salvageAmount' => 42,
                    'disposalDate' => '2025-11-22T10:40:04+00:00',
                    'disposalPeriodId' => 'mock-id-123',
                    'disposalMethodId' => 42,
                    'saleAmount' => 42,
                    'billNumber' => 'String value',
                    'serialNumber' => 'String value',
                    'disposalMethod' => [
                        'description' => 'String value',
                    ],
                    'leaseAndRentInfo' => [
                        'lessorId' => 'mock-id-123',
                        'lessorName' => 'String value',
                        'leaseRentTerm' => 42,
                        'leaseNumber' => 'String value',
                        'rentAmount' => 42,
                        'retailCost' => 42,
                        'manufacturingYear' => 'String value',
                    ],
                ],
                'bookBalance' => [
                    'acquisitionCost' => 42,
                    'depreciationMethodId' => 'mock-id-123',
                    'depreciationFromDate' => '2025-11-22T10:40:04+00:00',
                    'depreciationFromPeriod' => 'String value',
                    'depreciationToPeriod' => 'String value',
                    'lastDepreciationPeriod' => 'String value',
                    'salvageAmount' => 42,
                    'usefulLife' => 42,
                    'book' => [
                        'bookId' => 'mock-id-123',
                        'description' => 'String value',
                    ],
                ],
                'location' => [
                    'departmentId' => 'mock-id-123',
                    'branchId' => 'mock-id-123',
                ],
                'propertyTax' => [
                    'propertyTaxId' => 'mock-id-123',
                    'description' => 'String value',
                ],
                'type' => [
                    'assetTypeId' => 'mock-id-123',
                    'description' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 42,
                'depreciable' => true,
                'usefulLife' => 42,
                'accounts' => [
                    'accountId' => 'mock-id-123',
                    'subAccountId' => 'mock-id-123',
                    'accrualAccountId' => 'mock-id-123',
                    'accrualSubAccountId' => 'mock-id-123',
                    'accumulatedDepreciationAccountId' => 'mock-id-123',
                    'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                    'depreciatedExpenseAccountId' => 'mock-id-123',
                    'depreciatedExpenseSubAccountId' => 'mock-id-123',
                    'disposalAccountId' => 'mock-id-123',
                    'disposalSubAccountId' => 'mock-id-123',
                    'gainAccountId' => 'mock-id-123',
                    'gainSubAccountId' => 'mock-id-123',
                    'lossAccountId' => 'mock-id-123',
                    'lossSubAccountId' => 'mock-id-123',
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
                'details' => [
                    'propertyType' => 'Property',
                    'status' => 'Active',
                    'receiptDate' => '2025-11-22T10:40:04+00:00',
                    'depreciateFromDate' => '2025-11-22T10:40:04+00:00',
                    'acquisitionCost' => 42,
                    'salvageAmount' => 42,
                    'disposalDate' => '2025-11-22T10:40:04+00:00',
                    'disposalPeriodId' => 'mock-id-123',
                    'disposalMethodId' => 42,
                    'saleAmount' => 42,
                    'billNumber' => 'String value',
                    'serialNumber' => 'String value',
                    'disposalMethod' => [
                        'description' => 'String value',
                    ],
                    'leaseAndRentInfo' => [
                        'lessorId' => 'mock-id-123',
                        'lessorName' => 'String value',
                        'leaseRentTerm' => 42,
                        'leaseNumber' => 'String value',
                        'rentAmount' => 42,
                        'retailCost' => 42,
                        'manufacturingYear' => 'String value',
                    ],
                ],
                'bookBalance' => [
                    'acquisitionCost' => 42,
                    'depreciationMethodId' => 'mock-id-123',
                    'depreciationFromDate' => '2025-11-22T10:40:04+00:00',
                    'depreciationFromPeriod' => 'String value',
                    'depreciationToPeriod' => 'String value',
                    'lastDepreciationPeriod' => 'String value',
                    'salvageAmount' => 42,
                    'usefulLife' => 42,
                    'book' => [
                        'bookId' => 'mock-id-123',
                        'description' => 'String value',
                    ],
                ],
                'location' => [
                    'departmentId' => 'mock-id-123',
                    'branchId' => 'mock-id-123',
                ],
                'propertyTax' => [
                    'propertyTaxId' => 'mock-id-123',
                    'description' => 'String value',
                ],
                'type' => [
                    'assetTypeId' => 'mock-id-123',
                    'description' => 'String value',
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FixedAssetGetAllRequest(
        assetId: 'test string',
        classId: 'test string',
        status: 'test string',
        fromDate: 'test string',
        toDate: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandAccounts: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->quantity->toBe(42)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->accounts->accountId->toBe('mock-id-123')
        ->accounts->subAccountId->toBe('mock-id-123')
        ->accounts->accrualAccountId->toBe('mock-id-123')
        ->accounts->accrualSubAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationSubAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseSubAccountId->toBe('mock-id-123')
        ->accounts->disposalAccountId->toBe('mock-id-123')
        ->accounts->disposalSubAccountId->toBe('mock-id-123')
        ->accounts->gainAccountId->toBe('mock-id-123')
        ->accounts->gainSubAccountId->toBe('mock-id-123')
        ->accounts->lossAccountId->toBe('mock-id-123')
        ->accounts->lossSubAccountId->toBe('mock-id-123')
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
        ->details->propertyType->toEqual(DetailsPropertyTypeEnum::PROPERTY)
        ->details->status->toEqual(DetailsStatusEnum::ACTIVE)
        ->details->receiptDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->depreciateFromDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->acquisitionCost->toBe(42)
        ->details->salvageAmount->toBe(42)
        ->details->disposalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->details->disposalPeriodId->toBe('mock-id-123')
        ->details->disposalMethodId->toBe(42)
        ->details->saleAmount->toBe(42)
        ->details->billNumber->toBe('String value')
        ->details->serialNumber->toBe('String value')
        ->details->disposalMethod->description->toBe('String value')
        ->details->leaseAndRentInfo->lessorId->toBe('mock-id-123')
        ->details->leaseAndRentInfo->lessorName->toBe('String value')
        ->details->leaseAndRentInfo->leaseRentTerm->toBe(42)
        ->details->leaseAndRentInfo->leaseNumber->toBe('String value')
        ->details->leaseAndRentInfo->rentAmount->toBe(42)
        ->details->leaseAndRentInfo->retailCost->toBe(42)
        ->details->leaseAndRentInfo->manufacturingYear->toBe('String value')
        ->bookBalance->acquisitionCost->toBe(42)
        ->bookBalance->depreciationMethodId->toBe('mock-id-123')
        ->bookBalance->depreciationFromDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->bookBalance->depreciationFromPeriod->toBe('String value')
        ->bookBalance->depreciationToPeriod->toBe('String value')
        ->bookBalance->lastDepreciationPeriod->toBe('String value')
        ->bookBalance->salvageAmount->toBe(42)
        ->bookBalance->usefulLife->toBe(42)
        ->bookBalance->book->bookId->toBe('mock-id-123')
        ->bookBalance->book->description->toBe('String value')
        ->location->departmentId->toBe('mock-id-123')
        ->location->branchId->toBe('mock-id-123')
        ->propertyTax->propertyTaxId->toBe('mock-id-123')
        ->propertyTax->description->toBe('String value')
        ->type->assetTypeId->toBe('mock-id-123')
        ->type->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
