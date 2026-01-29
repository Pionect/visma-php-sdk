<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CreditTerm\CreditTermGetCreditTermsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the creditTermGetCreditTermsCollection method in the CreditTerm resource', function () {
    Saloon::fake([
        CreditTermGetCreditTermsCollectionRequest::class => MockResponse::make([
            'records' => [
                0 => [
                    'termsId' => 'mock-id-123',
                    'description' => 'String value',
                    'visibleTo' => 'String value',
                    'dueDateType' => 'String value',
                    'moveDueDateIfOnTheWeekend' => 'String value',
                    'dueDay1' => 42,
                    'dueDay1dayFrom1' => 42,
                    'dueDay1dayTo1' => 42,
                    'dueDay2' => 42,
                    'dueDay2dayFrom1' => 42,
                    'dueDay2dayTo1' => 42,
                    'discountType' => 'String value',
                    'discountDay' => 42,
                    'discountPercent' => 3.14,
                    'delayDays' => 42,
                    'calculationType' => 'String value',
                    'instalmentType' => 'String value',
                    'numberOfInstalments' => 42,
                    'instalmentFrequency' => 'String value',
                    'instalmentMethod' => 'String value',
                    'instalmentsSchedule' => [],
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                ],
                1 => [
                    'termsId' => 'mock-id-123',
                    'description' => 'String value',
                    'visibleTo' => 'String value',
                    'dueDateType' => 'String value',
                    'moveDueDateIfOnTheWeekend' => 'String value',
                    'dueDay1' => 42,
                    'dueDay1dayFrom1' => 42,
                    'dueDay1dayTo1' => 42,
                    'dueDay2' => 42,
                    'dueDay2dayFrom1' => 42,
                    'dueDay2dayTo1' => 42,
                    'discountType' => 'String value',
                    'discountDay' => 42,
                    'discountPercent' => 3.14,
                    'delayDays' => 42,
                    'calculationType' => 'String value',
                    'instalmentType' => 'String value',
                    'numberOfInstalments' => 42,
                    'instalmentFrequency' => 'String value',
                    'instalmentMethod' => 'String value',
                    'instalmentsSchedule' => [],
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = (new CreditTermGetCreditTermsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', termsId: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CreditTermGetCreditTermsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->termsId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->visibleTo->toBe('String value')
        ->dueDateType->toBe('String value')
        ->moveDueDateIfOnTheWeekend->toBe('String value')
        ->dueDay1->toBe(42)
        ->dueDay1dayFrom1->toBe(42)
        ->dueDay1dayTo1->toBe(42)
        ->dueDay2->toBe(42)
        ->dueDay2dayFrom1->toBe(42)
        ->dueDay2dayTo1->toBe(42)
        ->discountType->toBe('String value')
        ->discountDay->toBe(42)
        ->discountPercent->toBe(3.14)
        ->delayDays->toBe(42)
        ->calculationType->toBe('String value')
        ->instalmentType->toBe('String value')
        ->numberOfInstalments->toBe(42)
        ->instalmentFrequency->toBe('String value')
        ->instalmentMethod->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
