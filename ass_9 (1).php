<!DOCTYPE html>
<html>
<head>
  <title>Input Form</title>
</head>
<body>
  <h1>Input Form</h1>
  <form action ="display.php" method="POST">
    <label for="year">Enter Year:</label>
    <input type="textbox" name="year" id="year" required><br><br>
    
    <label>Class Grades:</label><br>
    <input type="radio" name="grades" value="First Class" id="firstClass">
    <label for="firstClass">First Class</label><br>
    <input type="radio" name="grades" value="Second Class" id="secondClass">
    <label for="secondClass">Second Class</label><br>
    <input type="radio" name="grades" value="Pass" id="pass">
    <label for="pass">Pass</label><br>
    <input type="radio" name="grades" value="Fail" id="fail">
    <label for="fail">Fail</label><br><br>


    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
<?php
    $conn = mysqli_connect('localhost', 'root', '', '');
    if(isset($_POST['submit'])) {
 
      $year = $_REQUEST['year'];
      $grades = $_REQUEST['grades'];


        mysqli_select_db($conn,"university");
        $sql = 'SELECT * FROM student WHERE passingyear = ? AND classgrade = ?';


     
        $stmt = mysqli_prepare($conn, $sql);
    


        mysqli_stmt_bind_param($stmt, 'is', $year, $grades);
        
  
        mysqli_stmt_execute($stmt);
        


      $result = mysqli_stmt_get_result($stmt);


      if (mysqli_num_rows($result) > 0) {


        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>Roll No: ' . $row['rollno'] . '</p>';
            echo '<p>Name: ' . $row['studname'] . '</p>';
            echo '<p>Department: ' . $row['studdept'] . '</p>';
            echo '<p>Passing Year: ' . $row['passingyear'] . '</p>';
            echo '<p>Class Grades: ' . $row['classgrade'] . '</p>';
            echo '<hr>';
        }
    } else {


        echo 'No records found';
    }
       mysqli_close($conn);
    }
  ?>
