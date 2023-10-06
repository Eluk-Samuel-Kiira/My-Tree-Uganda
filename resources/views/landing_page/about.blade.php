@include('layouts.modal')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap cdn -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- others in css folder -->
    <link rel="stylesheet" href="./css/boxicons.min.css" />
    <!-- own css -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Our Friends</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

@include('layouts/secondary_nav')
<!--MAIN NAVBAR -->

<!--about us-->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy" src="/images/carousel2.png" alt="">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="h1 mb-3">Who Are We?</h2>
                        <p class="lead fs-4 text-secondary mb-5">
                            We are a My Tree Initiative, a youth leading Environmental Conservation Organization
                            in Uganda that aims to combat Climate Change and enrich everyone's life through trees and make Uganda a greener, healthier and a more beautiful place.
                        </p>
                        <!--                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>-->
                        <div class="row gy-4 gy-md-0 gx-xxl-5X">
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-3">Our Mission</h4>
                                        <p class="text-secondary mb-0">
                                            Plant , protect and promote trees in partnership with local communities to transform landscapes and lives.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                            <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-3">Our Vision</h4>
                                        <p class="text-secondary mb-0">
                                            A world where trees are valued and forests fourish for the beneft of people and planet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about us-->

<!--our story-->
<section class="py-3">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="h1 mb-3">Our Story</h2>
                        <p class="lead fs-5 text-secondary">
                            Our journey with the My Tree Initiative organization began on a transformative day
                            in our lives. After completing college, we returned home to our small village of Kawempe
                            in Kampala District, Uganda. Upon arrival, we were struck by the stark changes in
                            our once-familiar surroundings. The compounds, football pitches, and beloved trees where
                            we had shared countless memories with neighbors and friends had vanished, replaced by
                            houses and businesses. This loss deeply moved us, and we recognized the urgent need to
                            address the disappearance of what we, as young people, cherished - our playgrounds.<br><br>
                            As we began to speak out about this issue, our mission evolved beyond safeguarding play
                            spaces; it expanded to the preservation of our environment, particularly our trees. This
                            realization occurred as we followed global news and read about environmental challenges.
                            Thus, My Tree Initiative was born. We embarked on our journey by planting our first tree
                            at Tula Primary School, accompanied by 50 community members. <br><br>Since that day, our
                            organization has grown immensely, spreading the message of tree planting and preservation
                            to over one million people in Uganda, greening 210 schools, planting more than 1.7 million
                            trees, and organizing 103 tree planting events. Our humble beginnings have blossomed into
                            a movement dedicated to preserving our environment for generations to come.
                        </p>
                        <!--                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>-->

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy" src="/images/carousel2.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--our story-->

<!--why tree-->
<section class="py-3">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="h1 mb-3 text-center">Why Trees?</h2>
                        <p class="lead fs-5 text-secondary">
                            Trees are a vital resource for people's lives. They provide shade and shelter, help
                            to prevent soil erosion, restore degraded land, and can be a valuable source of food
                            and nutrition. tackling poverty and improving the lives of local communities.
                            Tree planting is also one of the most effective ways to mitigate the effects of
                            climate change. A single mature tree can remove upwards of 25kgs of harmful
                            greenhouse gases out of the atmosphere.
                        </p>
                        <!--                        <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>-->
                    </div>
                </div>

                <div class="row gy-4">
                    <!-- card 1 -->
                    <div class="col-lg-4 col-sm-8">
                        <div class="service-box">
                            <h5 class="about-h5 mb-3">Afforestation Projects</h5>
                            <div class="card" style="width: 100%; border: 0;">
                                <img src="/images/carousel1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-secondary mb-0 text-start">
                                        My Tree initiative strategically engages in restoration projects on National Forest
                                        Reserves across Uganda; from restoring land after deforestation or degradation to
                                        enhancing waterways and improving recreation trails systems. We strive to engage
                                        communities in our restoration work through volunteer opportunities and by generating
                                        funds from business and corporate  partners to support the implementation of these projects.
                                        We strictly plant indigenous tree species in Central forest reserves, like Nakindiba
                                        Forest reserve along Hoima Road, on private farms and along River banks and lakes.
                                        Visit some of our project in Nakindiba Forest Reserve together with Ministry of
                                        Foreign Affairs and National Forest Authority.
                                        Contribute to our work restoring National Forests Reserves in Uganda National Forests
                                    </p>
                                    <div class="float-sm-start mt-3">
                                        <a href="/#donate" class="btn btn-brand py-2">Fund A Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div class="col-lg-4 col-sm-8">
                        <div class="service-box">
                            <h5 class="about-h5 mb-3">Educational Campaigns</h5>
                            <div class="card" style="width: 100%; border: 0;">
                                <img src="/images/carousel1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-secondary mb-0 text-start">
                                        Through My Tree Initiative's Educational campaigns, for the Greater understanding
                                        of the ecological, environmental, social and economic value of trees. We provide
                                        a learning platform called the "Green Talk Show" for community-based groups and
                                        the general public using social media platforms. This is where environment and
                                        sustainability conversations take place, giving room for proposed solutions on
                                        topics like afforestation, renewable energy, waste management and pollution.
                                        For school students, we organise workshops and seminars, printing and distributing
                                        posters, brochures and pamphlets on environment through our Green Clubs in schools
                                        to teach students, teachers and parents on how to live a sustainable lifestyle
                                        and to nurture future climate  advocates.
                                        Contribute to our work on organizing the Green Talk Show and printing education
                                        materials for our educational campaigns
                                    </p>
                                    <div class="float-sm-start mt-3">
                                        <a href="/#donate" class="btn btn-brand py-2">Donate to educational campaigns</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 3 -->
                    <div class="col-lg-4 col-sm-8">
                        <div class="service-box">
                            <h5 class="about-h5 mb-3">Corporate Tree Planting Events</h5>
                            <div class="card" style="width: 100%; border: 0;">
                                <img src="/images/carousel1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-secondary mb-0 text-start">
                                        Our organize unique Tree Planting Events which provide an ideal and really
                                        tangible way to fulfil any compan/business's CSR/sustainability targets, while
                                        having fun and inspiring the next generation. We fully manage the events for
                                        you & invite you to bring your team, your clients and your wellies for a morning
                                        of education, tree planting and commemorative photography to make the most of
                                        your environmental contributions. Pre and post event, we provide materials to
                                        help you with your local, national and trade sector PR and marketing, to
                                        enhance your brand and help meet your CSR objectives.
                                    </p>
                                    <div class="float-sm-start mt-3">
                                        <a href="#contact" class="btn btn-brand py-2">Contact Us to prepare your an Event </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--why tree-->

<!-- ? FOOTER -->
@include("layouts.contact_footer")
<!-- FOOTER -->

<!-- button -->

<!-- Jquery -->
<script src="./js/jquery.js"></script>
<!-- Bootstrap js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
></script>
<!-- my own js -->
<script src="./js/app.js"></script>
<script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the HTML element
    const currentYearPlaceholder = document.getElementById('currentYear');
    currentYearPlaceholder.textContent = currentYear;
</script>

</body>
</html>
