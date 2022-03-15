<?php
enum Element{
    case Fire;
    case Water;
    case Earth;

}

class Data{
    public int $number;
    public string $data;
    public array $list = [1,2,3,"four","five"];
    public function __construct(int $number, string $data)
    {
        $this->number = $number;
        $this->data = $data;
//        $this->array = $list;
    }

}
$glob = 1;
$obj = new Data(123, "joshua");

foreach ($obj as $property){
    if(is_array($property)){
        var_dump($property);
    }else{
        echo $property."\n";
        $glob++;
    }
}