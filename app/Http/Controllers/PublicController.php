<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $menus = [
        ["id" => "1", "name" => "Salmon Nigiri", "ingredients" => "Salmon, Rice, Wasabi", "price" => 12.00, "image" => "/images/menu/1.png"],
        ["id" => "2", "name" => "Tuna Nigiri", "ingredients" => "Tuna, Rice, Wasabi", "price" => 14.00, "image" => "/images/menu/2.png"],
        ["id" => "3", "name" => "Tuna and Avocado Roll", "ingredients" => "Tuna, Avocado, Rice, Seaweed", "price" => 15.00, "image" => "/images/menu/3.png"],
        ["id" => "4", "name" => "Avocado Roll", "ingredients" => "Avocado, Rice, Seaweed", "price" => 13.00, "image" => "/images/menu/4.png"],
        ["id" => "5", "name" => "Eel Roll", "ingredients" => "Eel, Cucumber, Rice, Seaweed", "price" => 15.00, "image" => "/images/menu/5.png"],
        ["id" => "6", "name" => "Vegetable Roll", "ingredients" => "Carrot, Cucumber, Avocado, Rice, Seaweed", "price" => 15.00, "image" => "/images/menu/6.png"],
        ["id" => "7", "name" => "Dragon Roll", "ingredients" => "Shrimp Tempura, Avocado, Eel Sauce", "price" => 18.00, "image" => "/images/menu/7.png"],
        ["id" => "8", "name" => "Rainbow Roll", "ingredients" => "Crab, Avocado, Salmon, Tuna, Shrimp", "price" => 19.00, "image" => "/images/menu/8.png"],
        ["id" => "9", "name" => "Spicy Tuna Roll", "ingredients" => "Tuna, Spicy Mayo, Rice, Seaweed", "price" => 14.50, "image" => "/images/menu/9.png"],
        ["id" => "10", "name" => "Spicy Salmon Roll", "ingredients" => "Salmon, Spicy Mayo, Rice, Seaweed", "price" => 14.50, "image" => "/images/menu/10.png"],
        ["id" => "11", "name" => "California Roll", "ingredients" => "Crab, Avocado, Cucumber, Rice, Seaweed", "price" => 13.50, "image" => "/images/menu/12.png"],
        ["id" => "12", "name" => "Philadelphia Roll", "ingredients" => "Salmon, Cream Cheese, Cucumber, Rice", "price" => 15.00, "image" => "/images/menu/13.png"],
        ["id" => "13", "name" => "Tempura Shrimp Roll", "ingredients" => "Shrimp Tempura, Avocado, Rice, Seaweed", "price" => 16.00, "image" => "/images/menu/14.png"],
        ["id" => "14", "name" => "Soft Shell Crab Roll", "ingredients" => "Soft Shell Crab, Lettuce, Rice, Seaweed", "price" => 18.00, "image" => "/images/menu/15.png"],
        ["id" => "15", "name" => "Unagi Nigiri", "ingredients" => "Eel, Rice, Eel Sauce", "price" => 17.00, "image" => "/images/menu/16.png"],
        ["id" => "16", "name" => "Hamachi Nigiri", "ingredients" => "Yellowtail, Rice", "price" => 16.50, "image" => "/images/menu/17.png"],
        ["id" => "17", "name" => "Toro Nigiri", "ingredients" => "Fatty Tuna, Rice", "price" => 20.00, "image" => "/images/menu/18.png"],
        ["id" => "18", "name" => "Shrimp Nigiri", "ingredients" => "Shrimp, Rice", "price" => 14.00, "image" => "/images/menu/19.png"],
        ["id" => "19", "name" => "Octopus Nigiri", "ingredients" => "Octopus, Rice", "price" => 15.50, "image" => "/images/menu/20.png"],
        ["id" => "20", "name" => "Ikura Nigiri", "ingredients" => "Salmon Roe, Rice, Seaweed", "price" => 18.00, "image" => "/images/menu/22.png"],
        ["id" => "21", "name" => "Tamago Nigiri", "ingredients" => "Sweet Egg, Rice", "price" => 12.50, "image" => "/images/menu/21.png"],
    ];

    public function homepage()
    {
        return view('homepage');
    }

    public function menu()
    {
        return view('menu', ['menus' => $this->menus]);
    }
}
