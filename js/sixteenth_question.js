$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1015,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender4.json',function(data)
			{         
                        que_span[15].innerHTML=data.clock4[i].question;
                       //alert("abcdef");
                        var str=data.clock4[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[15].style.visibility="visible"; 
                             diagram[15].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[15].innerHTML=data.clock4[i].option1;
                        group[k].value=data.clock4[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[15].innerHTML=data.clock4[i].option2;
                        group[k].value=data.clock4[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[15].innerHTML=data.clock4[i].option3;
                        group[k].value=data.clock4[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[15].innerHTML=data.clock4[i].option4;
                        group[k].value=data.clock4[i].option4;
                        k++;
                        j++,k=0;
                        cans[15]=data.clock4[i].ans;
						//alert(cans[15]);
                        i++;
            });
		});
