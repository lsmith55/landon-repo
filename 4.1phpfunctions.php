<!DOCTYPE html>
<html>
<head>
    <title>PHP Functions Example</title>
</head>
<body>
    <h1>PHP Functions Example</h1>

    <?php
    
    function formatTimestampAsMMDDYYYY($timestamp) {
        return date('m/d/Y', $timestamp);
    }

  
    function formatTimestampAsDDMMYYYY($timestamp) {
        return date('d/m/Y', $timestamp);
    }

  
    function processString($input) {
        $num_characters = strlen($input);
        $trimmed_string = trim($input);
        $lowercase_string = strtolower($input);
        $contains_dmacc = stripos($input, "DMACC") !== false;
        
        return array(
            "num_characters" => $num_characters,
            "trimmed_string" => $trimmed_string,
            "lowercase_string" => $lowercase_string,
            "contains_dmacc" => $contains_dmacc
        );
    }

 
    function formatAsPhoneNumber($number) {
        return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $number);
    }

   
    function formatAsUSCurrency($number) {
        return '$' . number_format($number, 2);
    }

   
    $timestamp = time(); // Current timestamp
    $string_input = "   Hello, DMACC!   ";
    $number_input = 123456;

    $formatted_mmddyyyy = formatTimestampAsMMDDYYYY($timestamp);
    $formatted_ddmmyyyy = formatTimestampAsDDMMYYYY($timestamp);
    $processed_string = processString($string_input);
    $formatted_phone_number = formatAsPhoneNumber($number_input);
    $formatted_us_currency = formatAsUSCurrency($number_input);

   
    echo "<h2>Formatted Timestamp (mm/dd/yyyy): $formatted_mmddyyyy</h2>";
    echo "<h2>Formatted Timestamp (dd/mm/yyyy): $formatted_ddmmyyyy</h2>";
    echo "<h2>Processed String:</h2>";
    echo "<p>Number of characters: " . $processed_string["num_characters"] . "</p>";
    echo "<p>Trimmed string: " . $processed_string["trimmed_string"] . "</p>";
    echo "<p>Lowercase string: " . $processed_string["lowercase_string"] . "</p>";
    echo "<p>Contains DMACC: " . ($processed_string["contains_dmacc"] ? "Yes" : "No") . "</p>";
    echo "<h2>Formatted Phone Number: $formatted_phone_number</h2>";
    echo "<h2>Formatted US Currency: $formatted_us_currency</h2>";
    ?>

</body>
</html>
