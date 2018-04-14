$(document).ready(function()
	  {   
		    var i=0,j=1022,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/verbalreasoning2.json',function(data)
			{         
                        que_span[22].innerHTML=data.verbal2[i].question;
                       //alert("abcdef");
                        var str=data.verbal2[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[22].style.visibility="visible"; 
                             diagram[22].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[22].innerHTML=data.verbal2[i].option1;
                        group[k].value=data.verbal2[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[22].innerHTML=data.verbal2[i].option2;
                        group[k].value=data.verbal2[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[22].innerHTML=data.verbal2[i].option3;
                        group[k].value=data.verbal2[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[22].innerHTML=data.verbal2[i].option4;
                        group[k].value=data.verbal2[i].option4;
                        k++;
                        j++,k=0;
                        cans[22]=data.verbal2[i].ans;
                        i++;
            });
		});
