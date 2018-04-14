$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1038,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender3.json',function(data)
			{         
                        que_span[38].innerHTML=data.clock3[i].question;
                       //alert("abcdef");
                        var str=data.clock3[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[38].style.visibility="visible"; 
                             diagram[38].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[38].innerHTML=data.clock3[i].option1;
                        group[k].value=data.clock3[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[38].innerHTML=data.clock3[i].option2;
                        group[k].value=data.clock3[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[38].innerHTML=data.clock3[i].option3;
                        group[k].value=data.clock3[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[38].innerHTML=data.clock3[i].option4;
                        group[k].value=data.clock3[i].option4;
                        k++;
                        j++,k=0;
                        cans[38]=data.clock3[i].ans;
                        i++;
            });
		});
