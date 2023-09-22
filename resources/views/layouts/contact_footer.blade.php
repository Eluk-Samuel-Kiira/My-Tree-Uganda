
<!-- ? FOOTER -->
<section id="contact">
    <div class="container">
        <div class="row single-form g-0">
            <div class="col-sm-12 col-lg-6">
                <div class="left">
                    <h4>Contact us</h4><hr>
                    <div class="mt-4">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p >Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div><hr>
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill"></i>
                            <p>Contact :- 8888888888</p>
                        </div><hr>
                        <div class="d-flex">
                            <i class="bi bi-envelope-fill"></i>
                            <p>Email:- Contact@gmail.com</p>
                        </div><hr>
                        <div class="d-flex">
                            <i class="bi bi-browser-chrome"></i>
                            <p>Website: www.contact.com</p>
                        </div><hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="right">
                    <i class="fa fa-caret-left"></i>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                            <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End -->


<!-- Footer -->

<footer class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="{{route("landing.index")}}">
                    <img src="/images/logo2.png" alt="" style="width: 180px;" class="mb-3">
                </a>
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <ul class="list-inline mt-4">
                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                <h6 class="text-uppercase font-weight-bold mb-4">Reports</h6>
                <p class="text-muted mb-2">Annual Reports, Financial Reports, Partner Reports</p>
                <a
                    href="#"
                    class="btn btn-brand text-uppercase"
                >Download Reports</a
                >
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                <h6 class="text-uppercase font-weight-bold mb-4">Our Newsletter</h6>
                <p id="emailHelp" class="text-muted mb-2">Subscribe to our newsletter to receive email updates from our team.</p>
                <form class="row g-2">
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" aria-label="Email address" aria-describedby="emailHelp">
                            <button class="btn btn-brand text-uppercase" type="button">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="footer-bg">
        <div class="container text-center">
            <p class="mb-0 py-2" id="yearPlaceholder">© <span id="currentYear"></span> My Tree Initiative All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Jquery -->
<script src="./js/jquery.js"></script>
<!-- Bootstrap js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
<!-- owl js -->
<script src="./js/owl.carousel.min.js"></script>
<!-- my own js -->
<script src="./js/app.js"></script>

<script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the HTML element
    const currentYearPlaceholder = document.getElementById('currentYear');
    currentYearPlaceholder.textContent = currentYear;

    //INCREMENT IMPACT NUMBERS
    function incrementToNumber(targetNumber) {
        const outputElement = document.getElementById("school-impact");

        let currentNumber = 0;
        const interval = setInterval(() => {
            outputElement.innerHTML = `${currentNumber}`;
            if (currentNumber >= targetNumber) {
                clearInterval(interval); // Stop counting when the target is reached
            }
            currentNumber++;
        }, 10); // 1 second interval between increments
    }

    const myDiv = document.getElementById("schools");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Start counting when the div is in view
                incrementToNumber(50000); // You can change the target number as needed
                observer.disconnect(); // Stop observing once counting has started
            }
        });
    });

    // Start observing the "myDiv" element
    observer.observe(myDiv);
</script>

</body>
</html>