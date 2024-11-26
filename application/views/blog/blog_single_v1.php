        <!--============== Page title Start ==============-->
        <div class="full-row py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-secondary">Single Blog</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog-grid-v1.html">Blog</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Single Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page title End ==============-->

        <!--============== Blog Area Start ==============-->
        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 order-xl-2">
                        <div class="blog-sidebar widget-box-model">
                            <!-- Search Field -->
                            <div class="widget widget_search">
                                <form role="search" method="get" class="search_form" action="http://localhost/axeman-wp/">
                                    <label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search …" value="" name="s">
								</label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div>
                            <!-- Category Field -->
                            <div class="widget widget_categories">
                                <h5 class="widget-title mb-3">Categories</h5>
                                <ul>
                                    <li class="cat-item cat-item-3"><a href="#">Apartment</a> (23)</li>
                                    <li class="cat-item cat-item-2"><a href="#">Condo</a> (10)</li>
                                    <li class="cat-item cat-item-2"><a href="#">Family House</a> (09)</li>
                                    <li class="cat-item cat-item-2"><a href="#">Modern Villa</a> (35)</li>
                                    <li class="cat-item cat-item-2"><a href="#">Town House</a> (05)</li>
                                </ul>
                            </div>
                            <!-- Recent Post -->
                            <div class="widget widget_recent_entries">
                                <h5 class="widget-title mb-3">Recent Post</h5>
                                <ul>
                                    <li>
                                        <a href="#">Habitasse felis magna velit posuere ridiculus curabitur</a>
                                        <span class="post-date">Oct 05, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#">Elit auctor primis ac ullamcorper libero. Felis erat auctor</a>
                                        <span class="post-date">Sep 25, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#">Tempus interdum justo aliquet id vulputate fringilla</a>
                                        <span class="post-date">Sep 10, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#">Porttitor primis vel libero consectetuer eleifend feugiat</a>
                                        <span class="post-date">Aug 30, 2019</span>
                                    </li>
                                    <li>
                                        <a href="#">Conubia habitant vivamus nonummy per curabitur laoreet</a>
                                        <span class="post-date">July 18, 2019</span>
                                    </li>
                                </ul>
                            </div>

                            <!--============== Recent Property Widget Start ==============-->
                            <div class="widget widget_recent_property">
                                <h5 class="text-secondary mb-4">Recent Property</h5>
                                <ul>
                                    <li>
                                        <img src="<?php echo base_url('');?>assets/images/thumbnaillist/01.jpg" alt="">
                                        <div class="thumb-body">
                                            <h6 class="listing-title"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                            <span class="listing-price">$3200<small>( Monthly )</small></span>
                                            <ul class="d-flex quantity font-fifteen">
                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6500 Sqft</li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url('');?>assets/images/thumbnaillist/02.jpg" alt="">
                                        <div class="thumb-body">
                                            <h6 class="listing-title"><a href="property-single-1.html">Condo House</a></h6>
                                            <span class="listing-price">$11500<small>( Monthly )</small></span>
                                            <ul class="d-flex quantity font-fifteen">
                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2200 Sqft</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url('');?>assets/images/thumbnaillist/03.jpg" alt="">
                                        <div class="thumb-body">
                                            <h6 class="listing-title"><a href="property-single-1.html">Luxury Condos</a></h6>
                                            <span class="listing-price">$17000<small>( Monthly )</small></span>
                                            <ul class="d-flex quantity font-fifteen">
                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3500 Sqft</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url('');?>assets/images/thumbnaillist/04.jpg" alt="">
                                        <div class="thumb-body">
                                            <h6 class="listing-title"><a href="property-single-1.html">Small Appartment</a></h6>
                                            <span class="listing-price">$5200<small>( Monthly )</small></span>
                                            <ul class="d-flex quantity font-fifteen">
                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tags -->
                            <div class="widget widget_tag_cloud">
                                <h5 class="widget-title mb-3">Tags</h5>
                                <div class="tagcloud">
                                    <ul>
                                        <li><a href="#">general</a></li>
                                        <li><a href="#">videos</a></li>
                                        <li><a href="#">media</a></li>
                                        <li><a href="#">web</a></li>
                                        <li><a href="#">parallax</a></li>
                                        <li><a href="#">ecommerce</a></li>
                                        <li><a href="#">t-shirt</a></li>
                                        <li><a href="#">women</a></li>
                                        <li><a href="#">trade</a></li>
                                        <li><a href="#">animation</a></li>
                                        <li><a href="#">theme</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 order-xl-1 sm-mb-30">
                        <div class="single-post border summary bg-white p-30 mb-30">
                            <div class="single-post-title">
                                <span class="d-inline-block text-primary">Apartment</span>
                                <h4 class="mb-3 text-secondary">Neque volutpat facilisis sollicitudin mus tempus.</h4>
                                <div class="post-meta list-color-general mb-4">
                                    <a href="#"><i class="flaticon-user-silhouette flat-mini"></i> <span>By Admin</span></a>
                                    <a href="#"><i class="flaticon-calendar flat-mini"></i> <span>Sep 1, 2019</span></a>
                                    <a href="#"><i class="flaticon-comments flat-mini"></i> <span>02</span></a>
                                    <a href="#"><i class="flaticon-like flat-mini"></i> <span>30</span></a>
                                    <a href="#"><i class="flaticon-eye-1 flat-mini"></i> <span>731</span></a>
                                    <span><i class="flaticon-document flat-mini"></i> <a href="#"><span>General</span></a>,<a href="#"><span>Media</span></a></span>
                                </div>
                            </div>
                            <div class="post-image">
                                <img src="<?php echo base_url('');?>assets/images/property_grid/property-grid-8.png" alt="Image not found!">
                            </div>
                            <div class="post-content pt-4 mb-5">
                                <p>Nullam. Facilisis tempor rhoncus at. Tincidunt tempus lacus donec pulvinar fusce metus class cras litora condimentum inceptos senectus curae; mollis amet consectetuer urna mi tempus nisi sociis velit dis, suscipit lectus senectus cursus tincidunt sit primis eros semper luctus.</p>

                                <p>Aenean augue, sociosqu netus varius sollicitudin. Pharetra senectus sem ornare. Fermentum mus hymenaeos. Mi molestie. <a href="#">Ultrices arcu tellus</a> mattis, et vitae posuere pede fames per. Elit. Mollis. Ridiculus tristique. Facilisis feugiat consequat, est per. Interdum potenti. Vitae accumsan diam neque risus mollis parturient massa porta scetur primis magnis tincidunt tempus sed semper integer semper penatibus ultricies nisi natoque fames.</p>

                                <blockquote>Penatibus suspendisse urna suspendisse class nascetur eros nisl blandit dignissim etiam rhoncus condimentum mollis. Montes urna, tincidunt quis. Amet faucibus torquent eros, fusce nullam accumsan sem odio facilisis curae; per pretium, inceptos vivamus mollis accumsan. Laoreet tincidunt est praesent lorem cursus pellentesque.</blockquote>

                                <p>Scelerisque. Cubilia ultrices sociis interdum augue. Sollicitudin accumsan enim vel quisque semper at Aliquam potenti velit rutrum mus erat amet dapibus sit facilisi aliquam lorem ad vestibulum litora, parturient non sagittis tellus litora. Viverra Tristique proin commodo et quisque. Torquent convallis imperdiet vulputate cubilia a consectetuer tellus laoreet nascetur euismod potenti inceptos enim mauris curabitur consequat.</p>

    <pre>.post-meta a span { 
    color: #a5a5a5; 
    font-size: 13px; 
    font-style: italic 
}</pre>

                                <p>Nisi amet Nisl urna facilisis ad curae;. Amet habitasse adipiscing nibh mollis felis leo semper. Semper lobortis interdum class rutrum nonummy. Hymenaeos, purus eu. Semper dictum mattis, magnis platea facilisis dapibus
                                    arcu suscipit litora porttitor odio luctus inceptos lectus curabitur erat platea faucibus.</p>
                            </div>
                            <div class="tagcloud">
                                <h6 class="mb-3">Tags:</h6>
                                <ul>
                                    <li><a href="#">general</a></li>
                                    <li><a href="#">videos</a></li>
                                    <li><a href="#">media</a></li>
                                    <li><a href="#">web</a></li>
                                    <li><a href="#">parallax</a></li>
                                    <li><a href="#">ecommerce</a></li>
                                    <li><a href="#">t-shirt</a></li>
                                    <li><a href="#">women</a></li>
                                    <li><a href="#">trade</a></li>
                                    <li><a href="#">animation</a></li>
                                    <li><a href="#">theme</a></li>
                                </ul>
                            </div>
                            <div class="share-post border-0 px-0 d-flex mt-5">
                                <span class="py-10"><b>Share:</b></span>
                                <div class="media-widget-round-white-primary-shadow">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Autore Info -->
                        <div class="authore-meta bg-white mb-30">
                            <div class="modal-content border">
                                <div class="modal-header bg-gray py-2">
                                    <span class="modal-title">Posted By: <a href="#">John Doe</a></span>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="author-image"><img class="rounded-circle" src="assets/images/user1.jpg" alt="image not found!"></div>
                                    <p>Mus sed luctus sagittis. Elementum porttitor nullam dis montes. Eu adipiscing purus hendrerit eros habitasse facilisi non mus pellentesque natoque tincidunt congue suscipit porttitor ullamcorper cras a viverra ipsum
                                        nascetur hymenaeos.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Post Comments -->
                        <div class="property-overview border bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div id="comments" class="comments">
                                        <div class="row mb-4">
                                            <div class="col">
                                                <h3>(02) Comments</h3>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img src="<?php echo base_url('');?>assets/images/user2.jpg" class="me-3 rounded-circle" alt="...">
                                            <div class="media-body">
                                                <h5 class="mb-0">Lee Sipes</h5>
                                                <div class="comments-date mb-2"><span>Posted On 21th May, 2019 - </span><a href="#">Replay</a></div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.</p>
                                                <div class="media mt-4">
                                                    <img src="<?php echo base_url('');?>assets/images/user4.jpg" class="me-3 rounded-circle" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mb-0">Lee Sipes</h5>
                                                        <div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media mt-4">
                                            <img src="<?php echo base_url('');?>assets/images/user3.jpg" class="me-3 rounded-circle" alt="...">
                                            <div class="media-body">
                                                <h5 class="mb-0">Lee Sipes</h5>
                                                <div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media mt-4">
                                            <img src="<?php echo base_url('');?>assets/images/user3.jpg" class="me-3 rounded-circle" alt="...">
                                            <div class="media-body">
                                                <h5 class="mb-0">Lee Sipes</h5>
                                                <div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Form -->
                        <div class="property-overview border bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-4">Write A Comments</h5>
                                    <form class="contact_message form-boder" action="#" method="post" novalidate="novalidate">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="email" name="email" placeholder="Email Address" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <button class="btn btn-primary" id="send" value="send" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Blog Area End ==============-->
