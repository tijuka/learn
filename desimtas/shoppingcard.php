<?php

Class ShoppingCart
{
    private $items = array();
    private $date = null;
//apibreziu klase ir jos objekta, kad galima tik paduoti
    public function addItem(ShoppingCartItem $item)
    {
        array_push($this->items, $item);
    }


//$this->$items [] = $item; cia antras budas masyvui sukurti
public function getItems ()
{
    return $this->items;
}


}

Class ShoppingCartItem
{

    public $id = null;
    public $price = null;
    public $quantity = null;
    public $name = null;

}

$cart = new ShoppingCart;

$item = new ShoppingCartItem;
$item->name = "Cesnakas";
$item->price = 1.5;
$item->quantity = 1;
$item->id = 1;

$cart->addItem($item);

var_dump($cart->getItems());


?>