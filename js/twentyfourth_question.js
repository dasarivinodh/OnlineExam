$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1023,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/verbalreasoning3.json',function(data)
			{         
                        que_span[23].innerHTML=data.verbal3[i].question;
                       //alert("abcdef");
                        var str=data.verbal3[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[23].style.visibility="visible"; 
                             diagram[23].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[23].innerHTML=data.verbal3[i].option1;
                        group[k].value=data.verbal3[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[23].innerHTML=data.verbal3[i].option2;
                        group[k].value=data.verbal3[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[23].innerHTML=data.verbal3[i].option3;
                        group[k].value=data.verbal3[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[23].innerHTML=data.verbal3[i].option4;
                        group[k].value=data.verbal3[i].option4;
                        k++;
                        j++,k=0;
                        cans[23]=data.verbal3[i].ans;
                        i++;
            });
		});
