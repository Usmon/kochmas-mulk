<?php
 use yii\helpers\Html;
?>
<section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">
                                        <div class="property-gallery"> 
                                            <div class="light-slide-item">  
                                                <div class="favorite-and-print"> 
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                        <li data-thumb="img/demo/property1.jpg"> 
                                                            <img src="img/demo/property1.jpg" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="img/demo/property3.jpg"> 
                                                            <img src="img/demo/property3.jpg" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="img/demo/property2.jpg"> 
                                                            <img src="img/demo/property2.jpg" alt="kwitara" />
                                                        </li>  
                                                        <li data-thumb="img/demo/property1.jpg"> 
                                                            <img src="img/demo/property1.jpg" alt="kwitara" />
                                                        </li> 
                                                        <li data-thumb="img/demo/property3.jpg"> 
                                                            <img src="img/demo/property3.jpg" alt="kwitara" />
                                                        </li>
                                                        <li data-thumb="img/demo/property4.jpg"> 
                                                            <img src="img/demo/property4.jpg" alt="kwitara" />
                                                        </li>   
                                                        <li data-thumb="img/demo/property3.jpg"> 
                                                            <img src="img/demo/property3.jpg" alt="kwitara" />
                                                        </li>   
                                                        <li data-thumb="img/demo/property1.jpg"> 
                                                            <img src="img/demo/property1.jpg" alt="kwitara" />
                                                        </li>                                    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 

                                        <h1><?= $sell->cost;?></h1>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="property-detail">

                                                    <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">Apartment</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">Sold</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Location</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">New York</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount">$3,515</span> /month
                                                        </span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">762 sqft</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">3</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">3</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">880 ftsq</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">2002</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Stone</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Tile</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">5 slots</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $post->address;?></p>
                                            </div>
                                        </div>

                                        <div class="send-email-to-agent">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                    <h3>Send Message to Agent</h3> 
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" placeholder="Name" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-at"></i>
                                                                <input type="text" placeholder="Email Id" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-phone"></i>
                                                                <input type="text" placeholder="Phone Number" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-pencil"></i>
                                                                <textarea placeholder="Your Message"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="flat-btn">SEND MESSAGE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-4 column">
                                                             
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>SEARCH PROPERTIES</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <form action="properties.html"  method="get" class="form-inline">   
                                            <div class="search-form-content">
                                                <div class="search-form-field">  
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_location">
                                                                <option>All Locations</option>
                                                                <option>Tokyo</option>
                                                                <option>New Jersey</option>
                                                                <option>New York</option>
                                                                <option>Paris</option>
                                                                <option>Marrakech</option>
                                                                <option>lille</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_sub_location"> 
                                                                <option>All Sub-locations</option>
                                                                <option>Central New York</option>
                                                                <option>GreenVille</option>
                                                                <option>Long Island</option>
                                                                <option>New York City</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">  
                                                            <select class="form-control" name="s_cat">
                                                                <option>All Categories </option>
                                                                <option>Apartment</option>
                                                                <option>Load</option>
                                                                <option>Office Building</option>
                                                                <option>House</option>
                                                                <option>Villa</option>
                                                                <option>Retail</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="s_statu">
                                                                <option> All Status </option>
                                                                <option>Open house</option>
                                                                <option>Rent </option>
                                                                <option>Boy</option>
                                                                <option>used</option>  
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bed</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[0,450]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Area</span> 
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[50,450]" id="property-geo" >
                                                    </div>                                            
                                                </div> 
                                            </div>
                                            <div class="search-form-submit">
                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>