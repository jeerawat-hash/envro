    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
   

	
		
    <style type="text/css">
    	/* Set the size of the div element that contains the map */
#map {
  height: 600px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>
        <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&callback=initMap&libraries=&v=weekly"
      async
    ></script>

		<div class="main-panel">

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">รายละเอียดการจัดเก็บ</h4>
						<ul class="breadcrumbs">
							 
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">

									 	<center> 	 
										       <div id="map"></div>
								 		</center>
								</div>
								<div class="card-body">
									 
							</div>
						</div>

 
					</div>
				</div>

				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">รายละเอียดการจัดเก็บ</h4>
						<ul class="breadcrumbs">
							 
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								 
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th> <center>  -  </center>   </th>
													<th> <center>  -    </center> </th>
													<th> <center>  - </center>  </th>
													<th> <center>  -   </center>  </th>
													<th> <center>  -     </center>  </th>
													<th> <center>  - </center> </th>
													<th> <center>  -  </center> </th>
												</tr>
											</thead>
											 
											<tbody> 
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
													<td ><button class="btn btn-danger">
												<span class="btn-label"><i class="fa flaticon-interface-5"></i> </span>  
											</button> </td>
												</tr> 
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
													<td ><button class="btn btn-danger">
												<span class="btn-label"><i class="fa flaticon-interface-5"></i> </span>  
											</button> </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

 
					</div>
				</div>
			</div>
 <!-- Modal -->
  <div class="modal fade" id="myModalaa" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style = "background-color: #F5CA0C;" >
        	 <h4 class="modal-title">สร้างกลุ่มงานบริการ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p >
          	 <div class="form-group form-inline"   >
												<label for="inlineinput" class="col-md-3 col-form-label"  >ชื่อ</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="inlineinput" placeholder="กรุณากรอกชื่อ">
												</div>
		     </div>
		     <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label" style="text-align:right; ">รายละเอียด</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="inlineinput" placeholder="กรุณากรอกรายละเอียด">
												</div>
		     </div>
		     <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label" style="text-align:right; ">Hightlight</label>
												<div class="col-md-9 p-0">
													<select class="form-control-sm" id="selectHightlight">
													<option>กรุณาเลือกกลุ่ม</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>  
												</div>
		     </div>
		     <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label" style="text-align:right; ">เวลาปฏิบัติงาน</label>
												<div class="col-md-4 p-0">
													<input type="time" class="form-control input-full" id="inlineinput" placeholder="เวลาเริ่ม">
												</div>
												<div class="col-md-5 p-0">
													<input type="time" class="form-control input-full" id="inlineinput" placeholder="เวลาออก">
												</div>
		     </div>
		     
		  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal"> <span class="btn-label"><i class="fa flaticon-success"></i> </span>บันทึก</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="btn-label"><i class="fa flaticon-error"></i> 
				  </span>ยกเลิก</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- END MODAL -- >
		</div>
		 <!--- MODAL -->
 
  
		 <script type="text/javascript"> 
		 	 $("#btn_create_group_service").on("click",function(){ 
		 	   $("#myModalaa").modal("show");
            			 
      	    });

		 	 


		$('#alert_demo_3_1').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "error",
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
				});
				


		 </script>


		 <script type="text/javascript">// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}</script>




    <!-- Replace the value of the key parameter with your own API key. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvr9Bme5OOup5_u4FBaSnCL6Ed0_dhKo&callback=initMap" async defer></script>
    
     
    <script> 
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 13.59934, lng: 100.59675},
    zoom: 12,
    styles: [ 
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
 
  });
   
    
  

  setInterval(function(){ 
    
    
        
        $.get("https://environment.webclient.me/index.php/Qrcontroller/getlocation",function(data){

      var obj = JSON.parse(data);


      for (let index = 0; index < obj.length; index++) { 
         
        var marker = new google.maps.Marker({
          position: {lat : parseFloat(obj[index].Lat) ,lng : parseFloat(obj[index].Lot) },
          map: map,
          title: "้qqqq",
          icon: {
                  url: obj[index].Image, // url
                  scaledSize: new google.maps.Size(50, 50), // scaled size
                  origin: new google.maps.Point(0,0), // origin
                  anchor: new google.maps.Point(0, 0) // anchor
              }
        }); 

        clickroute(parseFloat(obj[index].Lat),parseFloat(obj[index].Lot));
      }

      });





  }, 1000);







/*
  google.maps.event.addListener(map, "click", function (e) {
 
    var latLng = e.latLng;
    
    alert(latLng);
   //alert("("+latLng.lat()+" ,"+latLng.lng()+")");
  
   var aa = confirm("ต้องการจะบันทึกตำแหน่งหรือไม่ ?");

 
   if(aa == true){
   		
      var prompta = prompt("กรุณากรอกข้อความ...");
      







      var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: prompta,
        icon: {
                url: "https://maps.google.com/mapfiles/kml/pushpin/grn-pushpin.png", // url
                scaledSize: new google.maps.Size(20, 20), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 0) // anchor
            }
      }); 



 

   }});
*/





function clickroute(lati,long) {
      var latLng = new google.maps.LatLng(lati, long); //Makes a latlng
      map.panTo(latLng); //Make map global
  }

   
}


    </script>
 