<?php 

use Illuminate\Support\Collection;

namespace App\Library;

class Shelf
{
    private $addedItems; 

    public function __construct()
    {
        $this->addedItems = collect(); // if you make a property a collection to start with, you don't need to turn it into one just before you use iterator methods that come with collections
    }

    public function addItem(TitledInterface $item) : Shelf
    {
        $this->addedItems->push($item);
        return $this;
    }

    public function titles() : array
    {
        return $this->addedItems->map(function(TitledInterface $item) : string 
        { // the function passed as the argument is returning a string each time (each book title)
            return $item->title();
        })->all(); // all() turns collection back into array
    }
}