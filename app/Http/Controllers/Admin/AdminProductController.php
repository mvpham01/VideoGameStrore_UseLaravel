<?php
namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminProductController extends Controller
{
 public function index()
 {
 $viewData = [];
 $viewData["title"] = "Admin Page - Products - Online Store";
 $viewData["products"] = Product::all();
 return view('admin.product.index')->with("viewData", $viewData);
 }
 public function delete($id){
   $product = Product::find($id);
   if ($product) {
       $product->delete();
   }
   $viewData = [];
   $viewData["title"] = "Admin Page - Products - Online Store";
   $viewData["products"] = Product::all();
 return view('admin.product.index')->with("viewData", $viewData);
 }
 public function addnew($id,$name,$dep,$img,$price)
 {
    $product = new Product();
    $product->id = $id;
    $product->name = $name;
    $product->description = $dep;
    $product->image = $img;
    $product->price=$price;
    $product->save();
    $viewData = [];
    $viewData["title"] = "Admin Page - Products - Online Store";
    $viewData["products"] = Product::all();
  return view('admin.product.index')->with("viewData", $viewData);
 }
}
