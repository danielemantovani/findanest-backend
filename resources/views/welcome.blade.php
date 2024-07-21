@extends('layouts.app')

@section('content')
<style>
   img {
   max-width: 100%;
   object-fit: cover;
}
.hero-section {
 
  margin-top: 50px;
  height: 600px;
}
.text-color{
   color: #CF9FFF;
}
.btn{
   border:2px solid #CF9FFF;
}
.btn:hover{
   background-color: #CF9FFF;
}
</style>
    <div class="wrapper">
        <!-- prima parte -->
        <header class="hero-section">
            <div class="container">
                <div class="row align-items-center py-4 g-5">
                    <div class="col-12 col-md-6">
                        <div class="text-center text-md-start">
                            <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                                <span class="text-color">Affitta </span>con Facilità Guadagna senza Pensieri
                            </h1>
                            <p class="lead">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate dolorem aliquid quae sunt asperiores blanditiis, rerum eos, quis nam voluptatem distinctio! Nulla eius ea natus vitae voluptatem cupiditate architecto. Fugiat.
                            </p>
                            <button class="btn px-5 py-3 mt-3 fs-5 fw-medium color-primary" type="button">
                                Pubblica il tuo primo annuncio
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="{{ asset('images/backi.jpg') }}" class="img-fluid" alt="a man using vr gadget" />
                    </div>
                </div>
                <!-- fine prima riga -->

            </div>
        </header>
    </div>

    <div class="container">
        <div class="row align-items-center gx-3 gy-5 py-5 mt-5">
            <div class="col-12 col-md-12 col-lg-5">
                <img src="assets/img-1.webp" class="img-fluid mx-auto d-block" alt="a man using vr gadget" />
            </div>
            <div class="col-12 col-md-12 text-center text-lg-start col-lg-7">
                <h2 class="fw-bold text-primary fs-1 pb-3">About TechGear Hub</h2>
                <p class="about-text">
                    TechGear Hub is at the forefront of technology innovation, curating
                    a collection of the latest gadgets and accessories to elevate your
                    digital lifestyle. We believe in the power of technology to enhance
                    everyday experiences, and our mission is to bring cutting-edge
                    products to tech enthusiasts around the world.
                </p>
                <p class="about-text">
                    With a focus on quality, functionality, and style, TechGear Hub
                    sources products from leading manufacturers and emerging tech
                    innovators. Our team of experts carefully selects each item to
                    ensure it meets our high standards and aligns with the ever-evolving
                    needs of our diverse community of customers.
                </p>
                <button class="btn px-5 py-3 mt-3 fs-5 fw-medium" type="button">
                    Read More About Now
                </button>
            </div>
        </div>
    </div>
    <div class="features-section py-5">
        <div class="container">
            <h2 class="fs-1 fw-bold text-center pt-5 pb-5 text-primary">
                Key Features
            </h2>
            <div class="row g-5 pb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="card px-3 py-4 shadow-sm">
                        <ion-icon class="ionicons" name="bulb-outline"></ion-icon>
                        <h3 class="f5">Innovative Technology</h3>
                        <p class="card-text lead">
                            Explore products featuring the latest and most innovative
                            technologies.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card px-3 py-4 shadow-sm blue-bg">
                        <ion-icon class="ionicons" name="shield-checkmark-outline"></ion-icon>
                        <h3 class="f5">Quality Assurance</h3>
                        <p class="card-text lead">
                            Our team ensures that every product meets high-quality
                            performance.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 offset-md-3 offset-0 offset-lg-0">
                    <div class="card px-3 py-4 shadow-sm">
                        <ion-icon class="ionicons" name="hourglass-outline"></ion-icon>
                        <h3 class="f5">Timely Delivery</h3>
                        <p class="card-text lead">
                            Experience prompt and reliable delivery services to get your
                            tech gear right now.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h2 class="fs-1 fw-bold text-primary text-center pb-5">
                    Our Products
                </h2>
                <ul class="nav nav-tabs d-flex flx-wrap justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active me-md-3 me-1 text-dark" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">
                            All
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link me-md-3 me-1 text-dark" id="vr" data-bs-toggle="tab"
                            data-bs-target="#vr-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">
                            Virtual Reality
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link me-md-3 me-1 text-dark" id="headphones-tab" data-bs-toggle="tab"
                            data-bs-target="#headphones-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">
                            Headphones
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row g-4 mt-5 justify-content-center align-items-center">
                            <div class="col-12 col-md-4">
                                <img src="assets/headphones-1.webp" alt="" class="img-fluid  d-block mx-auto" />
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="assets/vr-1.webp" alt="" class="img-fluid  d-block mx-auto" />
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="assets/vr-2.webp" alt="" class="img-fluid  d-block mx-auto" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vr-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row mt-5 g-4">
                            <div class="col-12 col-md-4">
                                <img src="assets/vr-1.webp" alt="" class="img-fluid" />
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="assets/vr-2.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="headphones-tab-pane" role="tabpanel" aria-labelledby="headphones-tab"
                        tabindex="0">
                        <div class="row g-4 mt-5">
                            <div class="col-12 col-md-4">
                                <img src="assets/headphones-1.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold text-primary fs-1 pb-3 text-center">
                    How it works
                </h2>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-3 text-dark fw-medium" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                How can I browse and explore products on TechGear Hub?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="lead">
                                    Ordering your favorite tech gear from TechGear Hub is a
                                    breeze. Once you've found the perfect product, simply add it
                                    to your cart and proceed to checkout. Our secure and
                                    efficient checkout process allows you to review your order,
                                    enter shipping details, and choose from multiple payment
                                    options. Rest assured, your transaction is protected, and
                                    your order will be swiftly processed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-dark fw-medium" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                What is the ordering process like?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="lead">
                                    Ordering your favorite tech gear from TechGear Hub is a
                                    breeze. Once you've found the perfect product, simply add it
                                    to your cart and proceed to checkout. Our secure and
                                    efficient checkout process allows you to review your order,
                                    enter shipping details, and choose from multiple payment
                                    options. Rest assured, your transaction is protected, and
                                    your order will be swiftly processed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-dark fw-medium" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How does TechGear Hub ensure customer satisfaction?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="lead">
                                    At TechGear Hub, customer satisfaction is our top priority.
                                    We are committed to delivering high-quality products and
                                    exceptional service. Our team carefully inspects and
                                    packages each order, ensuring it reaches you in perfect
                                    condition. Additionally, our responsive customer support is
                                    ready to assist with any inquiries or concerns you may have.
                                    Join our community of satisfied customers who trust TechGear
                                    Hub for a seamless and enjoyable shopping experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <footer class="footer-section">
        <p class="text-center py-5 mb-0">
            &copy; 2023 TechGear Hub. All rights reserved.
        </p>
    </footer>
@endsection
