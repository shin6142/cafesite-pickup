<?php
class Menu{
    protected $name;
    protected $price;
    protected $image;
    protected $detail;
    private $orderCount = 0;
    protected static $count = 0;

    public function __construct($name,$price,$image,$detail){
        $this->name = $name;
        $this->price= $price;
        $this->image= $image;
        $this->detail= $detail;
        self::$count++;
    }

    public function getName() {
        return $this->name;
      }
    
    public function getImage(){
        return $this->image;
    }

    public function getDetail(){
        return $this->detail;
    }

    public function getOrderCount(){
        return $this->orderCount;
    }

    public function setOrderCount($orderCount) {
        $this->orderCount = $orderCount;
    }

    public function getTaxIncludedPrice(){
        return floor($this->price * 1.08);
    }

    public function getTotalPrice(){
        return $this->getTaxIncludedPrice()*$this->orderCount;
    }

    public static function getCount(){
        return self::$count;
    }

    public static function findByName($menus,$name){
        foreach($menus as $menu){
            if ($menu->getName()==$name){
                return $menu;
            }
        }
    }

    
}

?>
