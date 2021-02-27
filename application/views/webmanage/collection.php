    
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
 





 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container">
          <div class="row">
            <div class="col-6">Name</div>
            <div class="col-6"><label id="Name"></label></div>
          </div>
          <div class="row">
            <div class="col-12"><img src="" id="img" width="30%"></div>
          </div>
          <div class="row">
            <div class="col-6">Lat</div>
            <div class="col-6"><label id="Lat"></label></div>
          </div>
          <div class="row">
            <div class="col-6">Lot</div>
            <div class="col-6"><label id="Lot"></label></div>
          </div>
          <div class="row">
            <div class="col-6">Comment</div>
            <div class="col-6"><label id="Comment"></label></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   
    <!-- Replace the value of the key parameter with your own API key. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvr9Bme5OOup5_u4FBaSnCL6Ed0_dhKo&callback=initMap" async defer></script> 
    <script>

var map;
function initMap() {




    const haightAshbury = { lat: 13.59934, lng: 100.59675 };
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: haightAshbury,
          mapTypeId: "terrain",
        });


  /*
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
 
  }); */



   
    
  

  setInterval(function(){ 
     
        
        $.get("https://environment.webclient.me/index.php/Qrcontroller/getlocation",function(data){

      var obj = JSON.parse(data);


      for (let index = 0; index < obj.length; index++) { 
        


        const svgMarker = {
          path:
            "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
          fillColor: "green",
          fillOpacity: 0.6,
          strokeWeight: 0,
          rotation: 0,
          scale: 2,
          anchor: new google.maps.Point(15, 30),
        };


        var marker = new google.maps.Marker({
          position: {lat : parseFloat(obj[index].Lat) ,lng : parseFloat(obj[index].Lot) },
          map: map,
          label : "ถังขยะ",
          title: "ถังขยะ", 
          LineName : obj[index].Name,
          Image : obj[index].Image,
          icon : svgMarker,
          ID : obj[index].ID/*,
          icon: {
                  url: obj[index].Image, // url
                  scaledSize: new google.maps.Size(50, 50), // scaled size
                  origin: new google.maps.Point(0,0), // origin
                  anchor: new google.maps.Point(0, 0) // anchor
              } */
        }); 


            marker.addListener('click', function() {
 
           


              //alert(obj[index].ID + " " + marker.LineName);
              var id = obj[index].ID;
              
              $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDatabyID",{
                id : id
              },function(data){
                // alert(data);
                var obj = JSON.parse(data);
                var Lat = obj[0].Lat;
                var Lot = obj[0].Lot;
                var Image = obj[0].Image;
                var Comment = obj[0].Comment;
                var Name = obj[0].Name;

                $("#exampleModal").find("#exampleModalLabel").text(Name);
                $("#exampleModal").find("#img").attr("src",Image);
                $("#exampleModal").find("#Lat").text(Lat);
                $("#exampleModal").find("#Lot").text(Lot);
                $("#exampleModal").find("#Comment").text(Comment);
                $("#exampleModal").modal("show");
              });
            });
            
        //clickroute(parseFloat(obj[index].Lat),parseFloat(obj[index].Lot));
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
      return false;
  }

   
}


    </script>
 