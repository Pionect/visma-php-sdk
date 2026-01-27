<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllContactForSupplierBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllDocumentsForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllInvoicesForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierBalanceCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSpecificSupplierClassBysupplierClassIdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierBalanceBysupplierCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierGetAllSupplierClassesCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'id' => 'mock-id-123',
            ],
            1 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new SupplierGetAllSupplierClassesCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierGetAllSupplierClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetSpecificSupplierClassBysupplierClassId method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class => MockResponse::make([
            'attributes' => [],
            'paymentMethodId' => 'mock-id-123',
            'paymentMethodDescription' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'description' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetSpecificSupplierClassBysupplierClassIdRequest(
        supplierClassId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetAllSupplierBalanceCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierBalanceCollectionRequest::class => MockResponse::make([
            0 => [
                'branchNumber' => 'String value',
                'supplier' => null,
                'balance' => 3.14,
                'unreleasedPurchasesNotInApproval' => null,
                'totalSentForApproval' => null,
                'totalPurchaseInvoicePeriod' => null,
                'totalPurchaseInvoiceYear' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
            1 => [
                'branchNumber' => 'String value',
                'supplier' => null,
                'balance' => 3.14,
                'unreleasedPurchasesNotInApproval' => null,
                'totalSentForApproval' => null,
                'totalPurchaseInvoicePeriod' => null,
                'totalPurchaseInvoiceYear' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new SupplierGetAllSupplierBalanceCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierGetAllSupplierBalanceCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->branchNumber->toBe('String value')
        ->supplier->toBeNull()
        ->balance->toBe(3.14)
        ->unreleasedPurchasesNotInApproval->toBeNull()
        ->totalSentForApproval->toBeNull()
        ->totalPurchaseInvoicePeriod->toBeNull()
        ->totalPurchaseInvoiceYear->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetBysupplierCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'status' => 'String value',
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => 'String value',
            'parentRecord' => null,
            'supplierClass' => null,
            'creditTerms' => null,
            'documentLanguage' => 'String value',
            'currencyId' => 'mock-id-123',
            'remitAddress' => null,
            'remitContact' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'chargeBearer' => 'String value',
            'accountUsedForPayment' => 'String value',
            'paymentBy' => 'String value',
            'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
            'paymentRefDisplayMask' => 'String value',
            'paySeparately' => true,
            'supplierAddress' => null,
            'supplierContact' => null,
            'location' => null,
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'vatZone' => null,
            'glAccounts' => null,
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => true,
            'retainageCashAccountId' => 'mock-id-123',
            'retainagePct' => 3.14,
            'note' => 'String value',
            'numberOfEmployees' => 42,
            'naceCode' => 'String value',
            'landedCostSupplier' => true,
            'currencyOverride' => true,
            'currencyRateOverride' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetBysupplierCdRequest(
        supplierCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->supplierClass->toBeNull()
        ->creditTerms->toBeNull()
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBeNull()
        ->remitContact->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->chargeBearer->toBe('String value')
        ->accountUsedForPayment->toBe('String value')
        ->paymentBy->toBe('String value')
        ->paymentLeadTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBeTrue()
        ->supplierAddress->toBeNull()
        ->supplierContact->toBeNull()
        ->location->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->glAccounts->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->retainageApply->toBeTrue()
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(3.14)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBeTrue()
        ->currencyOverride->toBeTrue()
        ->currencyRateOverride->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetAllCollection method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'supplierClass' => null,
                'creditTerms' => null,
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => null,
                'remitContact' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'chargeBearer' => 'String value',
                'accountUsedForPayment' => 'String value',
                'paymentBy' => 'String value',
                'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => null,
                'supplierContact' => null,
                'location' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => null,
                'glAccounts' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 3.14,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'supplierClass' => null,
                'creditTerms' => null,
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => null,
                'remitContact' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'chargeBearer' => 'String value',
                'accountUsedForPayment' => 'String value',
                'paymentBy' => 'String value',
                'paymentLeadTime' => '2025-11-22T10:40:04.065Z',
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => null,
                'supplierContact' => null,
                'location' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => null,
                'glAccounts' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 3.14,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
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

    $request = (new SupplierGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', name: 'test string', status: 'test string', vatRegistrationId: 'test string', corporateId: 'test string', attributes: 'test string', expandAccountInformation: true, expandNote: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->supplierClass->toBeNull()
        ->creditTerms->toBeNull()
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->toBeNull()
        ->remitContact->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->chargeBearer->toBe('String value')
        ->accountUsedForPayment->toBe('String value')
        ->paymentBy->toBe('String value')
        ->paymentLeadTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBeTrue()
        ->supplierAddress->toBeNull()
        ->supplierContact->toBeNull()
        ->location->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->toBeNull()
        ->glAccounts->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->retainageApply->toBeTrue()
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(3.14)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBeTrue()
        ->currencyOverride->toBeTrue()
        ->currencyRateOverride->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetAllInvoicesForSupplierBysupplierNumber method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => null,
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 3.14,
            'paymentRefNo' => 'String value',
            'creditTerms' => null,
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'detailTotal' => 3.14,
            'detailTotalInCurrency' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInCurrency' => 3.14,
            'withholdingTax' => 3.14,
            'withholdingTaxInCurrency' => 3.14,
            'buyerReference' => 'String value',
            'roundingDiff' => 3.14,
            'roundingDiffInCurrency' => 3.14,
            'amount' => 3.14,
            'vatAmount' => 3.14,
            'taxCalculationMode' => 'String value',
            'supplierTaxZone' => null,
            'paySelected' => true,
            'curyRetainageTotal' => 3.14,
            'curyRetainageUnreleasedAmt' => 3.14,
            'documentVersionNumber' => 42,
            'supplier' => null,
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'String value',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => null,
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => null,
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetAllInvoicesForSupplierBysupplierNumberRequest(
        supplierNumberId: 'test string',
        expandAttachment: true,
        expandLandedCosts: true,
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->approvalDetails->toBeNull()
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('String value')
        ->creditTerms->toBeNull()
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('String value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('String value')
        ->supplierTaxZone->toBeNull()
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetAllDocumentsForSupplierBysupplierNumber method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'account' => null,
            'subaccount' => null,
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'branch' => null,
            'supplier' => null,
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'String value',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => null,
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => null,
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetAllDocumentsForSupplierBysupplierNumberRequest(
        supplierNumberId: 'test string',
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->branch->toBeNull()
        ->supplier->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetSupplierBalanceBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierBalanceBysupplierCdRequest::class => MockResponse::make([
            'branchNumber' => 'String value',
            'supplier' => null,
            'balance' => 3.14,
            'unreleasedPurchasesNotInApproval' => null,
            'totalSentForApproval' => null,
            'totalPurchaseInvoicePeriod' => null,
            'totalPurchaseInvoiceYear' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetSupplierBalanceBysupplierCdRequest(
        supplierCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierBalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchNumber->toBe('String value')
        ->supplier->toBeNull()
        ->balance->toBe(3.14)
        ->unreleasedPurchasesNotInApproval->toBeNull()
        ->totalSentForApproval->toBeNull()
        ->totalPurchaseInvoicePeriod->toBeNull()
        ->totalPurchaseInvoiceYear->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the supplierGetAllContactForSupplierBysupplierCd method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllContactForSupplierBysupplierCdRequest::class => MockResponse::make([
            'displayName' => 'String value',
            'active' => true,
            'title' => 'String value',
            'firstName' => 'String value',
            'lastName' => 'String value',
            'position' => 'String value',
            'businessAccount' => 'String value',
            'businessAccountType' => 'String value',
            'sameAsAccount' => true,
            'address' => null,
            'email' => 'test@example.com',
            'web' => 'String value',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
            'contactMethod' => 'String value',
            'doNotCall' => true,
            'doNotFax' => true,
            'doNotEmail' => true,
            'doNotMail' => true,
            'noMassMail' => true,
            'noMarketing' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'contactId' => 42,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new SupplierGetAllContactForSupplierBysupplierCdRequest(
        supplierCdId: 'test string',
        displayName: 'test string',
        active: 'test string',
        firstName: 'test string',
        lastName: 'test string',
        businessAccount: 'test string',
        email: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllContactForSupplierBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('String value')
        ->active->toBeTrue()
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBeTrue()
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBeTrue()
        ->doNotFax->toBeTrue()
        ->doNotEmail->toBeTrue()
        ->doNotMail->toBeTrue()
        ->noMassMail->toBeTrue()
        ->noMarketing->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
