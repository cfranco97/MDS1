<?php
	class users{
		public $Username; // Accessible to anyone
		public $Password;
		// Constructor
		public function __construct($Username,$Password) {
			$this->Username = $Username;
			$this->Password = $Password;
		}
		
		// Convert object to string representation
		public function __toString() {
			return "Username = $this->Username\n";
		}
	}
?>