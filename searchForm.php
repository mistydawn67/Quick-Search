<html>
<head>
<title>Search Form Output</title>
</head>

<body>
<h1>Search Form Output</h1>

<center>

<?


$city =$_REQUEST["city"];
$bedroom =$_REQUEST["bedroom"];
$baths =$_REQUEST["baths"];
$price =$_REQUEST["price"];	





switch ($city) {
     case 1:
       $city = "navarre"; 

     	       switch ($baths) {
                 case 1: 
       	         $baths = "1";
                
        	 
        	        switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           case 2: 
        	           $bedroom = "2";
        	           
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	                   
        	           
        	       
        	         case 3: 
        	           $bedroom = "3";
        	                 
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	               
        	                 
        	            break;
        	              
        	           
        	           case 4: 
        	           $bedroom = "4";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           case 5: 
        	           $bedroom = "5";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
     
                           } //end bedroom switch
                           
                           break;//case 1 baths
                           
                 case 2: 
                 $baths = "2";
                 
                 
                      switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	          
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	             switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
     
                      break;
    
                 case 3:
                 $baths = "3";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                  
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	          
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
   
                      break;
                     
   
                 case 4:
                 $baths = "4";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           
        	           
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12ldmb984gea,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12ldmbqtp5cu,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12ldmfaty4c2,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfdq7lycyc,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfdqp8kk6j,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
                           } //end bedroom switch
    
                     break;
    
                 default:
                 print "This is an illegal number of baths!";
  
               }//end Navarre bath switch
       
       break;
       
//start DESTIN
       
       case 2:
         $city = "destin";
         
         switch ($baths) {
                 case 1: 
       	         $baths = "1";
                
        	 
        	        switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           case 2: 
        	           $bedroom = "2";
        	           
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	                   
        	           
        	       
        	         case 3: 
        	           $bedroom = "3";
        	                 
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	               
        	                 
        	            break;
        	              
        	           
        	           case 4: 
        	           $bedroom = "4";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           case 5: 
        	           $bedroom = "5";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
     
                           } //end bedroom switch
                           
                           break;//case 1 baths
                           
                 case 2: 
                 $baths = "2";
                 
                 
                      switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	          
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	             switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
     
                      break;
    
                 case 3:
                 $baths = "3";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                  
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	          
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
   
                      break;
                     
   
                 case 4:
                 $baths = "4";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           
        	           
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lfedq4m2hc,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lfee9qp3u9,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lfeelntwu4,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lfeev85cyi,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lfeh0pgjfp,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
                           } //end bedroom switch
    
                     break;
    
                 default:
                 print "This is an illegal number of baths!";
  
               }//end Destin bath switch
       
       break;
       
		
       
       
//start MARYESTHER
       
       case 3:
         $city = "maryesther";
         
         switch ($baths) {
                 case 1: 
       	         $baths = "1";
                
        	 
        	        switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           case 2: 
        	           $bedroom = "2";
        	           
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	                   
        	           
        	       
        	         case 3: 
        	           $bedroom = "3";
        	                 
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='hhttp://link.flexmls.com/12lg38ase1yh,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	               
        	                 
        	            break;
        	              
        	           
        	           case 4: 
        	           $bedroom = "4";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           case 5: 
        	           $bedroom = "5";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
     
                           } //end bedroom switch
                           
                           break;//case 1 baths
                           
                 case 2: 
                 $baths = "2";
                 
                 
                      switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	          
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	             switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
     
                      break;
    
                 case 3:
                 $baths = "3";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                  
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	          
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
   
                      break;
                     
   
                 case 4:
                 $baths = "4";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           
        	           
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg35hsltbd,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg35tkbkhv,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg38ase1yh,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg39i8ld6h,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3dq1jwix,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
                           } //end bedroom switch
    
                     break;
    
                 default:
                 print "This is an illegal number of baths!";
  
               }//end Mary Esther bath switch
       
       break;
       
		
       
		
//start FWB       
       
       
       case 4:
         $city = "fortwaltonbeach";
       
		switch ($baths) {
                 case 1: 
       	         $baths = "1";
                
        	 
        	        switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           case 2: 
        	           $bedroom = "2";
        	           
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	                   
        	           
        	       
        	         case 3: 
        	           $bedroom = "3";
        	                 
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	               
        	                 
        	            break;
        	              
        	           
        	           case 4: 
        	           $bedroom = "4";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           case 5: 
        	           $bedroom = "5";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
     
                           } //end bedroom switch
                           
                           break;//case 1 baths
                           
                 case 2: 
                 $baths = "2";
                 
                 
                      switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	          
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	             switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
     
                      break;
    
                 case 3:
                 $baths = "3";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                  
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	          
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
   
                      break;
                     
   
                 case 4:
                 $baths = "4";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           
        	           
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3e6ol4hc,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3eesfp82,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3emkd9gf,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3etz8qzq,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3f26ow3l,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
                           } //end bedroom switch
    
                     break;
    
                 default:
                 print "This is an illegal number of baths!";
  
               }//end FWB bath switch
       
       break;

//start NICEVILLE       
   
       case 5:
         $city = "niceville";
               
               switch ($baths) {
                 case 1: 
       	         $baths = "1";
                
        	 
        	        switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=1&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           case 2: 
        	           $bedroom = "2";
        	           
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=1&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	                   
        	           
        	       
        	         case 3: 
        	           $bedroom = "3";
        	                 
        	                 switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=1&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	               
        	                 
        	            break;
        	              
        	           
        	           case 4: 
        	           $bedroom = "4";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=1&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           case 5: 
        	           $bedroom = "5";
        	                
        	                switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=1&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
     
                           } //end bedroom switch
                           
                           break;//case 1 baths
                           
                 case 2: 
                 $baths = "2";
                 
                 
                      switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=2&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=2&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	          
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	             switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=2&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=2&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=2&Bedrooms=5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
     
                      break;
    
                 case 3:
                 $baths = "3";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=3&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                 
        	                   }//end price switch
        	                  
        	                
        	              break;
        	           
        	          
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=3&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=3&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=3&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	          
        	           case 5: 
        	           $bedroom = "5";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=3&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
        	           
     
                           } //end bedroom switch
   
                      break;
                     
   
                 case 4:
                 $baths = "4";
                 
                 
                         switch ($bedroom) {
        	           case 1: 
        	           $bedroom = "1";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=>4&Bedrooms=1' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	                   
        	                
        	                
        	              break;
        	              
        	           
        	           
        	           
        	           case 2: 
        	           $bedroom = "2";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=>4&Bedrooms=2' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	               
        	                
        	                    
        	                  break;
        	           
        	           
        	          
        	           case 3: 
        	           $bedroom = "3";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=>4&Bedrooms=3' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                    
        	                
        	            break;
        	           
        	           
        	           
        	           case 4: 
        	           $bedroom = "4";
        	           
        	           switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=>4&Bedrooms=4' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   }//end price switch
        	                   
        	           
        	                break;
        	           
        	           
        	           
        	           case 5: 
        	           $bedroom = "5";
        	           
        	            switch ($price) {
        	                   case 1: 
        	                   $price = "1";
        	                   print "<iframe src='http://link.flexmls.com/12lg3h9qmngw,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 2:
        	                   $price = "2";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hy6bg7u,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 3:
        	                   $price = "3";
        	                   print "<iframe src='http://link.flexmls.com/12lg3hpzc9tk,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 4:
        	                   $price = "4";
        	                   print "<iframe src='http://link.flexmls.com/12lg3i9jxh4z,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   case 5:
        	                   $price = "5";
        	                   print "<iframe src='http://link.flexmls.com/12lg3ihnxlrf,16&FullBaths=>4&Bedrooms=>5' frameborder=0 width=100% height=650></iframe>";
        	                   break;
        	                   
        	                   }//end price switch
        	                   
        	           
        	           break;
        	           
                           } //end bedroom switch
    
                     break;
    
                 default:
                 print "This is an illegal number of baths!";
  
               }//end Niceville bath switch
       
       break;
		
       
    
       

} //end  cityswitch

    
    
    
   
    
     

?>

</center>
</body>
</html>