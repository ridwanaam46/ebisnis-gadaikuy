<?php
include('conn.php');

// == fungsi login ==
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['passname'];

  $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");
  $row = mysqli_fetch_array($query);

  session_start();
  $SESSION['username'] = $username;
  $SESSION['password'] = $password;

  if ($username == $row['username'] && $password == $row['password']){
    echo '
    <script language="javascript">
    document.location ="index.html";
    </script>
    ';

  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("Failed to login!");
    document.location ="logins.html";
    </script>
    ';
  }

}
 ?>
