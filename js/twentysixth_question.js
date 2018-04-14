 $(document).ready(function()
	  {              //alert ("two");
		    var i=Math.floor(Math.random()*5),j=1025,group,k=0;   
		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender2.json',function(data)
			{         
                        que_span[25].innerHTML=data.clock2[i].question;
                         //alert("abcdef");
                        var str=data.clock2[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[25].style.visibility="visible"; 
                             diagram[25].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[25].innerHTML=data.clock2[i].option1;
                        group[k].value=data.clock2[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[25].innerHTML=data.clock2[i].option2;
                        group[k].value=data.clock2[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[25].innerHTML=data.clock2[i].option3;
                        group[k].value=data.clock2[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[25].innerHTML=data.clock2[i].option4;
                        group[k].value=data.clock2[i].option4;
                        k++;
                        j++,k=0;
                       cans[25]=data.clock2[i].ans;
                        i++;
            });
		});
