<?php
namespace App\Base\Traits;

use App\Models\CollegeDetails;
use Illuminate\Support\Facades\DB;


trait HeaderFooterData
{
    private function getCollegeDetailsData(){
        
        $college_details = CollegeDetails::with('socialMedias')->first();
        $data['college_details'] = $college_details;             
        return $data;
    }




}