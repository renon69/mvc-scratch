<?php

// Define the show function to display variable contents in a formatted manner
function show($stuff) 
{
    echo "<pre>";   // Start formatting output
    print_r($stuff); // Display the contents of the variable
    echo "</pre>";  // End formatting output
}

// Define the splitUrl function to split the URL parameter
function splitURL() {
    
    $URL = $_GET['url'] ?? 'home'; // Get the value of the 'url' parameter from the query string or use 'home' as the default value
    $URL = explode("/", $URL);     // Split the URL into an array using the forward slash ('/') as the delimiter
    return $URL;                   // Return the resulting array
    
}

show(splitURL()); // Call the splitUrl function and display its result using the show function

?>
