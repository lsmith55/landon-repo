<?php
require_once('dbConnect2.php'); // database connection file

try {
    
    $sql = "SELECT * FROM wdv341_events WHERE event_id = :event_id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':event_id', 1, PDO::PARAM_INT); // Change 1 to the specific event ID you want to retrieve
    $stmt->execute();

   
    $eventData = $stmt->fetch(PDO::FETCH_ASSOC);

    
    var_dump($eventData);

    if ($eventData) {
        // Event class
        class Event
        {
            // Defining properties for each column in tbhe wdv341_events table
            public $event_id;
            public $event_name;
            public $event_description;
            public $event_presenter;
            public $event_date;
            public $event_time;

            
            public function __construct($data)
            {
                $this->event_id = $data['event_id'];
                $this->event_name = $data['events_name'];
                $this->event_description = $data['events_description'];
                $this->event_presenter = $data['events_presenter'];
                $this->event_date = $data['events_date'];
                $this->event_time = $data['events_time'];
            }
        }

        
        $outputObj = new Event($eventData);

        // encoding $outputObj as a JSON object
        $jsonOutput = json_encode($outputObj);

         
        header('Content-Type: application/json');

        // outputting the json object
        echo $jsonOutput;
    } else {
        echo "Event not found";
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
