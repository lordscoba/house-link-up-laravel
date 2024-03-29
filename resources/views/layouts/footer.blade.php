<!-- footer start -->
<footer>
    <div class="footer footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="footer-details text-center">
                        <img loading="lazy" style="width:210px" src="{{ asset('assets/img/house_link_up_top.png') }}"
                            alt="">
                        </a>
                        <p>This service is offered by JASSAT ReaL Estate Firm, a sector of JASSAT
                            Subsidiaries.
                        </p>
                        <h6>Contact us</h6>
                        <ul class="icon-list">
                            <li><a href="tel:+2349136487446"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="mailto:support@houselinkup.com"><i class="fas fa-envelope"></i></a></li>
                            <li><a
                                    href="https://www.facebook.com/profile.php?id=61554710857371&mibextid=3JLxgoXK8XkhKqoE"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/houselinkup_properties?igsh=OGY3MTU3OGY1Mw=="><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/houselinkup"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-links footer-left-space">
                                <h5 class="footer-title ">Useful links
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a href="{{ route('about-us') }}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">New Arrivals</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h5 class="footer-title">feature
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a href="{{ route('faq') }}">Faq</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact-us') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-links">
                                <h5 class="footer-title">Social
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <ul class="footer-content">
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=61554710857371&mibextid=3JLxgoXK8XkhKqoE">Facebook</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.instagram.com/houselinkup_properties?igsh=OGY3MTU3OGY1Mw==">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/houselinkup">Twitter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-links">
                                <h5 class="footer-title">subscribe
                                    <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                </h5>
                                <div class="footer-content">
                                    <p class="mb-0">
                                        This service is offered by JASSAT ReaL Estate Firm, a sector of JASSAT
                                        Subsidiaries.
                                    </p>

                                    <form action="/suscribers" class="row gx-2 gx-sm-3" method="POST">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li><br>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address" required>
                                            <span class="input-group-apend">
                                                <button type="submit" class="input-group-text" id="basic-addon2"><i
                                                        class="fas fa-paper-plane"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-blog">
                        <div class="slick-between">
                            <div class="footer-slider">
                                <div>
                                    <div class="media">
                                        <a href="blog-detail-left-sidebar.html">
                                            <div class="img-overlay">
                                                <img loading="lazy"
                                                    src="{{ asset('assets/img/house_link_up_logo.png') }}"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="blog-detail-left-sidebar.html">House Linkup Real Estate
                                                    Company</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html">An
                                                    Electronic version of the real estate industry.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href="blog-detail-left-sidebar.html">
                                            <div class="img-overlay">
                                                <img loading="lazy" src="../assets/images/footer/2.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="blog-detail-left-sidebar.html">Entertaining Spaces</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html">This home
                                                    provides
                                                    wonderful entertaining spaces.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href="blog-detail-left-sidebar.html">
                                            <div class="img-overlay">
                                                <img loading="lazy" src="../assets/images/footer/3.jpg" alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="blog-detail-left-sidebar.html">Estate Agents Work</a></h6>
                                            <p class="font-roboto"><a href="blog-detail-right-sidebar.html">The
                                                    market of buying and selling real estate.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <a href="blog-detail-left-sidebar.html">
                                            <div class="img-overlay">
                                                <img loading="lazy" src="../assets/images/footer/4.jpg"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h6><a href="blog-detail-left-sidebar.html">Increase in Demand</a></h6>
                                            <p class="font-roboto"><a href="">The effects of an increase demand
                                                    in
                                                    short run.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer footer-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="copy-right">
                        <p class="mb-0">Copyright 2022, All Right Reserved <a
                                href="https://www.snappy-fix.com/">Snappy-fix Technologies</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 text-end">
                    <ul class="sub-footer-link">
                        <li><a href="{{ route('landing') }}">Home</a></li>
                        <li><a href="{{ route('terms-conditions') }}">Terms</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy policy</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


<!-- tap to top start -->
<div class="tap-top">
    <div>
        <i class="fas fa-arrow-up"></i>
    </div>
</div>
<!-- tap to top end -->


<!-- log out modal start -->
<div class="modal fade edit-profile-modal logout-modal" id="logout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logging out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Are you sure ? you want to log out.</h6>
                <p>Once you will be logged out and will be unable to log in back.</p>
            </div>
            <div class="modal-footer">


                <button type="button" class="btn btn-dashed color-2 btn-pill" data-bs-dismiss="modal">no</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-gradient color-2 btn-pill">yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- log out modal end -->

<!-- latest jquery-->
{{--
<script src="../assets/js/jquery-3.6.0.min.js"></script> --}}
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- magnific js -->
{{--
<script src="../assets/js/jquery.magnific-popup.js"></script> --}}
{{--
<script src="../assets/js/zoom-gallery.js"></script> --}}
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/zoom-gallery.js') }}"></script>


<!-- popper js-->
{{--
<script src="../assets/js/popper.min.js"></script> --}}
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
{{--
<script src="../assets/js/bootstrap.bundle.min.js"></script> --}}

<!-- wow js-->
{{--
<script src="../assets/js/wow.min.js"></script> --}}
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!-- feather icon js-->
{{--
<script src="../assets/js/feather-icon/feather.min.js"></script> --}}
<script src="{{ asset('assets/js/feather-icon/feather.min.js') }}"></script>
{{--
<script src="../assets/js/feather-icon/feather-icon.js"></script> --}}
<script src="{{ asset('assets/js/feather-icon/feather-icon.js') }}"></script>

<!-- smooth scroll js -->
{{-- <script src="../assets/js/smooth-scroll.js"></script> --}}
<script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>

<!-- tilt js-->
<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
{{--
<script src="../assets/js/tilt.jquery.js"></script> --}}

<!-- datepicker js-->
{{--
<script src="../assets/js/date-picker.js"></script> --}}
<script src="{{ asset('assets/js/date-picker.js') }}"></script>

<!-- slick js -->
{{--
<script src="../assets/js/slick.js"></script> --}}
<script src="{{ asset('assets/js/slick.js') }}"></script>
{{--
<script src="../assets/js/slick-animation.min.js"></script> --}}
<script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
{{--
<script src="../assets/js/custom-slick.js"></script> --}}
<script src="{{ asset('assets/js/custom-slick.js') }}"></script>

<!-- Template js-->
{{--
<script src="../assets/js/script.js"></script> --}}
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- Customizer js-->
{{--
<script src="../assets/js/customizer.js"></script> --}}
<script src="{{ asset('assets/js/customizer.js') }}"></script>

<!-- Color-picker js-->
{{--
<script src="../assets/js/color/template-color.js"></script> --}}
<script src="{{ asset('assets/js/color/template-color.js') }}"></script>

<!-- print js -->
{{-- <script src="../assets/js/print.js"></script> --}}
<script src="{{ asset('assets/js/print.js') }}"></script>

<!-- Color-picker js-->
{{-- <script src="../assets/js/color/single-property.js"></script> --}}
<script src="{{ asset('assets/js/color/single-property.js') }}"></script>

<!-- range slider js -->
{{-- <script src="../assets/js/jquery-ui.js"></script> --}}
{{-- <script src="../assets/js/jquery.ui.touch-punch.min.js"></script> --}}
{{-- <script src="../assets/js/range-slider.js"></script> --}}

<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/range-slider.js') }}"></script>

</body>

</html>

{{-- for change of picture --}}

<script type="text/javascript">
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        function showMember() {

            window.location = {
                {
                    URL::current()
                }
            };

        }


        $('#editPicture').on('submit', function(e) {
            e.preventDefault();
            var form = $(this).serialize();
            var url = $(this).attr('action');
            // $.post(url,form,function(data){
            //     $('#edit-profile').modal('hide');
            //
            // })

            $.ajax({
                url: url,
                type: "POST",
                // data: form,
                // data: datatopost,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data) {
                        $("#editmessageEmail").html(
                            "<div class='alert alert-success'>success</div>");
                    }
                    showMember();

                },
                error: function(request, status, error) {
                    $("#editmessageEmail").html(
                        "<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>"
                    );
                    alert(request.responseText);
                }

            })



        });



        // $("#editFormprofile").submit(function(event){
        //     //prevent default php processing
        //     event.preventDefault();
        //     //collect user inputs
        //             var form = $(this).serialize();
        //             var url = $(this).attr('action');
        //     // var datatopost = $(this).serializeArray();
        // //    console.log(datatopost);
        //     //send them to signup.php using AJAX1
        //     $.ajax({
        //         url: url,
        //         type: "POST",
        //         data: form,
        //         success: function(data){
        //             $("#editmessage").html("<div class='alert alert-success'>success</div>");
        //     },
        //     error: function(){
        //         $("#editmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");

        //     }

        //     });

        // });

    });
</script>

{{-- lazy loading --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyBackgrounds = document.querySelectorAll(".lazy-background");

        if ("IntersectionObserver" in window) {
            var lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var lazyBackground = entry.target;
                        lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset
                            .src + ')';
                        lazyBackgroundObserver.unobserve(lazyBackground);
                    }
                });
            });

            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackgroundObserver.observe(lazyBackground);
            });
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset.src + ')';
            });
        }
    });
</script>
