<?PHP
session_start();
include 'db_connect.php';

ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);

if(!empty($_FILES['uploaded_file']))
{
    $path = "images/[filename]";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "The file ".  basename( $_FILES['uploaded_file']['name']).
            " has been uploaded";

    } else{
        echo "There was an error uploading the file, please try again!";
    }
}
?>
