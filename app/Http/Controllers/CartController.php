<?php
namespace App\Http\Controllers;

use DB;
use App\Models\Cart;
use Illuminate\Console\View\Components\Alert;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function Index()
    {
        $cart = session()->get('Cart');
        return view('home.cart', compact('cart'));
    }
    public function add(Request $req, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $newCart = $req->session()->get('Cart', new Cart());
            $newCart->addCart($product, $id);
            $req->session()->put('Cart', $newCart);
            $cart = $newCart;
        }
        return redirect()->back();
    }
    public function del(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart->products) > 0) {
            $req->session()->put('Cart', $newCart);
        } else {
            $req->session()->forget('Cart');
        }
        $cart = $newCart;
        return redirect()->back();
    }
    public function addcart($totalprice, $totalgame)
    {
        $user = Auth::user();
        $email = $user->email;

        $totalgame = rtrim($totalgame, ',');
        $orderData = [
            'Email' => $email,
            'Product' => $totalgame,
            'Price' => $totalprice,
            'Status' => false,
        ];
        Order::create($orderData);
        return redirect()->back();
        $order = Order::where('Email', $email)
            ->where('Product', $totalgame)
            ->where('Price', $totalprice)
            ->where('Status', false)
            ->first();

        // if ($order) {
        //    echo($order);
        // } else {
        //     echo 'not work';
        // }

    }
}
