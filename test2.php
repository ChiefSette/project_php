<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedValue = $_POST["selectedValue"];

    // Assuming you have an array of options based on the selected value
    $options = array();
    if ($selectedValue === "option2") {
        $options = array("All", "Paid", "Pending");
    } elseif ($selectedValue === "option1") {
        $options = array();
    } elseif ($selectedValue === "option3") {
        $options = array();
    }

    // Generate the dynamic dropdown based on the options array
    $dropdown = '';
    foreach ($options as $option) {
        $dropdown .= '<option value="' . $option . '">' . $option . '</option>';
    }

    echo $dropdown;
}
?>
