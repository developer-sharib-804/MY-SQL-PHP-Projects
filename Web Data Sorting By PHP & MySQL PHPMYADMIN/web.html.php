<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <input type="text" name="stuname" placeholder="first-name">
<input type="text" name="stunames" placeholder="last-name"> -->
   <form action="" method="POST">
   <select name="gender" id="">
   <option value="select">select</option>
   <option value="female">Female</option>
        <option value="male">Male</option>
    </select>
   <!-- <input type="text" name="stufees" placeholder="fees">
   <input type="text" name="studob" placeholder="DOB"> -->
    <form action="" method="POST">
   <select name="city" id="">
   <option value="karachi">karachi</option>
        <option value="lahore">lahore</option>
        <option value="hyderabad">hyderabad</option>
        <option value="islamabad">islamabad</option>
        <option value="gujrawala">gujrawala</option>
        <option value="quetta">quetta</option> 
        <option value="lahore">kashmir</option>      
    </select>
    <form action="" method="POST">
   <select name="course" id="">
   <option value="">select</option>
   <option value="cit">cit</option>
        <option value="dit">dit</option>
        <option value="web">web</option>
        <option value="graphic design">graphic design</option>
    </select>
    <form action="" method="POST">
   <select name="timing" id="">
   <option value="7to8">7to8</option>
        <option value="8to9">8to9</option>
        <option value="6to7">6to7</option>
        <option value="5to6">5to6</option>
    </select>
   
    <input type="text" name="fees" placeholder="fees">
   <input type="text" name="dob" placeholder="DOB">
    <input type="text" name="age" placeholder="age">
    <input type="submit" value="Filter" name="filter">
    <input type="submit" value="sorting" name="sorting">
     <input type="submit" value="cour" name="cour"> 

   </form>
</body>
</html>
</form>
<?php
if(isset($_POST['filter'])){
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $course = $_POST['course'];
    $timing = $_POST['timing'];
    $fees = $_POST['fees'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $server = "localhost";
    $user = "root" ;
    $password = "";
    $db = "students";
    $conn = mysqli_connect($server , $user , $password , $db);
    $select = "SELECT * FROM data WHERE gender ='$gender' OR fees > '$fees' OR  timing ='$timing'
   OR age ='$age'  OR course ='$course' OR city='$city' " ;
    $result = mysqli_query($conn , $select);
    if(mysqli_num_rows($result) > 0 ){ ?>
        <table border="1">
            <tr>
                <th>Sno</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Fees</th>
                <th>contact</th>
                <th>timing</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
            
       
      <?php  
          while( $row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php   echo  $row['id'] ; ?></td>
                <td><?php   echo  $row['first_name']; ?></td>
                <td><?php  echo   $row['last_name']; ?></td>
                <td><?php  echo   $row['course']; ?></td>
                <td><?php  echo   $row['gender']; ?></td>
                <td><?php  echo   $row['fees']; ?></td>
                <td><?php  echo   $row['contact']; ?></td>
                <td><?php  echo   $row['timing']; ?></td>
                <td><?php  echo   $row['dob']; ?></td>
                <td><?php  echo   $row['email']; ?></td>
                <td><?php  echo   $row['age']; ?></td>
                <td><?php  echo   $row['city']; ?></td>
            </tr>
            <?php
         
          
           
          } 
    
           
    }
    
    ?>
     </table>  
     <?php 
 }
 if (isset($_POST['sorting'])){
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $course = $_POST['course'];
    $timing = $_POST['timing'];
    $fees = $_POST['fees'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $server = "localhost";
    $user = "root" ;
    $password = "";
    $db = "students";
    $conn = mysqli_connect($server , $user , $password , $db);
    $select = "SELECT * from data ORDER BY id DESC";
    $result = mysqli_query($conn , $select);
    if(mysqli_num_rows($result) > 0 ){ ?>
        <table border="1">
            <tr>
                <th>Sno</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Fees</th>
                <th>contact</th>
                <th>timing</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
            
       
      <?php  
          while( $row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php   echo  $row['id'] ; ?></td>
                <td><?php   echo  $row['first_name']; ?></td>
                <td><?php  echo   $row['last_name']; ?></td>
                <td><?php  echo   $row['course']; ?></td>
                <td><?php  echo   $row['gender']; ?></td>
                <td><?php  echo   $row['fees']; ?></td>
                <td><?php  echo   $row['contact']; ?></td>
                <td><?php  echo   $row['timing']; ?></td>
                <td><?php  echo   $row['dob']; ?></td>
                <td><?php  echo   $row['email']; ?></td>
                <td><?php  echo   $row['age']; ?></td>
                <td><?php  echo   $row['city']; ?></td>
            </tr>
            <?php
         
          
           
          } 
    
           
    }
    
    ?>
     </table>  
     <?php 
 }
 if (isset($_POST['cour'])){
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $course = $_POST['course'];
    $timing = $_POST['timing'];
    $fees = $_POST['fees'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $server = "localhost";
    $user = "root" ;
    $password = "";
    $db = "students";
    $conn = mysqli_connect($server , $user , $password , $db);
    $select = "SELECT * FROM `data` WHERE gender='$gender' AND city='$city' AND course='$course' 
    AND timing='$timing' AND fees='$fees'AND dob='$dob' AND age='$age' ";
    $result = mysqli_query($conn , $select);
    if(mysqli_num_rows($result) > 0 ){ ?>
       <table border="1">
            <tr>
                <th>Sno</th>
                 <th>First Name</th>      
                 <th>Last Name</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Fees</th>
                <th>contact</th>
                 <th>timing</th>
                 <th>DOB</th>
                 <th>Email</th>
                 <th>Age</th>
                <th>City</th>
             </tr>
         
       
    <?php  
           while( $row = mysqli_fetch_assoc($result)){ ?>
             <tr>
                <td><?php   echo  $row['id'] ; ?></td>
               <td><?php   echo  $row['first_name']; ?></td>
                 <td><?php  echo   $row['last_name']; ?></td>
                <td><?php  echo   $row['course']; ?></td>
                <td><?php  echo   $row['gender']; ?></td>
                 <td><?php  echo   $row['fees']; ?></td>
                <td><?php  echo   $row['contact']; ?></td>
                <td><?php  echo   $row['timing']; ?></td>
                <td><?php  echo   $row['dob']; ?></td>
                <td><?php  echo   $row['email']; ?></td>  
               <td><?php  echo   $row['age']; ?></td>
                 <td><?php  echo   $row['city']; ?></td>
             </tr>
            <?php
         
          
           
           } 
    
           
   }
    
     ?>
     </table> 
     

     <?php  

}
 
  ?>

