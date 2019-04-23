<?php
    use yii\helpers\Html;
?>
 <section class="block">
            <div class="container agnet-prop">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">

                                        <div class="properties-sec">
                                            <div class="properties-list">

                                                <div class="properties-content">                                            
                                                    <div class="row">
                                                          <?php foreach($sell as $sell): ?>
                                                        <div class="col-md-6 col-sm-6  col-xs-12">
                                                            <div class="properties-box">
                                                                <div class="properties-thumb">
                                                                   <!--  <img src="img/demo/property1.jpg" alt=""> -->
                                                                    <?= Html::img('@web/img/demo/property1.jpg') ?>
                                                                     <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                                     
                                                                    <ul class="property-info">
                                                                        <li> 
                                                                            <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                                        </li>
                                                                        <li class="li-rl"></li>
                                                                        <li> 
                                                                            <i class="fa  fa-bed"></i><span>5</span>                                 
                                                                        </li> 
                                                                        <li class="li-rl"></li>
                                                                        <li> 
                                                                            <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                                        </li>
                                                                    </ul>     
                                                                    <div class="user-preview">
                                                                        <a class="col" href="agent.html">
                                                                            
                                                                             <?= Html::img('@web/img/4.png') ?>
                                                                        </a> 
                                                                    </div>
                                                                    
                                                                </div>
                                                                <h3><a href="batafsilsell.php" title=""><?=$sell->title?></a></h3>
                                                                <span class="price"><?=$sell->cost?></span>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                        
                                                    </div>
                                                    <ul class="pagination">
                                                        <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                        <li><a href="#" title="">1</a></li>
                                                        <li class="active"><a href="#" title="">2</a></li>
                                                        <li><a href="#" title="">3</a></li>
                                                        <li><a href="#" title=""><span>PREV</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <aside class="col-md-4 column">

                                <div class="agent_bg_widget widget"> 
                                    <div class="agent_widget">
                                        <div class="agent_pic">
                                            <a href="agent.html" title="">
                                               <!--  <img src="img/demo/man1.jpg" alt="" /> -->
                                                <?= Html::img('@web/img/demo/man1.jpg') ?>
                                                <h5>Smith forbes</h5> 
                                            </a>
                                        </div>   
                                        <div class="agent_social">
                                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                                        </div>

                                        <span>
                                            <i class="fa fa-phone"> </i> +1 9090909090 
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> agent@company.com
                                        </span>


                                        <a href="agent.html"  title="" class="btn contact-agent">Find more</a>                                        
                                    </div>
                                </div>                        

                            </aside>
                        </div> 

                    </div>
                </div>
            </div>
        </section>