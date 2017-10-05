<?php

$obj = new main();

class main
{
         function __construct()
	        {
		$date = date('Y-m-d', time());
		echo " The value of \$date: ".$date."<br>";
		//echo "$date";

		$tar="2017/05/24";
		echo "The value of \$tar:".$tar."<br>";

		$year = array("2012", "396","300","2000","1100","1089");
		echo "The value of \$year:";
                print_r($year);

                echo '<br>';
                
		change::stringreplace($date);
		

		}
}


	function __destruct()
	       {
	        print_r($this->html);
	       }

	      class Change
                {
                  static public function stringreplace($date)
		  {
		  echo '<br>';
		  echo 'The new $date is : '.str_replace('-','/',$date);
		  }

		 
		}

?>
