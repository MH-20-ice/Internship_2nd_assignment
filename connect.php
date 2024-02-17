<?
    $name=$_POST['name'];
    $father_name=$_POST['father_name'];
    $mother_name=$_POST['mother_name'];
    $birth=$_POST['birth'];
    $gender=$_POST['gender'];
    $degree_name=$_POST['degree_name'];
    $session=$_POST['session'];
    $reg=$_POST['reg'];
    $batch=$_POST['batch'];
    $passing_year=$_POST['passing_year'];
    $graduation_session=$_POST['graduation_session'];
    $cgpa=$_POST['cgpa'];
    $degree_name2=$_POST['degree_name2'];
    $session2=$_POST['session2'];
    $reg2=$_POST['reg2'];
    $batch2=$_POST['batch2'];
    $passing_year2=$_POST['passing_year2'];
    $graduation_session2=$_POST['graduation_session2'];
    $cgpa2=$_POST['cgpa2'];
    $per_address=$_POST['per_address'];
    $pre_address=$_POST['pre_address'];
    $gmail=$_POST['gmail'];
    $mobile=$_POST['mobile'];
    $off_address=$_POST['off_address'];
    $amount=$_POST['amount'];
    $bkash=$_POST['bkash'];
    $branch=$_POST['branch'];
    $tid=$_POST['tid'];
    $date=$_POST['date'];
   
    //database connection
    $conn= new mysqli('localhost','root','','intern_2');
    if($conn->connect_error)
    {
        die('Conection Failed: '.$conn->connect_error);
    }
    else{
        $stmt =$conn->prepare("insert into registration(name,father_name,mother_name,gender)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$father_name,$mother_name,$gender);
        $stmt->execute();
        $stmt->close();
        $conn->close();

    }


?>