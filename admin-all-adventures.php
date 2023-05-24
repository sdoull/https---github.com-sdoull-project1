<?php include 'header.php'; ?>



<div id="mainContent">
	
	<h1>Upcoming Adventures</h1>
	<?php
	// Start sql for all adventures
	$sqlS = "SELECT trips FROM allAdventures ORDER BY tripdate DESC" ;
      if(mysqli_query($conn, $sqlS)){
          $result = $conn->query($sqlS);
          if ($result->num_rows > 0) {
          	// output data of each row
              while($row = $result->fetch_assoc()) {
              	$heading =  $row["heading"];
                $tripdate =  $row["tripdate"] ;
                $duration =  $row["duration"] ;
                $summary =  $row["summary"] ;
                echo "<h2>$heading </h2> ";
                echo "<h3>Date: $tripdate </h3> ";
  				echo "<h3>Duration: $duration </h3> ";
  				echo "<h3>Summary:</h3> <br> $summary ";}}}

             
	?>
</div>

<?php include 'footer.php'; ?>