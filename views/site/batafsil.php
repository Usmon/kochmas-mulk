
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
                                    <div class="blog-post">
                                        <div class="post-thumb">
                                           <!--  <img src="img/post1.jpg" alt="" /> -->
                                              <?= Html::img('@web/img/post1.jpg') ?>
                                            <div class="post-detail">
                                              
                                                <span><i class="fa fa-calendar-o"></i> 
                                                    <?= $product->create_date;?>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <h1><?= $product->title;?></h1>
                                        <p><?= $product->content;?></p>
                                       
                            </div><!-- Comment -->
                    </div>
                </div>
            </div>
        </section>
