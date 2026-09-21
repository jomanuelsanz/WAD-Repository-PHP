<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stars Table</title>
</head>

<body>

    <h1>Stars Table</h1>

    <?php
    // Define a variable with the number of rows we want to create.
    $number = 5;

    // Start the HTML table.
    echo "<table border='1'>";

    // This for loop creates the rows of the table.
    // The variable $row starts at 1 and increases by 1 until it reaches $number.
    for ($row = 1; $row <= $number; $row++) {

        // Create a new table row.
        echo "<tr>";

        // This variable will store the stars for the current row.
        $stars = "";

        // This second for loop creates as many stars as the current row number.
        // For example:
        // Row 1 -> 1 star
        // Row 2 -> 2 stars
        // Row 3 -> 3 stars
        for ($column = 1; $column <= $row; $column++) {

            // Add one star to the $stars variable.
            $stars = $stars . "*";
        }

        // Put the stars inside a table cell.
        echo "<td>" . $stars . "</td>";

        // Close the table row.
        echo "</tr>";
    }

    // Close the HTML table.
    echo "</table>";
    ?>

</body>

</html>