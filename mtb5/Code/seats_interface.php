<?php

require 'db_conn.php';
require 'template.php';

session_start();

$_SESSION["time"]=$time=$_POST["timing"];
$movie=$_SESSION["movie"];
$theatre=$_SESSION["theatre"];


$sql="SELECT seats FROM theatre_movie WHERE movie_id='$movie' && theatre_id='$theatre' && time='$time' ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
    <script src="jquery-1.4.1.min.js" type="text/javascript"></script>
    <style type="text/css">
	#holder{	
	 height:200px;	 
	 width:550px;
	 background-color:#F5F5F5;
	 border:1px solid #A4A4A4;
	 margin-left:10px;	
	}
	 #place {
	 position:relative;
	 margin:7px;
	 }
     #place a{
	 font-size:0.6em;
	 }
     #place li
     {
         list-style: none outside none;
         position: absolute;   
     }    
     #place li:hover
     {
        background-color:yellow;      
     } 
	 #place .seat{
	 background:url("images/available_seat_img.gif") no-repeat scroll 0 0 transparent;
	 height:33px;
	 width:33px;
	 display:block;	 
	 }
      #place .selectedSeat
      { 
		background-image:url("images/booked_seat_img.gif");      	 
      }
	   #place .selectingSeat
      { 
		background-image:url("images/selected_seat_img.gif");      	 
      }
	  #place .row-3, #place .row-4{
		margin-top:10px;
	  }
	 #seatDescription{
	 padding:0px;
	 }
	  #seatDescription li{
	  verticle-align:middle;	  
	  list-style: none outside none;
	   padding-left:35px;
	  height:35px;
	  float:left;
	  }
    </style>

</head>
<body>


    
      <h2 style="font-size:1.2em;"> Choose seats by clicking the corresponding seat in the layout below, <b>all eyes on the left.</b></h2>
    <div id="holder"> 
		<ul  id="place">
        </ul>    
	</div>
	 <div style="width:600px;text-align:center;overflow:auto"> 
	<ul id="seatDescription">
<li style="background:url('images/available_seat_img.gif') no-repeat scroll 0 0 transparent;">Available Seat</li>
<li style="background:url('images/booked_seat_img.gif') no-repeat scroll 0 0 transparent;">Booked Seat</li>
<li style="background:url('images/selected_seat_img.gif') no-repeat scroll 0 0 transparent;">Selected Seat</li>
	</ul>        
	</div>



    
    <script type="text/javascript">
		
		var oldSeats =<?php echo $row["seats"]; ?>;
		var selseats=[];
		var finalseats=[];
		var amount=0;
		
        $(function () {
            var settings = {
                rows: 5,
                cols: 15,
                rowCssPrefix: 'row-',
                colCssPrefix: 'col-',
                seatWidth: 35,
                seatHeight: 35,
                seatCss: 'seat',
                selectedSeatCss: 'selectedSeat',
				selectingSeatCss: 'selectingSeat'
            };

            var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (i + j * settings.rows + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };

            init(oldSeats);

            $('.' + settings.seatCss).click(function () {
			if ($(this).hasClass(settings.selectedSeatCss)){
				alert('This seat is already reserved');
			}
			else{
                $(this).toggleClass(settings.selectingSeatCss);
				}
            });

			$("form").submit(function(){
				
				var item;
				$.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
                    finalseats.push($(this).attr('title'));
                });
				
				$.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
                    item = $(this).attr('title');                   
                    selseats.push(item);                   
                });
				
				amount=selseats.length*100;
				
				$("#id1").val(selseats);
				$("#id2").val(finalseats);	
				$("#id3").val(amount);
			});
			
        });

    </script>
	
	<span style='font: bold 24px Georgia, serif;color:red;'><h2 style="font-size:1.2em;">Cost per seat is Rs.100</h2></span>
	<form action="booking.php"  method="POST">
		<input id="id1" type="text" name="selected" value="" hidden >
		<input id="id2" type="text" name="final" value="" hidden >
		<input id="id3" type="text" name="amount" value="" hidden> 
		<input type="submit" style='font: 14px Georgia, serif;color:darkblue;' value="Go">
	</form>
</body>
</html>
