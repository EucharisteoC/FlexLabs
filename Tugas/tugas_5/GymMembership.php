<?php
    class GymMembership {
        private $memberName;
        private $membershipType;
        private $duration;

        public function __construct($memberName, $membershipType, $duration) {

        // Validate member name
            if (trim($memberName) == "") {
                throw new InvalidArgumentException("Member name cannot be empty.");
            }

        // Validate membership type
            if (!in_array($membershipType, ["Basic", "Standard", "Premium"])) {
                throw new InvalidArgumentException("Invalid membership type.");
            }

        // Validate duration
            if ($duration < 1) {
                throw new InvalidArgumentException("Duration must be at least 1 month.");
            }

        // Store the data after validation
            $this->memberName = $memberName;
            $this->membershipType = $membershipType;
            $this->duration = $duration;
        }

        public function getMemberName() {
            return $this->memberName;
        }

        public function getMembershipType() {
            return $this->membershipType;
        }

        public function getDuration() {
            return $this->duration;
        }
    }
?>