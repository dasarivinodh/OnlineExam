$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1033,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/verbalreasoning1.json',function(data)
			{         
                        que_span[33].innerHTML=data.verbal1[i].question;
                       //alert("abcdef");
                        var str=data.verbal1[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[33].style.visibility="visible"; 
                             diagram[33].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[33].innerHTML=data.verbal1[i].option1;
                        group[k].value=data.verbal1[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[33].innerHTML=data.verbal1[i].option2;
                        group[k].value=data.verbal1[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[33].innerHTML=data.verbal1[i].option3;
                        group[k].value=data.verbal1[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[33].innerHTML=data.verbal1[i].option4;
                        group[k].value=data.verbal1[i].option4;
                        k++;
                        j++,k=0;
                        cans[33]=data.verbal1[i].ans;
                        i++;
            });
		});
