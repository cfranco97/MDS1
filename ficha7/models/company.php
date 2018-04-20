<?php include_once("worker.php"); ?>
<?php 
	class company{
		public $Name;
		public $Workers;
		//constructor
		public function __construct($Name){
			$this->Name = $Name;
			$this->init();
		}
		public function init(){
			$this->Workers = array();
			$this->Workers[0] = new worker("Joao","joao@gmail.com");
			$this->Workers[1] = new worker("Ano","1997");
			$this->Workers[2] = new worker("Pedro","pedro@gmail.com");
		}
		public function getWorkers(){
			return $this->Workers;

		}
	}

?>


