<?php

namespace App\Imports;

use App\Models\SalesDataDump;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;

ini_set('max_execution_time', 18000);


class SalesDataImport implements ToModel,WithHeadingRow,WithChunkReading,ShouldQueue,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new SalesDataDump([

        'supervisor_code' => $row['supervisor_code'] ?? null,
        'supervisor_name'=> $row['supervisor_code'] ?? null,
        'town_name'  => $row['town_name'] ?? null,
        'distributor_code_rd' => $row['distributor_code_rd'] ?? null,
        'distributor_code' => $row['distributor_code'] ?? null,
        'distributor_name' => $row['distributor_name'] ?? null,
        'invoice_number' => $row['invoice_number'] ?? null,
        'cnic' => $row['cnic'] ?? null,
        'strn' => $row['strn'] ?? null,
        'order_booker_code' => $row['order_booker_code'] ?? null,
        'order_booker_name' => $row['order_booker_name'] ?? null,
        'store_classification_one' => $row['store_classification_one'] ?? null,
        'store_classification_two' => $row['store_classification_two'] ?? null,
        'store_classification_three' => $row['store_classification_three'] ?? null,
        'store_perfect' => $row['store_perfect'] ?? null,
        'outlet_code_rd' => $row['outlet_code_rd'] ?? null,
        'outlet_code' => $row['outlet_code'] ?? null,
        'outlet_name' => $row['outlet_name'] ?? null,
        'area_type' => $row['area_type'] ?? null,
        'pjp_name' => $row['pjp_name'] ?? null,
        'pjp_code' => $row['pjp_code'] ?? null,
        'channel' => $row['channel'] ?? null,
        'sub_channel' => $row['sub_channel'] ?? null,
        'asset' => $row['asset'] ?? null,
        'business_unit' => $row['business_unit'] ?? null,
        'category' => $row['category'] ?? null,
        'brand' => $row['brand'] ?? null,
        'master_SKU' => $row['master_sku'] ?? null,
        'SKU_manufacturer_code' => $row['sku_manufacturer_code'] ?? null,
        'SKU_code' => $row['sku_code'] ?? null,
        'SKU_name' => $row['sku_name'] ?? null,
        'year' => $row['year'] ?? null,
        'month' => $row['month'] ?? null,
        'date' => $row['date'] ?? null,
        'foc_ctn' => $row['foc_ctn'] ?? null,
        'foc_boxes' => $row['foc_boxes'] ?? null,
        'foc_units' => $row['foc_units'] ?? null,
        'sales_ctn' => $row['sales_ctn'] ?? null,
        'sales_boxes' => $row['sales_boxes'] ?? null,
        'sales_units' => $row['sales_units'] ?? null,
        'volume_tons' => $row['volume_tons'] ?? null,
        'ex_factory' => $row['ex_factory'] ?? null,
        'TP_exc_GST' => $row['tp_exc_gst'] ?? null,
        'TP_inc_GST' => $row['tp_inc_gst'] ?? null,
        'advance_tax' => $row['advance_tax'] ?? null,
        'unassigned_group' => $row['unassinged_group'] ?? null,
        'trade_offer' => $row['trade_offer'] ?? null,
        'distributor_promotion' => $row['distributor_promotion'] ?? null,
        'manual_discount' => $row['manual_discount'] ?? null,
        'buy_get_free' => $row['buy_get_free'] ?? null,
        'special_discount' => $row['special_discount'] ?? null,
        'per_packet_discount' => $row['per_packet_discount'] ?? null,
        'regular_discount' => $row['regular_discount'] ?? null,
        'gst' => $row['gst'] ?? null,
        'net_sales' => $row['net_sales'] ?? null, 

        ]);
    }

    public function chunkSize(): int
    {
        return 5000;
    }

    public function rules(): array
    {
        return [
            "town_name"=> "required",
            "distributor_code_rd"=> "required",
            'distributor_code' => 'required',
            'distributor_name' => 'required',
            'invoice_number' => 'required',
            'order_booker_code' => 'required',
            'order_booker_name' => 'required',
            'outlet_code' => 'required',
            'outlet_name' => 'required',
            'area_type'  => 'required',
            'pjp_name'  => 'required',
            'pjp_code'  => 'required',
            'channel'  => 'required',
            'sub_channel'  => 'required',
            'business_unit'  => 'required',
            'category'  => 'required',
            'brand'  => 'required',
            'master_sku'  => 'required',
            'sku_manufacturer_code'  => 'required',
            'sku_code'  => 'required',
            'sku_name'  => 'required',
            'year'  => 'required', 
            'month' => 'required',
            'date'  => 'required',
            'sales_ctn'  => 'required',
            'sales_boxes'  => 'required',
            'sales_units'  => 'required',
            'ex_factory'  => 'required',
            'tp_exc_gst'  => 'required',
            'tp_inc_gst'  => 'required',
            'trade_offer'  => 'required',
            'distributor_promotion'  => 'required',
            'net_sales'  => 'required',
        ];
    }
    // public function customValidationMessages(){

    //     return [
    //         'town_name.required'=>"Town name required",
    //         'distributor_code_rd.required' => "Distributor Code RD required",
    //         'distributor_code.required' => 'Distributor Code required',
    //         'distributor_name' =>  'Distributor Name required',

    //     ];
    // }
}
