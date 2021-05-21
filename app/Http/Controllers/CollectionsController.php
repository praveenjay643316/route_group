<?php

namespace App\Http\Controllers;
use App\Models\Collection;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    function index(){
        // $myarray=Collection::get()->map(function($data){
        //     return $data->price;
        // });

        // $myarray=Collection::get()->pluck('price','id');
        //    print_r($myarray);

        // $myarray=Collection::get()->filter(function($data){
        //         return $data->price > 8000;
        // });
        //    print_r($myarray);

        // $myarray=dd(Collection::get()
        // ->where('price','>','1000')
        // ->map(function($data){
        //     $data->totalprice = $data->price * $data->active;
        //     return $data;
        // })
        // ->sortby('price')->toarray());
           //dd($myarray);

        // $myarray=Collection::get()
        // ->where('price','>','5000')
        // ->map(function($data){
        //     $data->totalprice = $data->price * $data->active;
        //     return $data;
        // })
        // ->sortby('price')
        // ->values();
        // foreach($myarray as $array){
        //     $desc = str_replace("\n", '<br>', $array->name);
        //             echo "<br/>"."<br/>".$desc;
        // }
        
    //   $filter = Collection::get()->filter(function($value, $key) {
    //         if ($value['price'] > 8100) {
    //             return true;
    //         }
    //     });
 
    // print_r($filter->all());  
    
//     $changed = collection::get()->map(function ($value, $key) {
//     $value['id'] += 10;
//     return $value;
// });
 
// print_r( $changed->all());

$collection=Collection::each(function ($item, $key) {
    // Tasks
    if ($key == 1) {
        
    }
});
print_r($collection);
        //return view('welcome');
    }
}
