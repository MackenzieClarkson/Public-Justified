<?php
$db = new mysqli('localhost', 'root', '', 'lab');

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS" . '<br />';
}

// Query to return data from your database
$result = $db->query("SELECT * FROM sample");
$indexresult = $db->query("SELECT * FROM index")
// check if the query succeeded
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}
if (!$indexresult){
    die('There was an error running the query index result[' . $db->error . ']');
}
// Display the results of the query for each row
echo "DISPLAYING THE QUERY RESULTS:" . '<br />';
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . ', ';
    echo $row['email'] . ', ';
    echo $row['dropdown'] . ', ';
    echo $row['checkbox'] . ', ';
    echo $row['radio'] . ', ';
    echo $row['message'] . '<br />';
}

// Display the number of rows returned by query
echo 'Total number rows returned: ' . $result->num_rows;


// Close the database connection
$result->free();
$db->close();

?>
