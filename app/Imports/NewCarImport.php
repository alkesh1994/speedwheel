<?php

namespace App\Imports;

use App\NewCar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NewCarImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NewCar([
            'enquiry_date'=>$row['enquiry_date'],
             'name'=>$row['name'],
             'contact1'=>$row['contact1'],
             'contact2'=>$row['contact2'],
             'address'=>$row['address'],
             'qualification'=>$row['qualification'],
             'email'=>$row['email'],
             'office_address'=>$row['office_address'],
             'office_contact'=>$row['office_contact'],
             'mother_name'=>$row['mother_name'],
             'spouse_name'=>$row['spouse_name'],
             'spouse_occupation'=>$row['spouse_occupation'],
             'spouse_contact'=>$row['spouse_contact'],
             'no_of_dependents'=>$row['no_of_dependents'],
             'reference1_name'=>$row['reference1_name'],
             'reference1_contact'=>$row['reference1_contact'],
             'reference1_address'=>$row['reference1_address'],
             'reference2_name'=>$row['reference2_name'],
             'reference2_contact'=>$row['reference2_contact'],
             'reference2_address'=>$row['reference2_address'],
             'vehicle_brand'=>$row['vehicle_brand'],
             'vehicle_model'=>$row['vehicle_model'],
             'vehicle_color'=>$row['vehicle_color'],
             'vehicle_dealer'=>$row['vehicle_dealer'],
             'vehicle_financer'=>$row['vehicle_financer'],
             'vehicle_booking_amount'=>$row['vehicle_booking_amount'],
             'vehicle_ex_showroom'=>$row['vehicle_ex_showroom'],
             'vehicle_1_tcs'=>$row['vehicle_1_tcs'],
             'vehicle_depot'=>$row['vehicle_depot'],
             'vehicle_insurance'=>$row['vehicle_insurance'],
             'vehicle_rto'=>$row['vehicle_rto'],
             'vehicle_warranty'=>$row['vehicle_warranty'],
             'vehicle_accessories'=>$row['vehicle_accessories'],
             'vehicle_onroad'=>$row['vehicle_onroad'],
             'vehicle_discount'=>$row['vehicle_discount'],
             'vehicle_cost'=>$row['vehicle_cost'],
             'vehicle_finance_approved'=>$row['vehicle_finance_approved'],
             'vehicle_emi'=>$row['vehicle_emi'],
             'vehicle_stampduty'=>$row['vehicle_stampduty'],
             'vehicle_downpayment'=>$row['vehicle_downpayment'],
             'vehicle_part1'=>$row['vehicle_part1_payment'],
             'vehicle_part2'=>$row['vehicle_part2_payment'],
             'dealer_payment'=>$row['dealer_payment'],
             'dealer_disbursement'=>$row['dealer_disbursement'],
             'dealer_balance'=>$row['dealer_balance'],
             'emi_date'=>$row['emi_date'],
             'loan_account_number'=>$row['loan_account_number'],
             'post_delivery_documents'=>$row['post_delivery_documents'],
             'invoice_number'=>$row['invoice_number'],
             'insurance_number'=>$row['insurance_number'],
             'rcbook_number'=>$row['rcbook_number'],
             'fastag_number'=>$row['fastag_number'],
             'pancard_number'=>$row['pancard_number'],
             'lightbill_number'=>$row['lightbill_number'],
             'aadharcard_number'=>$row['aadharcard_number'],
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
