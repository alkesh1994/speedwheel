<?php

namespace App\Exports;

use App\NewCar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewCarExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NewCar::all(
          'enquiry_date',
           'name',
           'contact1',
           'contact2',
           'address',
           'qualification',
           'email',
           'office_address',
           'office_contact',
           'mother_name',
           'spouse_name',
           'spouse_occupation',
           'spouse_contact',
           'no_of_dependents',
           'reference1_name',
           'reference1_contact',
           'reference1_address',
           'reference2_name',
           'reference2_contact',
           'reference2_address',
           'vehicle_brand',
           'vehicle_model',
           'vehicle_color',
           'vehicle_dealer',
           'vehicle_financer',
           'vehicle_booking_amount',
           'vehicle_ex_showroom',
           'vehicle_1_tcs',
           'vehicle_depot',
           'vehicle_insurance',
           'vehicle_rto',
           'vehicle_warranty',
           'vehicle_accessories',
           'vehicle_onroad',
           'vehicle_discount',
           'vehicle_cost',
           'vehicle_finance_approved',
           'vehicle_emi',
           'vehicle_stampduty',
           'vehicle_downpayment',
           'vehicle_part1',
           'vehicle_part2',
           'dealer_payment',
           'dealer_disbursement',
           'dealer_balance',
           'emi_date',
           'loan_account_number',
           'post_delivery_documents',
           'invoice_number',
           'insurance_number',
           'rcbook_number',
           'fastag_number',
           'pancard_number',
           'lightbill_number',
           'aadharcard_number'
        );
    }
    public function headings(): array
    {
        return [
          'enquiry_date',
           'name',
           'contact1',
           'contact2',
           'address',
           'qualification',
           'email',
           'office_address',
           'office_contact',
           'mother_name',
           'spouse_name',
           'spouse_occupation',
           'spouse_contact',
           'no_of_dependents',
           'reference1_name',
           'reference1_contact',
           'reference1_address',
           'reference2_name',
           'reference2_contact',
           'reference2_address',
           'vehicle_brand',
           'vehicle_model',
           'vehicle_color',
           'vehicle_dealer',
           'vehicle_financer',
           'vehicle_booking_amount',
           'vehicle_ex_showroom',
           'vehicle_1_tcs',
           'vehicle_depot',
           'vehicle_insurance',
           'vehicle_rto',
           'vehicle_warranty',
           'vehicle_accessories',
           'vehicle_onroad',
           'vehicle_discount',
           'vehicle_cost',
           'vehicle_finance_approved',
           'vehicle_emi',
           'vehicle_stampduty',
           'vehicle_downpayment',
           'vehicle_part1_payment',
           'vehicle_part2_payment',
           'dealer_payment',
           'dealer_disbursement',
           'dealer_balance',
           'emi_date',
           'loan_account_number',
           'post_delivery_documents',
           'invoice_number',
           'insurance_number',
           'rcbook_number',
           'fastag_number',
           'pancard_number',
           'lightbill_number',
           'aadharcard_number'
        ];
    }
}
