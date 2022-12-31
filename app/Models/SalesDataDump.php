<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDataDump extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'supervisor_code',
        'supervisor_name',
        'town_name',
        'distributor_code_rd',
        'distributor_code',
        'distributor_name',
        'invoice_number',
        'cnic',
        'strn',
        'order_booker_code',
        'order_booker_name',
        'store_classification_one',
        'store_classification_two',
        'store_classification_three',
        'store_perfect',
        'outlet_code_rd',
        'outlet_code',
        'outlet_name',
        'area_type',
        'pjp_name',
        'pjp_code',
        'channel',
        'sub_channel',
        'asset',
        'business_unit',
        'category',
        'brand',
        'master_SKU',
        'SKU_manufacturer_code',
        'SKU_code',
        'SKU_name',
        'year',
        'month',
        'date',
        'foc_ctn',
        'foc_boxes',
        'foc_units',
        'sales_ctn',
        'sales_boxes',
        'sales_units',
        'volume_tons',
        'ex_factory',
        'TP_exc_GST',
        'TP_inc_GST',
        'advance_tax',
        'unassigned_group',
        'trade_offer',
        'distributor_promotion',
        'manual_discount',
        'buy_get_free',
        'special_discount',
        'per_packet_discount',
        'regular_discount',
        'gst',
        'net_sales',
    ];
}
