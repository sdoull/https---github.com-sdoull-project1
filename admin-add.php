<?php include 'header.php'; ?>


<Body class=addtrip>
   <form action="confirm.php" method="post"> 
    <div class="bg-img">
        <div>
            <form action="/action_page.php" class="container">
                <h1>Admin- Add Adventure</h1>
        </div>

        <div> 
            <label for="Heading"><b>Heading</b></label>
            <input type="text" placeholder="" name="heading" required>
        </div>

        <div> 
            <label for="Duration"><b>Duration</b></label>
            <input type="text" placeholder="" name="heading" required>
        </div>

        <div> 
            <label for="tripDate">Trip Date:</label>
            <input type="date" id="TripDate" name="Trip Date">
        </div>

        <div> 
            <input type="file" id="myFile" name="filename">
        </div>

        <div>
             <label for="summary" class="summ"><b>summary</b></label>
            <input type="text" placeholder="" name="sum" required>
        </div>

        <div> 
            <button type="trsubmit" class="tribtn">Submit</button>
            </form>
        </div>
    </div>
</form>
</Body>
<?php include 'footer.php'; ?>