$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1019,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender8.json',function(data)
			{         
                        que_span[19].innerHTML=data.clock8[i].question;
                       //alert("abcdef");
                        var str=data.clock8[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[19].style.visibility="visible"; 
                             diagram[19].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[19].innerHTML=data.clock8[i].option1;
                        group[k].value=data.clock8[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[19].innerHTML=data.clock8[i].option2;
                        group[k].value=data.clock8[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[19].innerHTML=data.clock8[i].option3;
                        group[k].value=data.clock8[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[19].innerHTML=data.clock8[i].option4;
                        group[k].value=data.clock8[i].option4;
                        k++;
                        j++,k=0;
                        cans[19]=data.clock8[i].ans;
                        i++;
            });
		});
