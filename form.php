<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Define the file path where you want to save the form data
  $file_path = "form_data.txt";

  // Create or open the file for appending data
  $file = fopen($file_path, "a");

  if ($file) {
    // Prepare the data to be saved
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Write the data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    echo "Form data has been saved successfully.";
  } else {
    echo "Error: Unable to save form data.";
  }
}
?>
