<?php

use Core\Session;

switch($code){
    case 404: 
        $message = "The requested page could not be found on the server. Please check the URL for any typos or navigate to a different page.";
        break;
    case 403:
        $message = "The resource you are trying to access is forbidden. Please ensure you have the necessary permissions to view this content.";
        break;
        default:
        $message = "Invalid request";
    }

view('error.php', [
    'title' => $code,
    'errors' => Session::get('errors') ?? [],
    'wildcard' => $code,
    'message' => $message
]);