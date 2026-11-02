<?php
require_once "GymMembership.php";

try {
    $member = new GymMembership("Isto", "Premium", 3);

    echo "<h2>GYM MEMBERSHIP</h2>";
    echo "Member Name: " . $member->getMemberName() . "<br>";
    echo "Membership Type: " . $member->getMembershipType() . "<br>";
    echo "Duration: " . $member->getDuration() . " months<br>";
    echo "Validation Status: Valid";
    
} catch (InvalidArgumentException $e) {
    echo "Validation Status: Invalid<br>";
    echo "Error: " . $e->getMessage();
}
?>
