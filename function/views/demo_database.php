<?php
// server info
    $serverName = "localhost";
    $serverUser = "root";
    $serverPassword = "root";
    $database = "t1904a";
// connect database
    $conn = new mysqli($serverName,$serverUser,$serverPassword,$database);
// check connection
    if($conn->connect_error){
        die("Connection failed");
    }
    // Demo with prepare statement
    $sql_insert = "INSERT INTO users(username,email,password,age,address,telephone) 
                    VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("sssiss",$u,$e,$p,$a,$ad,$t);
//    $u= $_POST["username"];
//    $e= $_POST["email"];
    $u = "userX4";
    $e = "userx4@local.com";
    $p = hash("md5","123456");
    $a = 25;
    $ad = "Hà Nội";
    $t = "09383747";
    $last_id = null;
    if($stmt->execute()){
        $last_id = $conn->insert_id;
    }
  //  echo "Connect successfully";
// Query sql
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           // echo $row["id"].$row['username'].$row["email"];
            $users[] =  $row;
        }
    }else{
        echo "No result found";
    }
?>
<?php foreach ($users as $u):?>
<p><?php echo $u["id"]."-".$u["username"]."-".$u['email'];?></p>
<?php endforeach;?>

