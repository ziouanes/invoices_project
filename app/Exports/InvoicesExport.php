<?php

namespace App\Exports;

use App\invoices;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        //return invoices::select('invoice_number', 'invoice_Date', 'Due_date', 'Amount_collection', 'Amount_Commission', 'Rate_VAT', 'Value_VAT', 'Total', 'Status', 'Payment_Date', 'note')->get();

        return invoices::all();
    }
}
