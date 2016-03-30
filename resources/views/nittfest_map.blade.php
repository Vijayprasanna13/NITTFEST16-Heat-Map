 
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


       locationfinder("lhc","13","archi");
     }

       function a2(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,122,610); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,163,610); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,125,564); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,170,566); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,134,514); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,185,518); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,148,458); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,201,458); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,235,535); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,250,480); 
        }
      }


       function a13(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,607,593); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,566,600); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,598,551); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,553,551); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,575,496); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,528,496); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,482,534); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,546,450); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,492,450); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,452,487); 
        }
      }


       function lhc(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,780,303); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,810,261); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,750,259); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,783,219); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,846,158); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,850,108); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,790,122); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,792,169); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,715,213); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,740,160); 
        }
      }

       function barn(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,214,172); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,273,172); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,335,172); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,406,172); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,244,237); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,317,237); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,392,237); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,270,304); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,337,303); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,400,302); 
        }
      }

       function eeeaudi(count,dept)
      {
        if(dept=="cse")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,913,568); 
        }

        if(dept=="ece")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,964,568); 
        }

        if(dept=="mech")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1022,564); 
        }

        if(dept=="eee")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1077,568); 
        }

        if(dept=="ice")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1144,568); 
        }

        if(dept=="chem")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1208,568); 
        }

        if(dept=="civil")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1172,505); 
        }

        if(dept=="prod")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1097,508); 
        }

        if(dept=="meta")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,1023,510); 
        }

        if(dept=="archi")
        {
         context1.fillStyle = "#FFFFFF";
        context1.font = "16px Arial";
        context1.fillText(count,945,512); 
        }
      }

      function locationfinder(location,count,dept)
      {
        if(location=="a2")
          a2(count,dept);
        else if(location=="a13")
          a13(count,dept);
        else if(location=="barn")
          barn(count,dept);
        else if(location=="eeeaudi")
          eeeaudi(count,dept);
        else if(location=="lhc")
          lhc(count,dept);
      }
       
     //var myVar3 = setTimeout(okay, 2000);
   //  var myVar1 = setInterval(locationfinder, 3000); 

     
    

    </script>
    <!--AJAX calls-->
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
                    //console.log(department+' '+location+' '+data[department][location]);
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



   