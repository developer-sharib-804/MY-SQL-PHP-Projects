<?php

if(isset($_GET['submit'])){

    if(empty($_GET['fname']) OR empty($_GET['lname']) OR empty($_GET['aname']) OR empty($_GET['dname']) 
    OR empty($_GET['bname']) OR empty($_GET['gname'])   OR empty($_GET['jname']) OR empty($_GET['uname']) 
     OR empty($_GET['sname'])  ){
        echo "<script>alert('please enter some text:');</script>";
    }
    else{
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "students";
     $conn = mysqli_connect($servername , $username , $password , $db);
     $fname = $_GET['fname'] ;
     $lname = $_GET['lname'] ;
     $aname = $_GET['aname'] ;
     $dname = $_GET['dname'] ;
     $bname = $_GET['bname'] ;
     $gname = $_GET['gname'] ;
     $jname = $_GET['jname'] ;
     $uname = $_GET['uname'] ;
     $sname = $_GET['sname'] ;
     $zname = $_GET['zname'] ;
     $wname = $_GET['wname'] ;

    $sql = "INSERT INTO `data` (`first_name`, `last_name`, `course`,
     `gender`, `fees`, `timing`, `contact`, `dob`, `email` , `age` , `city`) 
    VALUES ('$fname' , '$lname' , '$aname' , '$dname' , '$bname' , '$gname' , '$jname' , '$uname' , '$sname' , '$zname' , '$wname'   );" ;
    mysqli_query($conn , $sql);
        echo "data uploaded";
    }
}
?>

