$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1005,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender6.json',function(data)
			{         
                        que_span[5].innerHTML=data.clock6[i].question;
                       //alert("abcdef");
                        var str=data.clock6[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[5].style.visibility="visible"; 
                             diagram[5].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[5].innerHTML=data.clock6[i].option1;
                        group[k].value=data.clock6[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[5].innerHTML=data.clock6[i].option2;
                        group[k].value=data.clock6[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[5].innerHTML=data.clock6[i].option3;
                        group[k].value=data.clock6[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[5].innerHTML=data.clock6[i].option4;
                        group[k].value=data.clock6[i].option4;
                        k++;
                        j++,k=0;
                        cans[5]=data.clock6[i].ans;
                        i++;
            });
		});
