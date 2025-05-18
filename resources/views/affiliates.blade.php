<x-guest-layout>
       <!--===== ERROR AREA START =====-->

   <div class="error sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="error-image">
                    <img src="assets/img/others/error.png" alt="">
                </div>
                <div class="error-content-area mt-50 heading2">
                    <h2 class="text-[#ffffff]"> Sorry! Page Not Found!</h2>
                    <p class="mt-16">Sorry, the page you are looking for doesn’t exist or <br> has been moved. Here are some helpful links.</p>
                    <div class="button mt-30">
                        <a class="theme-btn3" href="{{route('welcome')}}">Back To Home <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

   <!--===== ERROR AREA END =====-->
</x-guest-layout>
