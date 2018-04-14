$(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1028,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender5.json',function(data)
			{         
                        que_span[28].innerHTML=data.clock5[i].question;
                       //alert("abcdef");
                        var str=data.clock5[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[28].style.visibility="visible"; 
                             diagram[28].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[28].innerHTML=data.clock5[i].option1;
                        group[k].value=data.clock5[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[28].innerHTML=data.clock5[i].option2;
                        group[k].value=data.clock5[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[28].innerHTML=data.clock5[i].option3;
                        group[k].value=data.clock5[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[28].innerHTML=data.clock5[i].option4;
                        group[k].value=data.clock5[i].option4;
                        k++;
                        j++,k=0;
                        cans[28]=data.clock5[i].ans;
                        i++;
            });
		});
