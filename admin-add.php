<?php include 'header.php'; ?>


<Body class=addtrip>
   <form action="confirm.php" method="post"> 
    <div class="bg-img" >
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
            <input type="text" placeholder="" name="duration" required>
        </div>

        <div> 
            <label for="tripDate">Trip Date:</label>
            <input type="date" id="tripdate" name="tripdate">
        </div>

        <div>
             <label for="summary" class="summary"><b>summary</b></label>
            <input type="text" placeholder="" name="summary" required>
        </div>

        <div> 
            <button type="trsubmit" class="tribtn">Submit</button>
            </form>
        </div>
    </div>
</form>
</Body>

<?php include 'footer.php'; ?>