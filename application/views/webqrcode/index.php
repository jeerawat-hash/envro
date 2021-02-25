         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

          <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->  
                <img class="masthead-avatar  " src="https://environment.webclient.me/assets_qr/assets/img/portfolio/bit.png"  />
                <!-- Masthead Heading-->
                <h4 class="masthead-heading text-uppercase mb-0">   ถังหมายเลขที่ 1    </h4>
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
            $("#btnsave").on("click",function(){  
            swal({
  title: "สำเร็จ",
  text: "กรุณากดปุ่มปิด",
  icon: "success",
  button: "ปิด",
});
});
</script>