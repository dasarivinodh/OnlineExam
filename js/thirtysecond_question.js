$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1031,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender8.json',function(data)
			{         
                        que_span[31].innerHTML=data.clock8[i].question;
                       //alert("abcdef");
                        var str=data.clock8[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[31].style.visibility="visible"; 
                             diagram[31].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[31].innerHTML=data.clock8[i].option1;
                        group[k].value=data.clock8[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[31].innerHTML=data.clock8[i].option2;
                        group[k].value=data.clock8[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[31].innerHTML=data.clock8[i].option3;
                        group[k].value=data.clock8[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[31].innerHTML=data.clock8[i].option4;
                        group[k].value=data.clock8[i].option4;
                        k++;
                        j++,k=0;
                        cans[31]=data.clock8[i].ans;
                        i++;
            });
		});
