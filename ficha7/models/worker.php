<?php include_once('users.php'); ?>

<?php
class worker extends users{
	public $Name; // Accessible to anyone
	public $Email;
	// Constructor
	public function __construct($Name,$Email) {
		$this->Name = $Name;
		$this->Email = $Email;
		$this->Password = '12345';
	}
}
?>