      $(document).ready(function()
	  {   
		    var i=Math.floor(Math.random()*5),j=1048,group,k=0; 
  		    var que_span=document.getElementsByClassName("que");
		    var diagram=document.getElementsByClassName("fig");
     	    $.getJSON('http://localhost/start/json/clockcalender1.json',function(data)
			{         
                        que_span[48].innerHTML=data.clock1[i].question;
                       //alert("abcdef");
                        var str=data.clock1[i].figure;
                        if(!str.match("no image"))
						{
                            //alert("there is no image for this question");
							 diagram[48].style.visibility="visible"; 
                             diagram[48].src=str;  
                        }            
                        group=document.getElementsByName(j);
                        document.getElementsByClassName("opt_one")[48].innerHTML=data.clock1[i].option1;
                        group[k].value=data.clock1[i].option1;
                        k++;
                        document.getElementsByClassName("opt_two")[48].innerHTML=data.clock1[i].option2;
                        group[k].value=data.clock1[i].option2;
                        k++;
                        document.getElementsByClassName("opt_three")[48].innerHTML=data.clock1[i].option3;
                        group[k].value=data.clock1[i].option3;
                        k++;
                        document.getElementsByClassName("opt_four")[48].innerHTML=data.clock1[i].option4;
                        group[k].value=data.clock1[i].option4;
                        k++;
                        j++,k=0;
                        cans[48]=data.clock1[i].ans;
						//alert(cans[48]);
                        i++;
            });
		});
