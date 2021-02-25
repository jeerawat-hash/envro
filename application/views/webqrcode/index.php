         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

          <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->  
                <img class="masthead-avatar  " src="https://environment.webclient.me/assets_qr/assets/img/portfolio/bit.png"  />
                <!-- Masthead Heading-->
                <h4 class="masthead-heading text-uppercase mb-0">   ถังหมายเลขที่ 1    </h4>
                <input class="input100" type="text"   id="tgetlo" name="tgetlo"    >
                <br>
                 <h4 class="text-uppercase mb-4">สถานที่ : พระประแดง </h4>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-archive"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
               
                <p class="masthead-subheading font-weight-light mb-0"><button  id="btnsave" class="btn btn-warning"> บันทึกการทำรายการ </button></p>
            </div>
        </header>
     
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2021</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
 
        <script type="text/javascript">
            var tgetlo = $("#tgetlo").val();
            var textbtndata =  tgetlo+"กรุณากดปุ่มปิดs";

             console.log(tgetlo);
            $("#btnsave").on("click",function(){  

                alert(tgetlo);
          /*  swal({
  title: "สำเร็จ",
  text: textbtndata,
  icon: "success",
  button: "ปิด",
}); */
});
</script>


<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>

<script> 
  
        function runApp() {
          liff.getProfile().then(profile => {

             $("#TextProfile").text(profile.displayName);
             $("#ImgProfile").attr("src",profile.pictureUrl);
            // $("#userId").attr("value",profile.userId);
           // $("#LineID").attr("value",profile.userId);
             


            console.log(profile.pictureUrl);




          }).catch(err => console.error(err));
        }
        liff.init({ liffId: "1655702904-dOw6XRvE" }, () => {
          if (liff.isLoggedIn()) {
            runApp();

          } else {
            liff.login();
          }
        }, err => console.error(err.code, error.message));
  </script>

  
<script>
var x = document.getElementById("location");

 getLocation();

//console.log(location);

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
   alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  //x.value = "{'Latitude': '" + position.coords.latitude + "','Longitude': " + position.coords.longitude+"}";
	x.value = '{ "Latitude":"'+ position.coords.latitude +'", "Longitude":"'+position.coords.longitude+'"}';
 
}


</script>
