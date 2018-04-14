$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1039,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender4.json',function(data)
			{         
                        que_span[39].innerHTML=data.clock4[i].question;
                       //alert("abcdef");
                        var str=data.clock4[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[39].style.visibility="visible"; 
                             diagram[39].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[39].innerHTML=data.clock4[i].option1;
                        group[k].value=data.clock4[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[39].innerHTML=data.clock4[i].option2;
                        group[k].value=data.clock4[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[39].innerHTML=data.clock4[i].option3;
                        group[k].value=data.clock4[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[39].innerHTML=data.clock4[i].option4;
                        group[k].value=data.clock4[i].option4;
                        k++;
                        j++,k=0;
                        cans[39]=data.clock4[i].ans;
						//alert(cans[39]);
                        i++;
            });
		});
