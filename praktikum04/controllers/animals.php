<?php
class animal {
    public $animals = ["Kucing", "Kelinci", "Kangguru", "Harimau", "Ular"];
    
    function index(){
        echo "<ol>";
        foreach ($this->animals as $key => $value){
            echo "<li>$value</li>";
        }
        echo "</ol>";
    }
    function store($hewan){
        array_push($this->animals, $hewan);
        $this->index();
    }
    public function ubdate($key, $value){
        $this->animals[$key] = $value;
        // memanggil method index
        $this->index();
    }
    public function destroy($key){
        if(isset($this->animals[$key])) {
            unset($this->animals[$key]);
            // memanggil method
            $this->index();
        } else{
            echo "hewan tidak ditemukan";
        }
    }
}

$hewan = new animal();
echo "index - menampilkan seluruh data hewan<br>";
$hewan->index();
echo "<br>";
echo "Store - Menambahkan data hewan baru (Burung)<br>";
$hewan->store("Burung");
echo "<br>";
echo "Ubdate - mengubah data hewan<br>";
$hewan->ubdate(0,"Elang");
echo "<br>";
echo "hapus - menghapus data hewan<br>";
$hewan->destroy(0);
echo "<br>";
// echo $hewan->animals[0];
?>