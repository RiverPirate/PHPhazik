<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // 1 feladat
       $tomb=array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
       var_dump($tomb);
       
       echo '<br>';
       echo '<br>';
       //2feladat
       $orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
"Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
foreach ($orszagok as $a=>$b){
    print $a." fovarosa ".$b."<br>";
}

        echo '<br>';
        echo '<br>';
        //3 feladat
        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);
foreach ($napok as $napok){
    echo '<tr>';
    foreach ($napok as $j){
        echo "<td>$j</td>";
    }
    echo '</tr>';
    echo '<br>';
}

//4 feladat

        echo '<br>';
        echo '<br>';
        
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
        
        function alakit (array $tomb,string $meret):array{
            if($meret=="nagy"){
                foreach ($tomb as &$a) {
                $a = strtoupper($a);
            }
            
                }
            if($meret=="kicsi") {
                foreach ($tomb as &$a) {
                $a = strtolower($a);
            }
            
            }
            
            return $tomb;


        }
        
        $szinek=alakit($szinek, "nagy");
        foreach ($szinek as $a) {
    echo $a, " ";
}
        
                ?>
    </body>
</html>
