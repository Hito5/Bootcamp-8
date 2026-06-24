<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $products = \App\Models\Product::all();
        return view('welcome', compact('products'));
    }
    public function products(Request $request)
    {
        $categories = Category::all();

        $query = Product::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(10);

        return view('products', compact('products', 'categories'));
    }
    public function productDetail($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        
        $product->increment('views'); 

        return view('product_detail', compact('product')); // Lo harus bikin file ini ntar buat nampilin detailnya
    }
    public function cart()
    {
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();
        return view('cart', compact('carts'));
    }
    public function addToCart(Request $request, $id)
    {
        $cart = \App\Models\Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        
        $quantity = $request->quantity ? $request->quantity : 1; 

        if ($cart) {
            $cart->increment('quantity', $quantity); 
        } else {
            \App\Models\Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'quantity' => $quantity 
            ]);
        }

        return redirect()->back()->with('success', 'Barang berhasil masuk keranjang.');
    }
    public function removeFromCart($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Produk dihapus dari keranjang!');
    }
    public function checkout(Request $request)
    {
        $userId = Auth::id();
        
        $carts = Cart::with('product')->where('user_id', $userId)->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang lo masih kosong!');
        }

        $totalPrice = 0;
        foreach ($carts as $cart) {
            $totalPrice += $cart->product->price * $cart->quantity;
        }

        $order = Order::create([
            'user_id' => $userId,
            'status' => 'pending', 
            'total_price' => $totalPrice,
            'shipping_address' => 'Alamat Default' 
        ]);

        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'price' => $cart->product->price 
            ]);
        }

        Cart::where('user_id', $userId)->delete();

        return redirect()->route('cart.index')->with('success', 'Checkout berhasil! Pesanan lo sedang diproses.');
    }
    public function myOrders()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->get();
        return view('orders', compact('orders'));
    }
    public function adminOrders()
    {
        $orders = Order::latest()->get(); 
        return view('admin_orders', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);
        
        return redirect()->back()->with('success', 'Status pesanan berhasil diupdate!');
    }
}