<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $getmenu = DB::table('category')
            ->select('*')
             ->get()->toArray();
             
        
            $getfurmenu = DB::table('category')
            ->leftjoin('sub_category', 'sub_category.fk_cat_id', '=', 'category.id')
            ->select('sub_category.slug as catSlug','category.id','sub_category.id as subid','sub_category.fk_cat_id','category.name as categoryName', 'sub_category.name as subCatname')
             ->get()->toArray();
             
        
            
             $getfurmenudata = DB::table('sub_category')
            ->leftjoin('further_sub_category', 'further_sub_category.fk_sub_id', '=', 'sub_category.id')
            ->select('further_sub_category.slug as sub_cat_slug','further_sub_category.name as furName','sub_category.id as subCatId', 'further_sub_category.fk_sub_id', 'further_sub_category.id as furID','sub_category.fk_cat_id')
             ->get()->toArray();
        
            //  print_r(  $getfurmenudata );exit;
            $result = $getfurmenu;
            
            $data = [];
            foreach($getmenu as $key => $value){
                $data[$value->id] = $value;
            }
        
            foreach($result as $key => $val){
                if(isset($val->subid) && !empty($val->subid)){
                    if(isset($data[$val->fk_cat_id]) && !empty($data[$val->fk_cat_id] )){
                        $data[$val->fk_cat_id]->sub_category[$val->subid] = $val;
                    }
                }
        
            }
            foreach($getfurmenudata as $key => $furVal){
                if(isset($furVal->furID) && !empty($furVal->furID)){
                if(isset($furVal->fk_sub_id) && !empty($furVal->fk_sub_id) && isset($furVal->fk_cat_id)&& !empty($furVal->fk_cat_id)){
                        if(isset($data[$furVal->fk_sub_id])&& !empty([$furVal->fk_sub_id])){
                                $data[$furVal->fk_cat_id]->sub_category[$furVal->fk_sub_id]->fur_sub_category[] = $furVal;
                            }  
                }
              }
        
            }
        
            $startMenu=(array_slice($data,0,10));
            
            $lastMenu=(array_slice($data,11,17));

            $data = [
                'startMenu'  => $startMenu,
                'lastMenu'   => $lastMenu
            ];
            
            // return View::make('user')->with($data);
            $view->with($data);
            // print_r($data); exit;   
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
