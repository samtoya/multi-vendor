<?php


    class Category
    {

        public static $categories = [
            "Electronics & Computers",
            "Books, Stationery & Office",
            "Movies & Music",
            "Home & Garden",
            "Pet & Pet Supplies",
            "Toys, Children & Family",
            "Clothes, Shoes & Jewellery",
            "Sports & Outdoors",
            "Health & Beauty",
            "Groceries & Households",
            "Autos & Accessories",
            "Real Estate"
        ];

        public static function all()
        {
            return static::$categories;
        }
    }