<?php
include('connection.php');
session_start();
if($_POST){
  $dept = $_POST['MY_CONSTANT'];
}
else{
  $dept = $_SESSION['MY_VARIABLE'];
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Department Details</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../css/style-view.css">

</head>
<body>
  <div class="logo"><a target="_blank" rel="noopener noreferrer"><span class="l-initial">Bank</span>Mitra</a></div>
<!-- partial:index.partial.html -->
<div class="card" data-state="#about">
  <div class="card-header">
    <div class="card-cover" style="background-image: url('../img/emp.png')"></div>
    <img class="card-avatar" src="../img/emp.png" alt="avatar" />
    <h1 class="card-fullname">
    <?php
          $query = "SELECT Name FROM staff where dept='$dept';";
          $result = $con->query($query);
          if ($result->num_rows > 0) 
          {
            // OUTPUT DATA NAME
            while($row = $result->fetch_assoc())
            {
              echo "".$row["Name"]. "";
            }
          }
          ?>
    </h1>
    <h2 class="card-jobtitle"><?php echo "".$dept."" ?></h2>
  </div>

  <div class="card-main">
    <div class="card-section is-active" id="about">
      <div class="card-content">
        <div class="card-subtitle">ABOUT</div>
        <p class="card-desc"> 
        Desk No:
          <?php
          $query = "SELECT Desk FROM staff where dept='$dept';";
          $result = $con->query($query);
          if ($result->num_rows > 0) 
          {
            // OUTPUT DATA OF DESK
            while($row = $result->fetch_assoc())
            {
              echo "".$row["Desk"]. "";
            }
          } 
          ?>
          <br>
          Status: 
          <?php
          $query = "SELECT Status FROM staff where dept='$dept';";
          $result = $con->query($query);
          if ($result->num_rows > 0) 
          {
            // OUTPUT DATA STATUS
            while($row = $result->fetch_assoc())
            {
              echo "".$row["Status"]. "";
            }
          } 
          ?>     
          <br>
          Time:
          <?php
          $query = "SELECT Time FROM staff where dept='$dept';";
          $result = $con->query($query);
          if ($result->num_rows > 0) 
          {
            // OUTPUT DATA OF TIME
            while($row = $result->fetch_assoc())
            {
              echo "".$row["Time"]. "";
            }
          } 
          ?>       
        
        </p>
      </div>
    </div>
    <form action="isadmin.php" method="post" class="card-buttons">
      <button data-section="#about" class="is-active">Home</button>
    </form>
  </div>
</div>
<!-- partial -->

</body>
</html>
