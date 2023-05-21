<?php include 'header.php'; ?>
<Body class=addtrip>
<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h1>Admin- Add Adventure</h1>

    <label for="Heading"><b>Heading</b></label>
    <input type="text" placeholder="" name="heading" required>

    <label for="TripDate"><b>Trip Date</b></label>
    <input type="tripdate" placeholder="" name="psw" required>

    <label for="Duration"><b>Duration</b></label>
    <input type="text" placeholder="" name="heading" required>

   
  <label for="tripDate">Trip Date:</label>
  <input type="date" id="TripDate" name="Trip Date">

  <input type="file" id="myFile" name="filename">
 


    <button type="submit" class="btn">Submit</button>
  </form>
</div>
</Body>
<?php include 'footer.php'; ?>