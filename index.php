<?php include "header.php" ?>


    <div>
        <a href="logout.php" class="rightSide paddingRightOnly">Logout</a>

    </div>

    <div id="welcomeBox" class="welcomeBox">

        <h1 class="middleText2a">Welcome to you IT Support System</h1>
        <br>

        <form action="problem.php" method="POST">

            <div class="whiteBgleftSide">

         
                <select name="theTitle" class="firstFormFieldinARow">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Dr">Dr</option>
                    <option value="Mx">Mx</option>
                </select>

                <input  class=firstname name="firstName" type="text" class="inARow" placeholder="First Name">

                <input class=lastname name="lastName" type="text" class="inARow" placeholder="Last Name">

                <!-- Remember theRole is what is being sent through the form -->
                <select  name="theRole" class="inARow">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
            </div>

            <input type="submit" name="submit" value="Submit" class="lastFormFieldblueButton">


        </form>


        <br>


    </div>
</body>

<?php include 'footer.php'; ?>