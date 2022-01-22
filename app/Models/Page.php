<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Page extends BaseModel
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'pages';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function subMenuEntity(){
        return $this->belongsTo('App\Models\Menu', 'sub_menu_id', 'id');
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

      //upload document
      public function setFileUploadAttribute($value)
      {
          $attribute_name = "file_upload";
          $disk = "uploads";
          $name = (isset(request()->title) ? request()->title : 0);
 
          $path  = 'Pages';
          $destination_path = str_replace("###PAGES###", $name, $path);
          $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);   
  
      }
 
      public static function boot()
      {
          parent::boot();
          static::deleting(function($obj) {
              if (count((array)$obj->files)) {
                  foreach ($obj->files as $file_path) {
                      \Storage::disk('uploads')->delete($file_path);
                  }
              }
          });
      }
}
