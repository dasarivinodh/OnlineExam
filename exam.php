<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>PVP Siddhartha | Online</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
        <link href="css/vishnu_style.css" rel="stylesheet" type="text/css">
        <link href="css/vishnu_style.css" rel="stylesheet" type="text/css">
        <link href="css/loaderstyle.css" rel="stylesheet" type="text/css">
		<script src="js/jquery-1.js"></script>
		
		<script>
		    var xmlreqtime;
			var urlsrch;
			var tt;
		    var cans=new Array();
			var uans=new Array();
			//var cs1,cs2,cs3;
			//var no_ans=0,no_rev=0,no_notans=40;
			function examstart()
			{
			         var v=document.getElementById("que_box");
					 var w=document.getElementById("exambutton");
					 var vv=document.getElementById("header");
					 w.style.display="none";
			         v.style.display="block";
			         vv.style.display="block";   
           					 
                     timer();						 
			}
			
  
               function correctans(){
			       alert("from function correctans");
			      for(i=0;i<12;i++){
				      // alert(cans[i]);
			      }	   
			  }  
			  
			  
			  function userans(){
			      alert("from function userans");
			      for(i=0;i<12;i++){
				       //alert(uans[i]);
			       }	  
			  
			  }
			  
		</script>
		<script src="js/countingstatus.js"></script>
		<script src="js/runningtimer.js"></script>
		<script src="js/startexam_timer.js"></script>
		<script src="js/submittingexam.js"></script>
        <script src="js/first_question.js"></script>
		<script src="js/second_question.js"></script>
		<script src="js/third_question.js"></script>
		<script src="js/fourth_question.js"></script>
		<script src="js/fifth_question.js"></script>
		<script src="js/sixth_question.js"></script>
		<script src="js/seventh_question.js"></script>
		<script src="js/eighth_question.js"></script>
		<script src="js/ninth_question.js"></script>
		<script src="js/tenth_question.js"></script>
		<script src="js/eleventh_question.js"></script>
		<script src="js/twelth_question.js"></script>
		<script src="js/selecting_option.js"></script>
		<script src="js/deselecting_option.js"></script>
		<script src="js/marking_option_for_review.js"></script> 
		<script language="javascript" type="text/javascript">
         window.history.forward();
	
         </script>
		
	</head>
	<body>
	 
		<!-- online top bar -->
		<div class="online-top">
			<span class="right">
			</span>
			<div class="box">
			  <div class="loader1"></div>
		    </div>
			 <pre id="timer">
			 </pre>
			<div class="clr">
			<h1><b>
			  <?php 
    			  session_start();
                  echo $_SESSION['uname'];
               ?>
			</b></h1>   
              </div>
		</div>
		<!--/ online top bar -->
		<!-- MY CODE GOES HERE -->
		
<input type="button" id="exambutton" style="margin-top:105px;display:block;" value="startexam" onclick="examstart()">
       
		<div id="que_box" style="display:none;">
		  <!--queone-->
          <div class="que_container">
		    <pre id="zero"> </pre>
            <span>1 . </span><span class="que" >1</span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1000" value="" onclick="optionselected(name)"><span  class="opt_one"></span></input>
			<input type="radio" name="1000" value="" onclick="optionselected(name)"><span  class="opt_two"></span></input>
			<input type="radio" name="1000" value="" onclick="optionselected(name)"><span class="opt_three"></span></input>
			<input type="radio" name="1000" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1000)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1000)"><br>
          </div>
		  <br><hr>
		  <!--que two-->
		  <div class="que_container">
		    <pre id="one"> </pre>
            <span>2 . </span><span class="que" id="one"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1001" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1001" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1001" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1001" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1001)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1001)"><br>
          </div>
		  <br><hr>
          <!--que three-->
		  <div class="que_container">
		    <pre id="two"> </pre>
            <span>3 . </span><span class="que" ></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1002" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1002" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1002" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1002" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1002)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1002)"><br>
          </div>
		  <br><hr>
		  <!--que four-->
		  <div class="que_container">
		    <pre id="three"> </pre>
            <span>4 . </span><span class="que" ></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1003" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1003" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1003" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1003" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1003)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1003)"><br>
          </div>
		  <br><hr>
          <!--que five-->
		  <div class="que_container">
		    <pre id="four"> </pre>		    
            <span>5 . </span><span class="que" ></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1004" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1004" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1004" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1004" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1004)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1004)"><br>
          </div>
		  <br><hr>
		  <!--que six-->
		  <div class="que_container"> 
		   <pre id="five"> </pre>				    
            <span>6 . </span><span class="que" ></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1005" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1005" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1005" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1005" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1005)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1005)"><br>
          </div>
		  <br><hr>
		  <!--que seven-->
		  <div class="que_container">
		   <pre id="six"> </pre>
            <span>7 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1006" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1006" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1006" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1006" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1006)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1006)"><br>
          </div>
		  <br><hr>
		  <!--que eight-->
		  <div class="que_container">
		    <pre id="seven"> </pre>
            <span>8 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1007" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1007" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1007" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1007" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1007)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1007)"><br>
          </div>
		  <br><hr>
		  <!--que nine-->
		  <div class="que_container">
		   <pre id="eight"> </pre>
            <span>9 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1008" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1008" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1008" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1008" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1008)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1008)"><br>
			
          </div>
		  <br><hr>
		  <!--que ten-->
		  <div class="que_container">
		    <pre id="nine"> </pre>
            <span>10 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1009" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1009" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1009" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1009" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1009)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1009)"><br>
          </div>
		  <br><hr>
		  <!--que eleven-->
		  <div class="que_container">
		    <pre id="ten"> </pre>
            <span>11 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1010" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1010" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1010" value="" onclick="optionselected(name)"><span class="opt_three">s</span></input>
			<input type="radio" name="1010" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1010)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1010)"><br>
          </div>
		  <br><hr>
		  <!--que twelve-->
		  <div class="que_container">
		    <pre id="eleven"> </pre>
            <span>12 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1011" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1011" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1011" value="" onclick="optionselected(name)"><span class="opt_three">opt_four</span></input>
			<input type="radio" name="1011" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1011)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1011)"><br>
          </div>
		  <br><hr>
		  <!--que thirteen-->
		  <div class="que_container">
		    <pre id="twelve"> </pre>
            <span>13 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1012" value="" onclick="optionselected(name)"><span  class="opt_one">h</span></input>
			<input type="radio" name="1012" value="" onclick="optionselected(name)"><span  class="opt_two">f</span></input>
			<input type="radio" name="1012" value="" onclick="optionselected(name)"><span class="opt_three">opt_four</span></input>
			<input type="radio" name="1012" value="" onclick="optionselected(name)"><span  class="opt_four">sd</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1012)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1012)"><br>
          </div>
		  <br><hr>
		  <!--que fourteen-->
		  <div class="que_container">
		    <pre id="thirteen"> </pre>
            <span>14 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1013" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1013" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1013" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1013" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1013)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1013)"><br>
          </div>
		  <br><hr>
		  <!--que fifteen-->
		  <div class="que_container">
		    <pre id="fourteen"> </pre>
            <span>15 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1014" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1014" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1014" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1014" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1014)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1014)"><br>
          </div>
		  <br><hr>
		  <!--que sixteen-->
		  <div class="que_container">
		    <pre id="fifteen"> </pre>
            <span>16 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1015" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1015" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1015" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1015" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1015)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1015)"><br>
          </div>
		  <br><hr>
		  <!--que seventeen-->
		  <div class="que_container">
		    <pre id="sixteen"> </pre>
            <span>17 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1016" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1016" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1016" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1016" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1016)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1016)"><br>
          </div>
		  <br><hr>
		  <!--que eighteen-->
		  <div class="que_container">
		    <pre id="seventeen"> </pre>
            <span>18 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1017" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1017" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1017" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1017" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1017)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1017)"><br>
          </div>
		  <br><hr>
		  <!--que nineteen-->
		  <div class="que_container">
		    <pre id="eighteen"> </pre>
            <span>19 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1018" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1018" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1018" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1018" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1018)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1018)"><br>
          </div>
		  <br><hr>
		  
		  <!--que twenty-->
		  <div class="que_container">
		    <pre id="nineteen"> </pre>
            <span>20 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1019" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1019" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1019" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1019" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1019)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1019)"><br>
          </div>
		  <br><hr>
		  <!--que twentyone-->
		  <div class="que_container">
		    <pre id="twenty"> </pre>
            <span>21 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1020" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1020" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1020" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1020" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1020)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1020)"><br>
          </div>
		  <br><hr>
		  <!--que twentytwo-->
		  <div class="que_container">
		    <pre id="twentyone"> </pre>
            <span>22 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1021" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1021" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1021" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1021" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1021)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1021)"><br>
          </div>
		  <br><hr>
		  <!--que twentythree-->
		  <div class="que_container">
		    <pre id="twentytwo"> </pre>
            <span>23 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1022" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1022" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1022" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1022" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1022)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1022)"><br>
          </div>
		  <br><hr>
		   <!--que twentyfour-->
		  <div class="que_container">
		    <pre id="twentythree"> </pre>
            <span>24 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1023" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1023" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1023" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1023" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1023)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1023)"><br>
          </div>
		  <br><hr>
		  <!--que twentyfive-->
		  <div class="que_container">
		    <pre id="twentyfour"> </pre>
            <span>25 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1024" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1024" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1024" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1024" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1024)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1024)"><br>
          </div>
		  <br><hr>
		  <!--que twentysix-->
		  <div class="que_container">
		    <pre id="twentyfive"> </pre>
            <span>26 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1025" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1025" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1025" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1025" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1025)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1025)"><br>
          </div>
		  <br><hr>
		  <!--que twentyseven-->
		  <div class="que_container">
		    <pre id="twentysix"> </pre>
            <span>27 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1026" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1026" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1026" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1026" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1026)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1026)"><br>
          </div>
		  <br><hr>
		  <!--que twentyeight-->
		  <div class="que_container">
		    <pre id="twentyseven"> </pre>
            <span>28 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1027" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1027" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1027" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1027" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1027)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1027)"><br>
          </div>
		  <br><hr>
		  <!--que twentynine-->
		  <div class="que_container">
		    <pre id="twentyeight"> </pre>
            <span>29 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1028" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1028" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1028" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1028" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1028)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1028)"><br>
          </div>
		  <br><hr>
		  <!--que thirty-->
		  <div class="que_container">
		    <pre id="twentynine"> </pre>
            <span>30 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1029" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1029" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1029" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1029" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1029)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1029)"><br>
          </div>
		  <br><hr>
		   <!--que thirty one-->
		  <div class="que_container">
		    <pre id="thirty"> </pre>
            <span>31 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1030" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1030" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1030" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1030" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1030)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1030)"><br>
          </div>
		  <br><hr>
		  <!--que thirty two-->
		  <div class="que_container">
		    <pre id="thirtyone"> </pre>
            <span>32 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1031" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1031" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1031" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1031" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1031)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1031)"><br>
          </div>
		  <br><hr>
		  <!--que thirty three-->
		  <div class="que_container">
		    <pre id="thirtytwo"> </pre>
            <span>33 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1032" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1032" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1032" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1032" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1032)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1032)"><br>
          </div>
		  <br><hr>
		  <!--que thirty four-->
		  <div class="que_container">
		    <pre id="thirtythree"> </pre>
            <span>34 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1033" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1033" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1033" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1033" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1033)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1033)"><br>
          </div>
		  <br><hr>
		  <!--que thirty five-->
		  <div class="que_container">
		    <pre id="thirtyfour"> </pre>
            <span>35 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1034" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1034" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1034" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1034" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1034)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1034)"><br>
          </div>
		  <br><hr>
		  <!--que thirty six-->
		  <div class="que_container">
		    <pre id="thirtyfive"> </pre>
            <span>36 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1035" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1035" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1035" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1035" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1035)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1035)"><br>
          </div>
		  <br><hr>
		  <!--que thirty seven-->
		  <div class="que_container">
		    <pre id="thirtysix"> </pre>
            <span>37 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1036" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1036" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1036" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1036" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1036)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1036)"><br>
          </div>
		  <br><hr>
		  <!--que thirty eight-->
		  <div class="que_container">
		    <pre id="thirtyseven"> </pre>
            <span>38 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1037" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1037" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1037" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1037" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1037)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1037)"><br>
          </div>
		  <br><hr>
		  <!--que thirty nine-->
		  <div class="que_container">
		    <pre id="thirtyeight"> </pre>
            <span>39 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1038" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1038" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1038" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1038" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1038)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1038)"><br>
          </div>
		  <br><hr>
		  <!--que fourty-->
		  <div class="que_container">
		    <pre id="thirtynine"> </pre>
            <span>40 . </span><span class="que"></span><br>
            <img class="fig" src="" style="visibility:hidden;"  height="100px" width="100px"></img><br/>
            <input type="radio" name="1039" value="" onclick="optionselected(name)"><span  class="opt_one">opt_one</span></input>
			<input type="radio" name="1039" value="" onclick="optionselected(name)"><span  class="opt_two">opt_two</span></input>
			<input type="radio" name="1039" value="" onclick="optionselected(name)"><span class="opt_three">opt_three</span></input>
			<input type="radio" name="1039" value="" onclick="optionselected(name)"><span  class="opt_four">opt_four</span></input><br>
			<input style="float:right;margin-right:30px;" type="button" value="clear" onclick="optiondeselected(1039)">
			<input style="float:right;" type="button" value="mark-for-review" onclick="markedforreview(1039)"><br>
          </div>
		  <br>
		  <!--  END OF QUESTIONS-->
		  
</div>

		
		<!-- Header with Navigation -->
		<div id="header" style="display:none">
		
			<!-- Demo Nav -->
				<ul >
			<nav id="online-demos">
				<li>
				<a href="#zero" id="1500">1</a>
				<a href="#one" id="1501">2</a>
				<a href="#two" id="1502">3</a>
				<a href="#three" id="1503">4</a>
				<a href="#four" id="1504">5</a>
				</li>
				<li>
				<a href="#five" id="1505">6</a>
				<a href="#six" id="1506">7</a>
				<a href="#seven" id="1507">8</a>
				<a href="#eight" id="1508">9</a>
				<a href="#nine" id="1509">10</a>
				</li>
				<li>
				<a href="#ten" id="1510">11</a>
				<a href="#eleven" id="1511">12</a>
				<a href="#twelve" id="1512">13</a>
				<a href="#thirteen" id="1513">14</a>
				<a href="#fourteen" id="1514">15</a>
				</li>
				<li>
				<a href="#fifteen" id="1515">16</a>
				<a href="#sixteen" id="1516">17</a>
				<a href="#seventeen" id="1517">18</a>
				<a href="#eighteen" id="1518">19</a>
				<a href="#nineteen" id="1519">20</a>
				</li>
				<li>
				<a href="#twenty" id="1520">21</a>
				<a href="#twentyone" id="1521">22</a>
				<a href="#twentytwo" id="1522">23</a>
				<a href="#twentythree" id="1523">24</a>
				<a href="#twentyfour" id="1524">25</a>
				</li>
				<li>
				<a href="#twentyfive" id="1525">26</a>
				<a href="#twentysix" id="1526">27</a>
				<a href="#twentyseven" id="1527">28</a>
				<a href="#twentyeight" id="1528">29</a>
				<a href="#twentynine" id="1529">30</a>
				</li>
				<li>
				<a href="#thirty" id="1530">31</a>
				<a href="#thirtyone" id="1531">32</a>
				<a href="#thirtytwo" id="1532">33</a>
				<a href="#thirtythree" id="1533">34</a>
				<a href="#thirtyfour" id="1534">35</a>
				</li>
				<li>
				<a href="#thirtyfive" id="1535">36</a>
				<a href="#thirtysix" id="1536">37</a>
				<a href="#thirtyseven" id="1537">38</a>
				<a href="#thirtyeight" id="1538">39</a>
				<a href="#thirtynine" id="1539">40</a>
				</li>
								
				<li><br></li>
				<li><span style="color:black;">Answered:</span><div id="answered">0</div></li><br>
				<li><span style="color:black;">Marked-for-review:</span><div id="review">0</div></li><br>
                <li><span style="color:black;">Not-answered:</span><div id="notanswered">40</div></li>
				
				<li><br></li>				
				<li><input type="button" value="submit" onclick="examsubmitted()"></input><li>
				<!--<li><input type="button" value="correct-ans" onclick="correctans()"></input><li>-->				
				<!--<li><input type="button" value="user-ans" onclick="userans()"></input><li>-->
			</nav>
			   
		   </ul>   
		       	   
		   
		</div>
	 
	</body>
</html>
