<?php

    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>
  <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-sec">
                            <div class="row">
                                <?php foreach($dataProvider->models as $post): ?>
                                <div class="col-md-6">
                                    <div class="blog-post">
                                        <div class="post-thumb">
                                            <?=$post->img?>
                                            <?= Html::img('@web/img/post1.jpg') ?>
                                            <div class="post-detail">
                                                
                                                <!-- batafsil -->

                                                <a href="<?= \yii\helpers\Url::to(['batafsil', 'id' => $post ->id]) ?>" title="" class="post-cat">Batafsil...</a>
                                                
                                                <h2><a href="#" title=""><?=$post->title?></a></h2>
                                                <span><i class="fa fa-calendar-o"></i> 
                                                  <?php 
                                                      echo Yii::$app->formatter->asDate($post->create_date, 'long'); 
                                                  ?>  
                                                </span>
                                                <p><?=$post->desc?></p>
                                            </div>
                                        </div>
                                        <div class="post-admin">
                                            <a href="#" title="">
                                                <?= Html::img('@web/img/2.png') ?>
                                                <h5>Smith</h5>
                                                <span>Posted by <i>agent</i></span>
                                            </a>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div>
                                <?php endforeach; ?>
                                    </div><!-- Blog Post -->
                                </div>
                            </div>
                            <?php 
                                echo LinkPager::widget([
                                    'pagination' => $dataProvider->pagination
                                ]) 
                            ?>
                            <!-- <ul class="pagination">
                                <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                <li><a href="#" title="">1</a></li>
                                <li class="active"><a href="#" title="">2</a></li>
                                <li><a href="#" title="">3</a></li>
                                <li><a href="#" title=""><span>PREV</span></a></li>
                            </ul> -->
                        </div>
                    </div>
              </section>