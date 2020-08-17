<?php

/*** S: Function which cleans string from special characters and spaces ***/

function cleanString($string){
    // Replaces all spaces with hyphens.
    $string = str_replace(' ', '', $string); 
    
    // Removes special characters (every one of them) and return cleaned string
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}

/*** E: Function which cleans string  from special characters and spaces ***/


/*** S: Function which checks does username exists in the database and returns true or false ***/

// PS: Change table name here accordingly
// PPS: Connection class is singleton, so use something similar or change accordingly
function checkUsernameExists($data){
    // Get the data and clean it
    $username = $data['username'];
    $username = cleanString($username);
    
    // Get connection to the database
    $connection = Connection::instance();
    $db = $connection->connect();
    
    // Check does user with the username provided exists inside the database
    $sql = "SELECT username FROM Wo_Users WHERE username LIKE '%{$username}%'";
    
    // Check do query works
    if($result = $db->query($sql)){
        // Check if we have results. If we have, then we are returning true (username already in database)
        if(mysqli_num_rows($result) >= 1){
            // Username exists
            return true;   
        }
    }
    // If we don't have results, username doesn't exists
    return false;
    
}
/*** E: Function which checks does username exists in the database and returns true or false ***/