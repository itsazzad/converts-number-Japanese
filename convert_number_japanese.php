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
function convertInteger2JapaneseReading($integer){
	return $translation;
}
function extractTranslatable($number, $stack, $mapJ2I, $mapJ2IExp){
        return $stack;
}
echo convertInteger2JapaneseReading('987654321012345678909876543210');
