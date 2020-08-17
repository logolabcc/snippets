<?php

/*** S: Function which cleans string from special characters and spaces ***/

function cleanString($string){
    // Replaces all spaces with hyphens.
    $string = str_replace(' ', '', $string); 
    
    // Removes special characters (every one of them) and return cleaned string
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}

/*** E: Function which cleans string  from special characters and spaces ***/


