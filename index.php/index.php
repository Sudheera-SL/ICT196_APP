
<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<?php


$stdName = $stdRegNum ;


<form>

  Name : <input type="text" name="stdName" value="<?php echo $name;?>">
  <br><br>
  Regno : <input type="text" name="stdRegno" value="<?php echo $regno;?>">
  <br><br>
  <input type="submit" value="submit" id="click"onclick="display()"><

</form>

?>

<?php

class Student {
    public $stdName;
    public $stdRegNum; 

public function__construct ($stdRegNum ,$stdName){
    $this->stdName =$stdName;
    $this->stdRegNum =$stdRegNum;
}
}


class StudentChilid extends Student {
    public function display(){
        echo"The student name is {$this->stdName} and the Registration Number is {$this->stdRegNum}";
    }
}

?>


</body>
</html>