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
		echo htmlTags::horizontalRule();
                
		echo htmlTags::headingOne("String Length");
		change::stringLength($date);
		echo htmlTags::horizontalRule();
                
		echo htmlTags::headingOne("Ascii Value ");
		change::stringascii($date);
		echo htmlTags::horizontalRule();

		echo htmlTags::headingOne("Last two character");
		change::stringsplit($date);
		echo htmlTags::horizontalRule();
		
		echo htmlTags::headingOne("Separator");
		change::separator(str_replace("-","/",$date));
		echo htmlTags::horizontalRule();
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
		   echo '<br>';
		    for($x=0; $x<substr_count($date,"/");$x++)
		    {
		    $i=$i+1;
		    $i=stripos($date,"/",$i);
		    echo 'The position of / is: '. $i .' ';
		    
		  }
		    echo '<br>';
		   }

		   static public function stringcount($date)
		   {
		   echo '<br>';
		   $scount=str_word_count($date);
		   echo 'The number of words in $date is: '.$scount;
		   echo '<br>';
		   }

                   static public function stringLength($date)
		   {
		   echo '<br>';
		   $result1=strlen($date);
		   echo 'The length of the string is:'.$result1;
		   echo '<br>';
		   }

		   static public function stringascii($date)
		   {
		   echo '<br>';
		   echo 'The ascii value of the first character of the string
		   is: ' .ord($date);  
		   echo '<br>';
		 }

		   
		   static public function stringsplit($date)
		   {
		   echo '<br>';
		   echo 'The last two characters of the date are: ';
		   $array=str_split($date);
		   $a=count($array);
		   for($i=0;$i<2;$i++)
		   {
		   $a=$a-1;

		   echo $array[$a];
		   echo ' ';
		   
		   }
		   echo '<br>';
		   }

		   static public function separator($date)
		   {
		   echo 'The separator date is: ';
		   $array=(explode("/",($date)));
		   $a=count($array);
		   for($x=0; $x<$a; $x++)
		   {
		   echo $array[$x] .' ';
		   }
		   echo '<br>';
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
