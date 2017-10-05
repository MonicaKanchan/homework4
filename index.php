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

                echo htmlTags::horizontalRule();

		echo  htmlTags::headingOne("Replace String");
		change::stringreplace($date);
		echo htmlTags::horizontalRule();

		echo htmlTags::headingOne("String Compare");
		change::stringcompare($date,$tar);
		echo  htmlTags::horizontalRule();
                
		echo htmlTags::headingOne("String Position");
		//class name::function name(variable called)//
		change::stringposition(str_replace("-","/",$date));
		echo htmlTags::horizontalRule();
		
		echo htmlTags::headingOne("String Count");
		change::stringcount($date);
		echo htmlTags::hhorizontalRule();

		}
}


	function __destruct()
	       {
	        print($this->html);
	       }

	      class Change
                {
                  static public function stringreplace($date)
		  {
		  echo '<br>';
		  echo 'The new $date is : '.str_replace('-','/',$date);
		  }

		  static public function stringcompare($date,$tar)
		   {
		    echo '<br>';
		    $result=strcmp($date,$tar);
		    if($result==0)
		      {
		      echo "Oops";
		      }
		      else if($result>0)
		        {
			echo "The future";
			}
		          else{
			       echo "The past";
			       }
		    
		   }
		   static public function stringposition($date)
		   {
		    for($x=0; $x<substr_count($date,"/");$x++)
		    {
		    $i=$i+1;
		    $i=stripos($date,"/",$i);
		    echo 'The position of / is: '. $i .' ';
		    }
		   }
		   static public function stringcount($date)
		   {
		   $scount=str_word_count($date);
		   echo 'The number of words in $date is: '.$scount;
		   }


                   


}

  		class htmlTags
		{
		static public function horizontalRule()
		{
		return '<hr>';
		}

		static public function headingOne($text)
		{
		return '<h1>' .$text. '</h1>';
		}
		}
?>
