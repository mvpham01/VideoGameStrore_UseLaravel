<?php
namespace App\Models;
class Cart
{
    public $products =null;
     public $totalPrice=0;
    public $totalQuanty=0;
    public function __construct($cart = null)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice= $cart->totalPrice;
            $this->totalQuanty= $cart->totalQuanty;
        }
    }
    public function AddCart($product,$id){
        $newProduct = ['quanty' => 1, 'price' => $product->price, 'productInfo' => $product];
    if ($this->products) {
        if (array_key_exists($id, $this->products)) {
            $newProduct = $this->products[$id];
            $newProduct['price'] = $newProduct['quanty'] * $product->price; 
        }
    }
    $this->products[$id] = $newProduct;
    $this->totalPrice = 0; 
    $this->totalQuanty = 0;
    foreach ($this->products as $item) {
        $this->totalPrice += $item['price'];
        $this->totalQuanty += $item['quanty'];
    }
    }
    public function DeleteItemCart($id){
        $this->totalQuanty-= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'] * $this->products[$id]['quanty'];
        unset($this->products[$id]);
    }
}
?>
