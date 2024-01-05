<?php
session_start();
include('connection.php');
$dept = $_POST['MY_CONSTANT'];
$_SESSION['MY_VARIABLE'] = $dept;
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Details</title>
  <link rel="stylesheet" href="../css/style-edit.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo"><a target="_blank" rel="noopener noreferrer"><span class="l-initial">Bank</span>Mitra</a></div>

<div class="form-structor">
<form action="update.php?" method="post">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Update</h2>
		<div class="form-holder">
			<input name="Name" type="text" class="input" placeholder="Name" />
			<input name="Status" type="text" class="input" placeholder="Status" />
			<input name="Time" type="text" class="input" placeholder="Time" />
		</div>
		<button class="submit-btn">Edit</button>
	</div>
</form>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>View</h2>

		<!-- View Card -->

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

    <div class="card-buttons">
      <button data-section="#about" class="is-active">ABOUT</button>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="../script/script-edit.js"></script>

</body>
</html>
