
<?php

require "../conn.php";
$get =  $_REQUEST["id"];

if ($get == "arjun") {



$sql = "SELECT * FROM `arjun_flats` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Output JSON
header('Content-Type: application/json');
echo json_encode($data);


} else if ($get == 'greenpharma') {


    $sql = "SELECT * FROM `green_pharma` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    
    $data = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);


} else if ($get == 'hcl') {


    $sql = "SELECT * FROM `fm_hcl` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    
    $data = []; 
    
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);

} else if ($get == 'lnt') {

    $sql = "SELECT * FROM `flowmeter_lnt` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    $data = []; 

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);



} else if ($get == 'baashyaam') {

    $sql = "SELECT * FROM `flowmeter_test` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    $data = []; 

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);


}if ($get == "brownstonea") {

    $sql = "SELECT * FROM `brownstonea` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    
    $data = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($data);
    
    
    }if ($get == "brownstoneb") {

        $sql = "SELECT * FROM `brownstoneb` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
        
        
    }if ($get == "brownstonec") {

        $sql = "SELECT * FROM `brownstonec` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
        
    
    }
    if ($get == "brownstoned") {

        $sql = "SELECT * FROM `brownstoned` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
        
    
    }
   
    if ($get == "brownstone_sumpone") {

        $sql = "SELECT * FROM `brownstone_sumpone` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
            
    }

    if ($get == "brownstone_sumptwo") {

        $sql = "SELECT * FROM `brownstone_sumptwo` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
            
    }

    if ($get == "brownstone_temp") {

        $sql = "SELECT * FROM `brownstone_temp` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Output JSON
        header('Content-Type: application/json');
        echo json_encode($data);
            
    }




?>
