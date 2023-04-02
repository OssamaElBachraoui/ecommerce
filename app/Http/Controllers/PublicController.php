<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    
    public function clothing(){
        $clothings = [
            ['name' => 'Black & White Skater T-Shirt' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/new-product5B.jpg', 'fullPrice' => '$45.95' ,'price' => '$25.35'],
            ['name' => 'Deep Zone Printed T-Shirt' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/clothing1-copy.jpg', 'fullPrice' => '$34.25' ,'price' => '$23.35'],
            ['name' => 'KPZ Back Print Hoodie' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/clothing3-copy.jpg', 'fullPrice' => '$144.95' ,'price' => '$95.35']
        ];
        return view('clothing',['clothings' => $clothings]);
    }

    public function dettaglioClothing($name){
        $clothings = [
            ['name' => 'Black & White Skater T-Shirt' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/new-product5B.jpg', 'fullPrice' => '$45.95' ,'price' => '$25.35'],
            ['name' => 'Deep Zone Printed T-Shirt' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/clothing1-copy.jpg', 'fullPrice' => '$34.25' ,'price' => '$23.35'],
            ['name' => 'KPZ Back Print Hoodie' , 'description' => 'Aenean massa. luculvinar, ids lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero' , 'img' => 'https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/clothing3-copy.jpg', 'fullPrice' => '$144.95' ,'price' => '$95.35']
        ];

        foreach($clothings as $clothing){
            if($clothing['name'] == $name){
                return view('dettaglio',['clothing' => $clothing]);
            }
        }

    }
    





    public function accessories(){
        return view('accessories');
    }
    
    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function customer(){
        return view('customer');
    }
    
    public function privacy(){
        return view('privacy');
    }
    
    public function terms(){
        return view('terms');
    }
    
}
