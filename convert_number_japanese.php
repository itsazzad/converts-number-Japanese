<?php
/*
	INPUT					=Translate	%try again as INPUT until mod=0
   89876543210123456789		=89		%876543210123456789
	9876543210123456789		=9	%876543210123456789
	 876543210123456789		=8	 %76543210123456789
	  76543210123456789		=7	  %6543210123456789
	   6543210123456789		=6	   %543210123456789
		543210123456789		=5	    %43210123456789
		 43210123456789		=4	     %3210123456789
		  3210123456789		=3	      %210123456789
		   210123456789		=2	       %10123456789
			10123456789		=1	        %0123456789
			  123456789		=1	          %23456789
			   23456789		=2	           %3456789
				3456789		=3	            %456789
				 456789		=4	             %56789
				  56789		=5	              %6789
				   6789		=6	               %789
					789		=7	                %89
					 89		=8	                 %9
					  9		=9	                 %0<=Finish
					  
*/ 
//I have already coded it. Soon I will update here
<?php
function convertInteger2JapaneseReading($integer){
    $mapJ2I=array(
                "1" => "ichi",
                "2" => "ni",
                "3" => "san",
                "4" => "yon",
                "5" => "go",
                "6" => "roku",
                "7" => "nana",
                "8" => "hachi",
                "9" => "kyuu",
                "10" => "juu",
                "100" => "hyaku",
                "1000" => "sen",
                "10000" => "man",
                "100000000" => "oku",
                "1000000000000" => "chou",
                "10000000000000" => "jutchou", // (also applies to multiplies of 10,000,000,000,000)
                "10000000000000000" => "kei",
                "100000000000000000" => "jukkei", // (also applies to multiplies of 10,000,000,000,000,000)
                "1000000000000000000" => "hyakkei" // (also applies to multiplies of 1,000,000,000,000,000,000)
            );
    $mapJ2IExp=array(
                "300" => "sanbyaku",
                "600" => "roppyaku",
                "800" => "happyaku",
                "3000" => "sanzen",
                "8000" => "hassen",
                "1000000000000" => "itchou",
                "8000000000000" => "hatchou",
                "10000000000000" => "jutchou", // (also applies to multiplies of 10,000,000,000,000)
                "10000000000000000" => "ikkei",
                "60000000000000000" => "rokkei",
                "80000000000000000" => "hakkei",
                "100000000000000000" => "jukkei", // (also applies to multiplies of 10,000,000,000,000,000)
                "1000000000000000000" => "hyakkei" // (also applies to multiplies of 1,000,000,000,000,000,000)
            );
	$stack=array();
	$printable = extractTranslatable($integer, $stack, $mapJ2I, $mapJ2IExp);
	$translation="";
	foreach($printable as $p){
		/*print_r($p);
		echo " ".$p['div'];
		echo ":";
		echo $p['unit'];*/
		if(in_array($p['unit'], $mapJ2IExp)){
			print_r(array_keys($mapJ2IExp));
		    if(in_array(($p['div']*$p['unit']), array_keys($mapJ2IExp))){
			    $translation.=$mapJ2IExp[$p['div']*$p['unit']]." ";
		    }else{
    		    if($p['div']==1){
    		        
    		    }else{
    			    $translation.=$mapJ2IExp[$p['div']]." ";
    		    }
			    $translation.=$mapJ2IExp[$p['unit']]." ";
		    }
		}else{
		    if(in_array($p['div']*$p['unit'], array_keys($mapJ2IExp))){
			    $translation.=$mapJ2IExp[$p['div']*$p['unit']]." ";
		    }else{
    		    if($p['div']==1){
    		        
    		    }else{
    			    $translation.=$mapJ2I[$p['div']]." ";
    		    }
    			$translation.=$mapJ2I[$p['unit']]." ";
		    }
		}
	}
	return $translation;
}
function extractTranslatable($number, $stack, $mapJ2I, $mapJ2IExp){
	//echo $number;
	
	$mapJ2I = array_reverse($mapJ2I, true);
    foreach($mapJ2I as $I=>$J){
		$mod = bcmod($number, $I);
		//echo $number."/".$I."=";
		$div = bcdiv($number, $I, 0);
		//echo "\n";
		if($div>=10){
		    $stack=extractTranslatable($div, $stack, $mapJ2I, $mapJ2IExp);
		}else if($div>0){
			$translatable=array(
					"div"=>$div,
					"unit"=>$I,
				);
			array_push($stack, $translatable);
		}	
        if($mod==0){
            return $stack;//return
        }else{
            $number=$mod;
        }
    }
}
echo convertInteger2JapaneseReading('987654321012345678909876543210');
