$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1006,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender7.json',function(data)
			{         
                        que_span[6].innerHTML=data.clock7[i].question;
                       //alert("abcdef");
                        var str=data.clock7[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[6].style.visibility="visible"; 
                             diagram[6].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[6].innerHTML=data.clock7[i].option1;
                        group[k].value=data.clock7[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[6].innerHTML=data.clock7[i].option2;
                        group[k].value=data.clock7[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[6].innerHTML=data.clock7[i].option3;
                        group[k].value=data.clock7[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[6].innerHTML=data.clock7[i].option4;
                        group[k].value=data.clock7[i].option4;
                        k++;
                        j++,k=0;
                        cans[6]=data.clock7[i].ans;
                        i++;
            });
		});
