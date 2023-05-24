<?php include 'header.php'; ?>

<?php
$headingFromForm = $_POST['heading'];
$durationFromForm = $_POST['duration'];
$tripdateFromForm = $_POST['tripdate'];
$summaryFromForm = $_POST['summary'];
echo "heading $headingFromForm";
$sql = "INSERT INTO trips (heading, duration, tripdate, summary)
VALUES ('$headingFromForm', '$durationFromForm', '$tripdateFromForm', '$summaryFromForm')";
if (mysqli_query($conn, $sql)) {
    echo "New record has been created successfully";
} else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
}
// $headingFromForm= $_POST['heading'];
// echo "here $headingFromForm<br> ";
// $durationFromForm = $_POST['duration'];
// echo "here $durationFromForm <br> ";
// $tripdateFromForm = $_POST['tripdate'];
// echo "here $tripdateFromForm <br> ";
// $summaryFromForm = $_POST['summary'];
// echo "here $summaryFromForm <br> ";
// ?>
<a href="admin-all-adventures.php">All Adventures</a>

<?php include 'footer.php'; ?>

