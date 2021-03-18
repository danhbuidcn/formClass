<?php 
    $arr=[
        ["id"=>0,'name'=>'bui van Thuong'],
        ["id"=>1,'name'=>'bui van Nam'],
        ["id"=>2,'name'=>'bui van An']
    ];
    $c=count($arr);// đếm số mảng đa chiều
    // tạo một mảng Copy name= last name
    for($i=0;$i<$c;$i++){

        $aCopy[$i]['id']=$i;// gán giá trị name cho mảng đa chiều

        $arrItem=explode(" ",$arr[$i]['name']);// chuyển chuỗi thành mảng
        $lastElem=count($arrItem)-1;// lấy phần tử cuối cùng của mảng chính là last name
        $name=$arrItem[$lastElem];
        $aCopy[$i]['name']=$name;
    }
        // sắp xếp
        $keys = array_column($aCopy, 'name');

        $result = array_multisort($keys, SORT_ASC, $aCopy);
        // hiển thị mảng chứ tên
        foreach($aCopy as $item){
            echo "<p><b>Sinh viên</b></p>";
            echo "<ul>";
            foreach($item as $value)
            {
                echo "<li>".$value."</li>"; 
            }
            echo "</ul>";
        }
        // hiển thị mảng đầu tiên
        $countItem=count($arr[0]);
        echo($countItem);
        for($i=0;$i<$c;$i++){
            for($j=0;$j<$c;$j++){
                if($aCopy[$i]['id']==$arr[$j]['id']){
                    echo "<span>".$arr[$j]['id']."</span>";
                    echo " - <span>".$arr[$j]['name']."</span>";
                }
                echo("<br>");
            }
        }
?>