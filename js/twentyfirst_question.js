$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1020,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender9.json',function(data)
			{         
                        que_span[20].innerHTML=data.clock9[i].question;
                       //alert("abcdef");
                        var str=data.clock9[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[20].style.visibility="visible"; 
                             diagram[20].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[20].innerHTML=data.clock9[i].option1;
                        group[k].value=data.clock9[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[20].innerHTML=data.clock9[i].option2;
                        group[k].value=data.clock9[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[20].innerHTML=data.clock9[i].option3;
                        group[k].value=data.clock9[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[20].innerHTML=data.clock9[i].option4;
                        group[k].value=data.clock9[i].option4;
                        k++;
                        j++,k=0;
                        cans[20]=data.clock9[i].ans;
                        i++;
            });
		});
