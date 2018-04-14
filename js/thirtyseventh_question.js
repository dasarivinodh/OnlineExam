      $(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1036,group,k=0; 
  		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender1.json',function(data)
			{         
                        que_span[36].innerHTML=data.clock1[i].question;
                       //alert("abcdef");
                        var str=data.clock1[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[36].style.visibility="visible"; 
                             diagram[36].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[36].innerHTML=data.clock1[i].option1;
                        group[k].value=data.clock1[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[36].innerHTML=data.clock1[i].option2;
                        group[k].value=data.clock1[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[36].innerHTML=data.clock1[i].option3;
                        group[k].value=data.clock1[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[36].innerHTML=data.clock1[i].option4;
                        group[k].value=data.clock1[i].option4;
                        k++;
                        j++,k=0;
                        cans[36]=data.clock1[i].ans;
						//alert(cans[36]);
                        i++;
            });
		});
