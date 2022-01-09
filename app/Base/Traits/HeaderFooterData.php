<?php
namespace App\Base\Traits;

use App\Models\Header;
use App\Models\FooterAddress;
use Illuminate\Support\Facades\DB;


trait HeaderFooterData
{
    private function getHeaderFooterData(){
        
        $header = Header::first();
        $footer = FooterAddress::first();

        $data['header'] = $header;             
        $data['footer'] = $footer;             

        return $data;
    }




}