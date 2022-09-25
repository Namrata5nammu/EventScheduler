<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Scheduling</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/wed.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">WEDDING HALL ,THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE WEDDING DAYS</h5><!--content title-->
                                                <p>
                                                Sitting amongst historic sandstone, the ES WEDDING HALL is the epitome of elegance for a sophisticated celebration ,when you dine in.


                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an extensive
                                                food list available, AC capabilities for speeches and formalities and
                                                an adjoining lounge for pre or post wedding entertaining, the ES Wedding
                                            is a unique, romantic and stylish choice.
                                                </p>

                                                <p>
                                                Accommodating n number of  guests for dinners or conferences and up to 120 for 
                                                cocktail parties, this private, heritage space brings character and
                                                charm to any event, with the attached lounge and bar ideal for pre- or
                                                post-event drinks or for use as a breakout room.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">ES WEDDING HALL</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            The Rocks 20 Main Street
                            </p>
                            <p class="definition"><!--content body-->
                            Sitting amongst historic sandstone, the ES WEDDING HALL is the epitome of elegance for a sophisticated celebration ,when you dine in.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/grp.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel"></h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/gp.webp" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Grape Wine in the Rocks</h5><!--content title-->
                                                <p>
                                                Champagne imbibing, glamorous, smiling and flirting, The Planet of Grapes
                                                is the Sydney Sophisticate’s adult playground.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Awarded a Chef’s Hat in the 2019 Sydney Morning Herald Good Drinks Guide Awards,
                                                we serve up a contemporary twist on the best classic French food for lunch,
                                                dinner and late-night suppers. With a produce-centric menu that takes global
                                                cues and delivers them at affordable prices, you’re in for a feast for your senses.
                                                </p>

                                                <p>
                                                Our dedicated Seafood Bar is a venue highlight, treating you to shucked-to-order oysters
                                                and a daily plateau fruits de mer. Our full  menu is also complemented by
                                                a selection of bar treats, available until 3am. So if you’re a grape lover, theatre goer or night-dweller 
                                                looking for a late night dining experience, The Planet of Grapes has you covered.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Planet of the GRAPES</h1><!--location title-->
                            <p class="location">The Rocks 18 Argyle Street</p><!--location secondary content-->
                            <p class="definition">
                            Planet of the Grapes , is the Sydney Sophisticate’s adult playground.
                            This breathtaking venue bring shimmering French glamour to The Rocks.
                            Enjoy champagne and oysters after work and cocktails into the early hours, or indulge in
                            a magnificent French meal in the place.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/day.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel"></h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/cel.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Make Your Day More Special</h5><!--content title-->
                                                <p>
                                                There’s no question that This would be the best choice for you and your loved ones to make their day memorable,
                                                our landmark venue, has a unique, rich prestige all of its own.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                If your event is shaping up to be high in numbers, then Gallery’s high-end classic style has room to spare.
                                                Combined with the 'Enjoying' Room and 'Belved' Bar, there’s space for up to 500 guests – perfect for thriving
                                                cocktail parties, networking or post-conference events.
                                                </p>

                                                <p>
                                                The venue can also be hired for social or corporate functions for groups up to 1800. Event organisers
                                                have the choice between the sandstone courtyard, the Main Bar, Gallery, 'Enjoying' Room, Belvedere Bar
                                                or the entire venue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Dream Connect</h1>
                            <p class="location"> Whitefield, Argyle Street  Bangalore</p>
                            <p class="definition">Birthday party places/venues we offer are pretty and fabulous and diverse, right from rooftop restaurants to classy bars. The best places to celebrate birthday  come with spectacular interior décor and some of the best and versatile cuisines on offer. These places offer a great vibe and ambiance to celebrate your birthday with a little more zeal and enthusiasm.

Selecting the best restaurant; the one that has good food, lively ambiance, and vibrant décor, is something which you all love to do...</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/name.webp" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Munich Brauhaus Melbourne</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/cer.png" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Whats My Name??</h5>
                                                <p>
                                                A naming ceremony is a stage at which a person or persons is officially assigned a name. The methods of the practice differ over cultures and religions. The timing at which a name is assigned can vary from some days after birth to several months or many years.We join you EveryTime!!!
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Naming a child, popularly referred to as "Christening", is usually through the baptism ceremony in Christianity, especially Catholic culture,In Hinduism, the ceremony is traditionally known as Namkaran or Namakarana Sanskar, this ceremony is conducted in an elaborative form on the 12th day after birth. In Nepal, the naming ceremony is known as Nwaran. In the Hindu tradition, the Nwaran is celebrated on the 11th day .We Respect all Religions and we celebrate You.
                                                </p>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Name Your Baby!!</h1>
                            <p class="location">45 SouthEnd , Bangalore</p>
                            <p class="definition">The venue is our latest venture, bringing to life a traditional
                                Happenings, where you can name your baby in your.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
