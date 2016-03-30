 
 <!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      body 
      {
        margin: 0px;
        padding: 0px;
      }
  </style>
  </head>
  <body>


 <canvas id="myCanvas" width="1345" height="710"></canvas>

    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var context1 = canvas.getContext('2d');
      
      function drawMap()
      {
        var map = new Image();
        map.onload = function() 
        {
          context.drawImage(map, 0, 0);
        };
        map.src = 'nittfestmap2.jpg';
      }
      drawMap();


       function okay()
       {


       locationfinder("eeeaudi","13","archi");
     }

      
       function eeeaudi(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,184,596); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,235,596); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,296,596); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,351,596); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,414,596); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,480,596); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,440,535); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,365,535); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,291,535); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,218,535); 
        }
      }


      function informals(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,237,227); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,288,227); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,348,227); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,403,227); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,467,227); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,531,227); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,494,165); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,418,167); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,344,168); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,270,167); 
        }
      }

      function locationfinder(location,count,dept)
      {
        if(location=="informals")
          informals(count,dept);
        
        else if(location=="eeeaudi")
          eeeaudi(count,dept);
       
      }
       
    // var myVar3 = setTimeout(okay, 2000);
   // var myVar1 = setInterval(drawMap, 2000); 

    

    </script>
    <script>
      $(document).ready(function(){

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function plot_number(){
    $.ajax({
          dataType: "json",
            url: "{{env('SERVER_ROOT', 'http://localhost:8000').'/map'}}",
            type:"POST",
            data: {},
            success:function(data){
                var departments = ['archi','cse','ece','mech','eee','ice','chem','civil','prod','meta'];
                var locations = ['informals','eeeaudi'];
                //drawMap();
                $.each(departments,function(index1,department){
                  $.each(locations,function(index2,location){
                    console.log(department+' '+location+' '+data[department][location]);
                    locationfinder(location,data[department][location],department);
                  });
                });

            },error:function(){
                alert("error!");
            }
        });
    }

    var plot = setInterval(plot_number, 3000);
    var refresh = setInterval(drawMap, 3000);
  });

    </script>
  </body>
  </html>
