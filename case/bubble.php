// buble sort
<?php 
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr; //kembalikan nilai yang sudah disorting
}
//end bubble sort
 
//Contoh Penggunaan
$arr = array(0,1,2,3,5,4,6,7,8,9); //data angka yang akan disorting
$arr = bubble_sort($arr); //gunakan fungsi sorting
 
//tampilkan hasil sorting
print_r($arr);
?>