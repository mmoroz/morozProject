<?php
    use yii\widgets\Breadcrumbs;
    use app\components\widgets\CaruselWidget;
    use app\modules\cart\widgets\BayButtonWidget;
    $this->title = $product[$id]['goods']['name'];
    $homeimg = [];
    $imggalery = [];
    foreach($images as $i){
        if($i['chief']=='Y'){
            $homeimg[] = $i;
        }else{
            $imggalery[] = $i;
        }
    }
?>
<?php echo Breadcrumbs::widget([
    'itemTemplate' => "<li><i>{link}</i></li>\n",
    'links' => $breadcrumbs,

]);?>

<div class="wrap-figura-block">
    <div class="left-figura"></div>
    <div class="center-figura"><h1><?=$product[$id]['goods']['name']?></h1></div>
    <div class="right-figura"></div>
</div>
<div class="line-figura"></div>
<div class="wrap-product">
    <div class="wrap-images">
        <div class="home-image-product">
            <?if(count($homeimg)>0):?>
                <a href="/<?=$homeimg[0]['imgname']?>" data-lightbox="image-group" data-title="<?=$homeimg[0]['desc']?>"><img src="/<?=$homeimg[0]['imgname']?>" alt=""/></a>
            <?else:?>
                <img src="/image/noimg.jpg" alt=""/>
            <?endif;?>
            <?if(count($imggalery)>0):?>
            <div class="images-galery">
                <?foreach($imggalery as $im):?>
                    <a href="/<?=$im['imgname']?>" data-lightbox="image-group" data-title="<?=$im['desc']?>"><img src="/<?=$im['imgname']?>" width="100" alt=""/></a>
                <?endforeach;?>
            </div>
            <?endif;?>
        </div>
    </div>
    <div class="wrap-product-desc">
        <div class="wrap-price-product">
            <table>
                <tr>
                    <td style="text-align: left; padding: 0 0 0 30px;"><h2 class="h2price">ЦЕНА: <span class="spanPrice"><?=$product[$id]['goods']['price']?><span class="glyphicon glyphicon-ruble"></span></span> </h2></td>
                    <td style="text-align: right; padding: 0 30px 0 0;">
                        <div style="position: relative;"><?=BayButtonWidget::widget(['name' => 'В корзину','count' => '10','goods_id'=>$id]);?></div>
                    </td>
                </tr>
            </table>

        </div>
        <?=$product[$id]['goods']['description']?>
        <?if(count($product[$id]['params'])>0):?>
            <div class="params-data">
                <?foreach($product[$id]['params'] as $k=>$par):?>
                    <h3><?=$k?></h3>
                    <ul>
                        <?foreach($par as $p):?>
                            <li><?=$p[0]?></li>
                        <?endforeach;?>
                    </ul>
                <? endforeach;?>
            </div>
        <?endif;?>
    </div>
</div>

<?= CaruselWidget::widget(); ?>