<?php
namespace Shop;

class Cart
{
    private $items = [];
    
    // BEGIN (write your solution here)
    
    public function add($item)
    {
        return $this->items[] = $item;
    }
    
    public function count()
    {
        return count($this->items);
    }
    
    public function total()
    {
        return array_reduce($this->items, function ($sum, $item) { return $sum + $item->price;});
    }
    
    public function remove($id)
    {
        foreach ($this->items as $k => $v)
        {
            if ($v->id == $id) {
                unset($this->items[$k]);
            }
            
        }
    }
    
//    public function remove($id)
//    {
//        $this->items = array_values(array_filter($this->items, function (Item $item) use ($id) {
//            return $id !== $item->id;
//        }));
//    }
    
    public function clear()
    {
        unset($this->items);
        return $this->items = [];
    }
    
    
    // END
}