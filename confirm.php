<?php include 'header.php'; ?>

<?php

$headingFromForm = $_POST['heading'];
$durationFromForm = $_POST['duration'];
$tripdateFromForm = $_POST['tripdate'];
$fileFromForm = $_POST['myfile'];
$summaryFromForm = $_POST['summary'];

echo "heading $headingFromForm";

$sql = "INSERT INTO trips (heading, duration, tripdate, myfile, summary)
VALUES ('$headingFromForm', '$durationFromForm', '$tripdateFromForm', '$fileFromForm', '$summaryFromForm')";

if (mysqli_query($conn, $sql)) {
    echo "New record has been created successfully";
} else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
}
?>

<a href="admin-all-adventures.php">All Adventures</a>

<?php include 'footer.php'; ?>