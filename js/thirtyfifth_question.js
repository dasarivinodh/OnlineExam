$(document).ready(function()
	  {   
		    var i=0,j=1034,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/verbalreasoning2.json',function(data)
			{         
                        que_span[34].innerHTML=data.verbal2[i].question;
                       //alert("abcdef");
                        var str=data.verbal2[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[34].style.visibility="visible"; 
                             diagram[34].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[34].innerHTML=data.verbal2[i].option1;
                        group[k].value=data.verbal2[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[34].innerHTML=data.verbal2[i].option2;
                        group[k].value=data.verbal2[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[34].innerHTML=data.verbal2[i].option3;
                        group[k].value=data.verbal2[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[34].innerHTML=data.verbal2[i].option4;
                        group[k].value=data.verbal2[i].option4;
                        k++;
                        j++,k=0;
                        cans[34]=data.verbal2[i].ans;
                        i++;
            });
		});
