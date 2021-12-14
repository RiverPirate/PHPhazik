<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        // put your code here
        $fhiba;
        $lhiba;
        $ehiba;
        $ahiba;
        $formhiba;
        $elkelladnodalelkedhiba;
        $joe=true;
        
        if(isset($_POST['submit'])){
            
            // first name check
            if(empty($_POST['firstName'])){
                $joe=false;
                $fhiba="ures";
            }
           if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['firstName'])){
             $fhiba="jo";
                }else{
            $fhiba="rosszkarakterek";
            $joe=false;
            }
            
            //last name check
             if(empty($_POST['lasttName'])){
                $joe=false;
                $fhiba="ures";
            }
           if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['lastName'])){
             $fhiba="jo";
                }else{
            $fhiba="rosszkarakterek";
            $joe=false;
            }
            
            
            //email check
            if(empty($_POST['email'])){
                $ehiba="ures";
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $ehiba = "rossz";
}
            //attend check
 $helyes=array("application/pdf");

               if(empty($_POST['attend'])){
                   $ahiba="ures";
                           $joe=false;
               }
               
               //form check
                if($_FILES['abstract']['name'] == ""){
                $joe=false;
                $formhiba="ures";
            }
            
            if ($_FILES['abstract']['size'] > 1024 * 1024 * 5) {
                $joe=false;
        $formhiba = "nagy";
    }
           
            if (!in_array($_FILES['abstract']['type'], $helyes)) {
        $formhiba = "nempdf";
        $joe = false;
    }
    // szerzodesi feltetelek check
   if(!isset($_POST['terms'])){
       $elkelladnodalelkedhiba="ures";
       $joe=false;
   }
   
   
   //osszesites
   
   if($joe){
       echo "first name".$_POST['firstName']."<br>";
       echo "last name".$_POST['lastName']."<br>";
       echo "email".$_POST['email']."<br>";
       foreach ($_POST['attend']as$a){
           echo $a."<br>";
       }
       echo "tshirt".$_POST['tshirt']."<br>";
       
   }
   else{
       if($fhiba=="ures")           echo 'thre is no first name';
       if($fhiba=="rosszkarakterek") echo 'unknown characters';
        if($lhiba=="ures")           echo 'thre is no last name';
       if($lhiba=="rosszkarakterek") echo 'unknown characters';
        if($email=="ures")           echo 'thre is no email name';
       if($email=="rosszkarakterek") echo 'wrong email adress';
        if($ahiba=="ures")           echo 'empty attemp';
        if( $ahiba=="ures")            echo 'link a file';
        if($formhiba == "nagy")            echo 'the file is to big';
        if($formhiba == "nempdf")            echo 'the file is not pdf format';
        if($elkelladnodalelkedhiba=="ures")            echo 'please sell your soul';
      
       
   }
        }
        ?>

<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>


