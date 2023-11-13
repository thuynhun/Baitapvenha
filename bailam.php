<?php
// câu 1
    echo '1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không'.'<br>';
    $a = 8; 
    if($a % 2 ==0 ){
        echo $a. ' là số chẵn';
    }else {
        echo $a. ' là số lẻ';
}
// câu 2
    echo "<br>".'2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.'.'<br>';
    $n = 3;
    $sum = 0;
    echo 'n = '.$n.'<br>';
    for($i = 1; $i <= $n; $i++) {
        $sum+=$i;
    }
    echo 'Tổng từ 1 đến '.$n.' là: '.$sum;
?>
<!--câu 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br>".'3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.'.'<br>';
    ?>
    <table border="1px" width='100%'>
        <?php 
            for($i = 1; $i <=10; $i++){
                if($i == 1 || $i==6){
                    echo '<tr>';
                }
                echo '<td>';
                for($j = 1; $j <=10; $j++) {
                    echo $i.' x '.$j. '=' .$i*$j.'<br>'; 
                }
                echo '</td>';
                if($i == 5 || $i==10){
                    echo '</tr>';
                }
            }
        ?>

    </table>
</body>
</html>
<?php
// câu 4
    echo "<br>".'4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.'.'<br>';
    $str1 = "doan quang thang";
    $str2 = "quang";
    if(strpos($str1, $str2) !== FALSE) {
        echo $str1.' có chứa từ '.$str2;
    }else {
        echo $str1.' không chứa từ '.$str2;
    }
// Câu 5
    echo "<br>".'5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.'.'<br>';
    $a = array(2, 4, 5, 1, 7);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo '<br>';
    echo 'Giá trị nhỏ nhất của mảng đó là: '. min($a);
    echo '<br>';
    echo 'Giá trị lớn nhất của mảng đó là: '. max($a);
// câu 6
    echo "<br>".'6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.'.'<br>';
    $a = array(2, 3, 4, 1, 5, 7);
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    sort($a);
    echo 'Mảng theo thứ tự tăng dần là: ';
    foreach($a as $value){
        echo $value." ";
    }
// câu 7
    echo '<br>'.'7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.'.'<br>';
    $n = 10; 
    $gt = 1; 
    for($i = 2; $i <= 10; $i++){
        $gt = $gt * $i;
    }
    echo 'Giai thừa của '.$n.' là: '.$gt;
// câu 8
    echo '<br>'.'8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.'.'<br>';
    $start = 3;
    $end = 20; 
    echo "Các số nguyên tố trong khoảng từ ".$start." đến ".$end." là: ";
    for($i = $start; $i <= $end; $i++) {
        $flag = 0;
        for($j = 2; $j <= sqrt($i); $j++){
            
            if($i % $j == 0){
                $flag++;
            }
            
        }
        if($flag == 0){
            echo $i.' ';
        }
        
    }

// câu 9
    echo "<br>"."9. Viết chương trình PHP để tính tổng của các số trong một mảng."."<br>";
    $a = array(2, 3, 4, 6, 7);
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    $sum = 0;
    foreach($a as $value){
        $sum += $value;
    }
    echo 'Tổng của mảng là: '.$sum;
// câu 10
    echo "<br>"."10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước."."<br>";
    function fbnc($start, $end) {
        $fibonacci = array();
        $a = 0;
        $b = 1;
        while ($a <= $end) {
            if ($a >= $start) {
                $fibonacci[] = $a;
            }
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        echo "Các số Fibonacci trong khoảng từ $start đến $end: ";
        foreach ($fibonacci as $number) {
            echo $number . " ";
        }
    }
    $start = 10;
    $end = 100;
    fbnc($start, $end);
// câu 11
    echo "<br>"."11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không."."<br>";
    function ast($n){
        $sum = 0;
        $n_str = (string) $n;
        for($i = 0; $i < strlen($n_str); $i++){
            $sum += $n_str[$i] * $n_str[$i] * $n_str[$i];
        }
        if($sum == $n){
            echo "$n có là số Armstrong";
        }else {
            echo "$n không là số Armstrong";
        }
    }
    ast(20);
    echo "<br>"."12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ."."<br>";
    $a = array(3, 4, 5, 8);
    $length = 0;
    foreach($a as $value){
        $length++;
    }
    function insert($gt, $vt){
        global $a, $length;
        for($i = 0; $i <= $length; $i++){
            if($vt == $i){
                for($j = $length; $j > $i; $j--){
                    $a[$j] = $a[$j-1];   
                }
                $a[$i] = $gt;
            }
            
        }  
    }
    echo "Trước thêm: "."<br>";
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    insert(2, 2);
    echo "Sau thêm: "."<br>";
    echo '<pre>';
    print_r($a);
    echo '</pre>';
// câu 13
    echo "<br>"."13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng."."<br>";   
    function ktratrung($array) {
        return array_values(array_unique($array));
    }
    $arr13 = array(2, 1, 3, 4, 2, 4, 6, 7, 1);
     $arr13new = ktratrung($arr13);
    echo "Mảng sau khi loại bỏ các phần tử trùng lặp:"."<br>";
    echo "<pre>";
    print_r($arr13new);
    echo "</pre>";

// câu 14
    echo "<br>"."14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng."."<br>";
    $arr14 = array(2, 3, 4, 6, 7, 1);
    echo '<pre>';
    print_r($arr14);
    echo '</pre>';
    $a = 2;
    $length = 0;
    foreach($arr14 as $value){
        $length++;
    }
    $vt = 0;
    $flag = 0;
    for($i = 0; $i < $length; $i++) {
        if($arr14[$i] === $a){
            $vt = $i;
            $flag = 1;
            break;
        }
    }
    if($flag == 1){
        echo "Vị trí của phần tử ".$a." là ".$vt;
    }else{
        echo "Phần tử ".$a." không có trong mảng";
    }
// Câu 15
    echo "<br>"."15. Viết chương trình PHP để đảo ngược một chuỗi."."<br>";
    $a = "quang thang";
    echo $a."<br>";
    echo strrev($a);
// câu 16
    echo "<br>"."16.Viết chương trình PHP để tính số lượng phần tử trong một mảng."."<br>";
    $arr16 = array(1, 2, 3, 5, 7);
    echo '<pre>';
    print_r($arr16);
    echo '</pre>';
    $length = 0;
    foreach($arr16 as $value) {
        $length++;
    }
    echo "Độ dài của mảng là ".$length." phần tử";
// câu 17
    echo "<br>"."17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không."."<br>";
    function checkPalindrome($str){
        if($str == strrev($str)){
            echo "Đây là chuỗi Palindrome";
        }else {
            echo "Đây không là chuỗi Palindrome";
        }
    }
    checkPalindrome("12321");
// câu 18
echo "<br>"."18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng."."<br>";
    $arr18 = array(2, 3, 5, 1, 7, 3, 1);
    echo '<pre>';
    print_r($arr18);
    echo '</pre>';
    $length = 0;
    $a = 1;
    foreach($arr18 as $value) {
        $length++;
    }
    function solanxuathien($a) {
        $dem = 0;
        global $arr18, $length;
        for($i = 0; $i < $length; $i++){
            if($arr18[$i] == $a) {
                $dem++;
            }
        }
        return $dem;
    }
    echo "Số lần xuất hiện của ".$a." là: ".solanxuathien($a);

// câu 19
    echo "<br>"."19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần."."<br>";
    $arr19  = array(2, 1, 3, 4, 7, 6);
    echo '<pre>';
    print_r($arr19);
    echo '</pre>';
    rsort($arr19);
    echo 'Mảng theo thứ tự giảm dần là: ';
    foreach($arr19 as $value){
        echo $value." ";
    }
// câu 20
    echo "<br>"."20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng."."<br>";
    $arr20 = array(2, 3, 1, 4);
    echo "Mảng ban đầu: "."<br>";
    echo "<pre>";
        print_r($arr20);
    echo "</pre>";
    function themvaodaumang($arr, $a){
        array_unshift($arr, $a);
        return $arr;
    }
    function themvaocuoimang($arr, $a){
        $arr[] = $a;
        return $arr;
    }

    echo "Sau khi thêm vào đầu mảng: "."<br>";
    $arr20 = themvaodaumang($arr20, 3);
    echo "<pre>";
        print_r($arr20);
    echo "</pre>";
    echo "Sau khi thêm vào cuối mảng: "."<br>";
    $arr20 = themvaocuoimang($arr20, 9);
    echo "<pre>";
        print_r($arr20);
    echo "</pre>";
// Câu 21
    echo "<br>"."21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng."."<br>";
    $arr21 = array(2, 1, 4, 6, 5);
    echo '<pre>';
    print_r($arr21);
    echo '</pre>';
    rsort($arr21);
    echo "Số lớn thứ 2 trong mảng là: ".$arr21[1];
// câu 22
    echo "<br>"."22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương."."<br>";
    $ucln = 0;
    function ucln($a, $b){
        global $ucln;
        if($a == 0 || $b == 0){
            $ucln = $a + $b;
        }else {
            while($a != $b){
                if($a > $b){
                    $a = $a -$b;
                }else {
                    $b = $b - $a;
                }
            }
            $ucln = $a;
        }
        return $ucln;
    }
    echo "Ước chung lớn nhất của 4 và 8 là: " .ucln(4, 😎."<br>";
    function bcnn($a, $b){
        return ($a * $b) / ucln($a, $b);
    }
    echo "Bội chung nhỏ nhất của 4 và 8 là: " .bcnn(4, 8);

// câu 23
    echo "<br>"."23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không."."<br>";
    function shh($a){
        $sum = 0;
        for($i = 1; $i < $a; $i++){
            if($a % $i == 0){
                $sum += $i;
            }
        }
        if($sum == $a) {
            echo "$a là số hoàn hảo";
        }else {
            echo "$a không là số hoàn hảo";
        }
    }
    shh(28);
// câu 24
    echo "<br>"."24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng."."<br>";
    $arr24 = array(2, 3, 4, 1, 5, 7, 6);
    echo '<pre>';
    print_r($arr24);
    echo '</pre>';
    function solemax($arr) {
        rsort($arr);
        foreach($arr as $value){
            if($value % 2 != 0){
                echo "Số lẻ lớn nhất của mảng là: $value";
                break;
            }
        }
    }
    solemax($arr24);

// câu 25
    echo "<br>"."25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không."."<br>";
    function ktrasnt($n){
        if($n <= 1){
            echo $n.' không phải số nguyên tố';
        }
        $flag = null;
    if($n > 1) {
            for($i = 2; $i < $n; $i++){
                if($n % $i == 0){
                    $flag++;
                    break;
                }
            }
            if($flag == 0) echo $n.' có là số nguyên tố';
            else echo $n.' không phải số nguyên tố';
        }
    }
    ktrasnt(8);

// câu 26
    echo "<br>"."26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng."."<br>";
    $arr26 = array(2, 3, -1, 4, 5, 6);
    echo "<pre>";
        print_r($arr26);
    echo "</pre>";
    function maxx($arr){
        rsort($arr);
        foreach($arr as $value){
            if($value > 0){
                return $value;
            }
        }
    }
    echo "Số dương lớn nhất của mảng trên là: ".maxx($arr26);

// câu 27
    echo "<br>"."27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.."."<br>";
    $arr27 = array(2, 3, -1, -4, -5, 6);
    echo "<pre>";
        print_r($arr27);
    echo "</pre>";
    function maxxam($arr){
        rsort($arr);
        foreach($arr as $value){
            if($value < 0){
                return $value;
            }
        }
    }
    echo "Số âm lớn nhất của mảng trên là: ".maxxam($arr27);

// câu 28
    echo "<br>"."28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n."."<br>";
    function sumle($n){
        $sum = 0;
        for($i = 1; $i <= $n; $i++){
            if($i % 2 != 0){
                $sum += $i;
            }
        } 
        return $sum;
    }
    echo "Tổng các số lẻ từ 1 đến 10 là ".sumle(10);
// câu 29
    echo "<br>"."29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước."."<br>";
    function scp($start, $end){
        echo "Số chính phương trong đoạn từ $start đến $end là: ";
        for($i = $start; $i <= $end; $i++){
            if(pow(round(sqrt($i)),2) == $i) {
                echo $i." ";
            }
        }
    }
    scp(1, 10);
// câu 30
    echo "<br>"."30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không."."<br>";
    function checkstr($str1, $str2){
        // global $str30, $str30_2;
        $check30 = strpos($str1, $str2);
        if($check30 !== FALSE){
            echo "Chuỗi $str2 là chuỗi con của $str1";
        }else {
            echo "Chuỗi $str2 không là chuỗi con $str1";
        }
    }
    checkstr("thuy nhung", "nhung");
?>