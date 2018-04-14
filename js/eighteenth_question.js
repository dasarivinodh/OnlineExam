$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1017,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender6.json',function(data)
			{         
                        que_span[17].innerHTML=data.clock6[i].question;
                       //alert("abcdef");
                        var str=data.clock6[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[17].style.visibility="visible"; 
                             diagram[17].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[17].innerHTML=data.clock6[i].option1;
                        group[k].value=data.clock6[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[17].innerHTML=data.clock6[i].option2;
                        group[k].value=data.clock6[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[17].innerHTML=data.clock6[i].option3;
                        group[k].value=data.clock6[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[17].innerHTML=data.clock6[i].option4;
                        group[k].value=data.clock6[i].option4;
                        k++;
                        j++,k=0;
                        cans[17]=data.clock6[i].ans;
                        i++;
            });
		});
