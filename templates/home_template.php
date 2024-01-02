
<marquee scrollamount="10" direction="left" behavior="left"><font color="darkgreen"font size ="5">
<b>WELCOME TO THE*ZOO | New ticket Available...|&nbsp Animals are the funny &nbsp& Animal Night & Games are Avaliable &nbsp
| EXPERIENCE THE BST VISIT EVER...|Awesome Place to Visit...|&nbsp&Choose Your
Experience &nbsp& Most Popular Places...| Elephant show...|
&nbsp&nbsp&nbsp&AMAZING WORLD WILDLIFE-ZOO... 
| Join with us...|Best Tour for Visit...</b></font></marquee>


<section style="background: url(../img/large-safari.jpg)" class="py-5 bg-cover bg-center">
    <div class="hero-overlay"></div>
    <div class="container py-5 px-0 text-white text-left">
        <h1 class="text-shadow hero-heading font-weight-normal">The*Zoo Management System in Sri Lanka</h1>
        <p class="text-shadow font-weight-light mt-3 mb-4" style="width: 25%"></br>
            We integrate wildlife health and care, science, and education to develop sustainable 
			conservation solutions.Conservation is at the heart of everything we do. 
			And it starts with that connection we make with people and wildlife every day. 
			Because when wildlife thrives, all life thrives.
        </p>
    </div>
</section>
<!-- welcome to Zoo Management System -->
<section class="pb-2 pt-5">
    <div class="container-fluid p-5 pb-2">
        <div class="row px-2">
            <div class="col-lg-6 col-sm-12">
                <h1>Welcome to <span class="font-weight-bold text-light-green">Our Website ! ! !</span></h1>
                <div style="width: 80%">

                    <hr style="border-top: 10px solid #489A33;">
                </div>
                <span>The*Zoo Management is committed to saving species worldwide by uniting our expertise in animal care and 
				conservation science with our dedication to inspiring
				passion for nature.A World Where All Life Thrives
                With our new name comes a new logo, which represents a history of achievement and 
				The*Zoo Management future as a force for conservation.</span></br>
				</br>
				<h1>Be a Wildlife Ally ! ! !</h1></br>
				<p>We can't do it alone! Our supporters play a crucial role, and we need dedicated 
				partners like you. Join the Zoo Wildlife Alliance by becoming a member, 
				help fund conservation projects, volunteer your time and knowledge, 
				or partner with us to sustain conservation efforts worldwide. 
				Your support makes a world of difference.</p></br>
                <a href="gallery" class="btn btn-primary btn-sm" style="border-radius: 60px;">View Gallery
				<img src="../img/naples-zoo-at-carribean-gardens.jpg" width="480px" style="border-radius: 70px;"></a>
				
            </div>
			
            <div class="col-lg-6 col-sm-10 mt-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="../img/5a7defe28b56.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%" >
                        <h4 class="h5 mb-2">Animals & Plants</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
					<div class="col">
                        <img src="../img/images.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%">
                        <h4 class="h5 mb-2">Journal</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
                    <div class="col">
                        <img src="../img/wildlife-booklet-cover.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%">
                        <h4 class="h5 mb-2">Stories</h4>
                        <p class="text-small text-muted">The grizzly-polar bear hybrid is a cross between a Polar bear and a grizzly bear and named the ‘pizzly bear.’</p>
                    </div>
				<div class="col-lg-12 col-sm-20 mt-sm-5">
                <div class="row">
                    <div class="col">
                        <img src="../img/children-hero.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%">
                        <h4 class="h5 mb-2">Education</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
					<div class="col">
                        <img src="../img/penguins.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%">
                        <h4 class="h5 mb-2">Citizen Science</h4>
                        <p class="text-small text-muted">Australian geckos don’t have eyelids. Their eyes are protected by a transparent membrane, and they take care of them by licking them clean.</p>
                    </div>
                    <div class="col">
                        <img src="../img/Basecamp-2-WP.jpg" alt="" class="img-fluid mb-4" width="100%" height="100%">
                        <h4 class="h5 mb-2">Wildlife Exploers</h4>
                        <p class="text-small text-muted">The grizzly-polar bear hybrid is a cross between a Polar bear and a grizzly bear and named the ‘pizzly bear.’</p>
                    </div>

                </div>
                </div>

            </div>
			
        </div>
		
    </div>
	
</section>





<!-- animal of the week -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    This week's featured <span class="font-weight-bold" style="color: #BE9D0D">Elephant Events</span>
                    <img src="../img/number_1_hand.png" alt="" width="40px">
                </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- <div style="width: 9%">
                    <hr style="border-top: 20px solid #FFE263;">
                </div> -->
                <div>
		<img src="../img/animals/<?= $getImageName($currAnimal['animal_id']) ?>" alt="" style="border-radius: 20px">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-sm-4 pt-lg-2">
                <div class="row">
                    <div class="col">
                        <h3> <span class="text-dark"><?= $currAnimal['an_given_name'] ?></h3>
                        <h6> <span class="text-muted">Species name:</span>&ensp;<?= $currAnimal['an_species_name'] ?></h6>
                        <h6> <span class="text-muted">Date of birth:</span>&ensp;<?= $currAnimal['an_dob'] ?></h6>
                        <h6> <span class="text-muted">Gender:</span>&ensp;<?= $currAnimal['an_gender'] == "m" ? "Male" : "Female" ?></h6>
                        <h6> <span class="text-muted">Zoo join date:</span>&ensp;<?= $currAnimal['an_joindate'] ?></h6>
                        <?php if ($currAnimal['an_description'] != "") { ?>
                            <h6> <span class="text-muted">Description</span>&ensp;<?= $currAnimal['an_description'] ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray py-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 lined ml-5">Map of Zoo</h2>
                <div class="row">
                    <div class="col-xs-10 col-lg-6">
                        <img src="../img/zoo_map.jpg" alt="" width="90%">
                    </div>
                    <div class="col-xs-10 col-lg-6 mt-xs-3 mt-3">
                        <img src="../img/zoo_areas.png" alt="" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our sponsors -->
<section class="p-3" style="background-color:#00804d">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3 class="text-center font-weight-bold text-white">Our Sponsors</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($testimonials as $testimonial) { ?>
                <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                    <div class="">
                        <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                    </div>
                    <h5 class="text-white mt-2"><?= $getSponsorName($testimonial['sponsor_id']) ?></h5>
                    <p class="" style="color: #ebe1e1"><?= $testimonial['test_message'] ?></p>
                </div>
            <?php  } ?>
            <!-- <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div> -->

            <!-- <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div>
            <div class="col-lg-4 col-sm-10 text-center mb-sm-4">
                <div class="">
                    <img src="../img/gr7.png" alt="" width="195px" style="border-radius: 50%; border: 10px solid #3E7331">
                </div>
                <h5 class="text-white mt-2">Alicia Doe</h5>
                <p class="" style="color: #ebe1e1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos molestiae ex ratione deleniti fuga libero a. Nobis, voluptatum magnam?</p>
            </div> -->
        </div>
    </div>
</section>
