<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\MaskedInputAsset;
use frontend\helpers\DocHelper;

use yii\bootstrap4\Html;
use yii\bootstrap4\Dropdown;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

MaskedInputAsset::register($this);

$this->title = 'Himmel — дизайнерские потолочные, стеновые и фасадные конструкции в Москве, Санкт-Петербурге и по всей России. Производство дизайнерских потолочных, стеновых и фасадных конструкций.';
?>
<style>
	.mobile-anchor {
		display: none;
	}
	@media screen and (max-width: 575px) {
		.mobile-anchor {
			display: inline;
		}
	}
	
	#popup-reika-2 .overhead__img-reika {
		background-image: none; /* url(/i/reyka-himmel-aero.png); */
	}
	
	.s7 .content__sm-reika:after {
		background-image: none; /* url(/i/reyka-himmel-aero.png); */
	}

	/*
	input[name="ContactForm[name]"] {
		display: block;
		width: 2px;
		height: 3px;
		margin-bottom: -3px;
		opacity: 0.01;
	}*/

</style>
<script src="https://api-maps.yandex.ru/2.1/?apikey=9194f42e-abc0-4aa2-a1f0-5b75b69367c5&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.05189935, 82.95856305],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 15
        });
		var myPlacemark = new ymaps.Placemark([55.05189935, 82.95856305],{},{
			iconLayout: 'default#image',
			iconImageHref: '/i/placemark.png',
			iconImageSize: [135, 135],
			iconImageOffset: [-67, -130]
		});
		myMap.geoObjects.add(myPlacemark);
    }
	
</script>
<div id="fullpage" class="fullpage-wrapper content-layer">
    <section class="section section__bg s1 section__index inv" data-anchor="index">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content">
                <div class="row justify-content-center no-gutters">
                    <div class="col-10 col-sm-10 col-lg-9 col-xxl-7">
                        <h2 class="mb-sm-4 text-center text-sm-left"><?= Yii::t('hm', '<span class="text-wood">Современные</span> потолочные, стеновые и фасадные конструкции'); ?></h2>
                        <div class="row justify-content-start no-gutters d-none d-sm-flex">
                            <a href="#reika" data-href="reika" class="col-3 mr-2 mr-xl-3 border border-white index__nav _fullpage_nav" title="<?= Yii::t('hm', 'Реечные потолки'); ?>"><strong><?= Yii::t('hm', 'Реечные<br>потолки'); ?></strong><div class="index__navicon index__navicon-right"><svg><use xlink:href="#ico__reika"></use></svg></div><div class="index__navicon index__navicon-bottom"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a>
                            <a href="#modules" data-href="modules" class="col-3 mr-2 mr-xl-3 border border-white index__nav _fullpage_nav" title="<?= Yii::t('hm', '3D модули'); ?>"><strong><?= Yii::t('hm', '3D<br>модули'); ?></strong><div class="index__navicon index__navicon-right"><object type="image/svg+xml" data="/i/module.svg" class="w-100 h-100"></object></div><div class="index__navicon index__navicon-bottom"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a>
                            <a href="#panels" data-href="panels" class="col-3 mr-2 mr-xl-3 border border-white index__nav _fullpage_nav" title="<?= Yii::t('hm', 'Панельная система'); ?>"><strong><?= Yii::t('hm', 'Панельная<br>система'); ?></strong><div class="index__navicon index__navicon-right"><svg><use xlink:href="#ico__panel"></use></svg></div><div class="index__navicon index__navicon-bottom"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a>
							
							<!--<a href="<?= Url::to(['page/download']); ?>" class="col-2 index__nav index__nav-down _section__btn-page" data-ajax_method="GET" data-backdrop title="<?= Yii::t('hm', 'Скачать каталог'); ?>"><strong><?= Yii::t('hm', 'Скачать<br>каталог'); ?></strong><div class="index__navicon index__navicon-bottom"><svg><use xlink:href="#ico__skrepka"></use></svg></div></a>-->
							
							<a href="#" onclick="showModalDownload();" class="index__nav index__nav-down" title="Скачать каталог" ><strong>Скачать<br>каталог</strong><div class="index__navicon index__navicon-bottom"><svg><use xlink:href="#ico__skrepka"></use></svg></div></a>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section s2 section-promo" data-anchor="promo-video">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content">
                <div class="promo__wrapper">
                    <div class="promo__video">
                        <video poster="/v/himmel_promo-poster.jpg" preload="metadata" preload><source type="video/mp4" src="/v/himmel_promo.mp4"></video>
                        <div class="video__poster"></div>
                        <div class="video__play"></div>
                    </div>
                    <div class="promo__header">
                        <div class="promo__title text-wood"><?= Yii::t('hm', 'Промо-видео'); ?></div>
                        <h3 class="mt-md-1"><?= Yii::t('hm', 'Частицы гармонии'); ?></h3>
                    </div>
                    <div class="promo__overhead text-white bg-wood"><div class="d-none d-md-block"><?= Yii::t('hm', '<strong>Модульные системы</strong> — это прекрасный способ привнести красоту и гармонию в пространство.'); ?></div><div class="d-block d-md-none"><span class="promo__icon"><svg><use xlink:href="#ico__skrepka"></use></svg></span><a href="<?= Url::to(['page/download']); ?>" class="text-white _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Скачать каталог'); ?>"><strong><?= Yii::t('hm', 'Скачать каталог'); ?></strong></a></div></div>
                </div>
            </div>
        </div>
    </section>
	
	<!--a class="mobile-anchor" name="reika"></a-->
    <section class="section s3 section__reika inv" data-anchor="reika">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content flex-fill d-flex">
                <div class="sec__bg">
                    <div class="swiper-container swiper-container-bg _sec__bg" id="reika__bg">
                        <div class="swiper-wrapper">
                            <?php foreach($bgreika as $bgr):  ?>
                            <div class="swiper-slide swiper-lazy" data-background="<?= $bgr ?>"></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-prev"><a href="#" class="swiper__button swiper__button-prev" title="Вперед"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-next"><a href="#" class="swiper__button swiper__button-next" title="Назад"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                    </div>
                    <ul class="content__pagination sec__pagination" id="reika__pagination"></ul>
                </div>
                <div class="align-self-stretch flex-fill position-relative content__inner">
                    <div class="content__sm content__sm-reika d-md-none">
                        <h4 class="text-uppercase mb-2"><?= Yii::t('hm', 'Реечные конструкции'); ?></h4>
                        <p><?= Yii::t('hm', 'Металлические ламели Химмель применяются для потолочных и стеновых конструкций.'); ?></p>
                        <a href="#popup-reika" class="content__toggler content__toggler-open text-body _section__btn-toggle" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                    </div>
                    <div id="popup-reika" class="content__overhead content__overhead-reika d-md-block">
                        <div class="overhead__img overhead__img-reika"></div>
                        <a href="#popup-reika" class="content__toggler content__toggler-close text-body _section__btn-toggle d-md-none" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        <h2 class="content__title d-none d-md-block mb-2">Himmel</h2>
                        <h2 class="mb-4 mb-lg-6"><?= Yii::t('hm', 'Реечные конструкции'); ?></h2>
                        <ul class="content__ul content__ul-styled mb-4 mb-lg-5">
                            <li><?= Yii::t('hm', 'Металлические ламели Химмель применяются для потолочных и стеновых конструкций.'); ?></li>
                            <li><?= Yii::t('hm', 'Производится в цветах по шкале RAL, хром, золото и в текстурах ценных пород дерева.'); ?></li>
                            <li><?= Yii::t('hm', 'Доступен монтаж "волной" в разных плоскостях и с разным шагом.'); ?></li>
                            <li><?= Yii::t('hm', 'Гарантия от провисания рейки на весь срок эксплуатации.'); ?></li>
                            <li><?= Yii::t('hm', 'Держит дополнительные нагрузки (видеокамеры, светильники).'); ?></li>
                            <li><?= Yii::t('hm', 'Возможность производства рейки <strong>в нестандартных размерах по вашему дизайн-проекту</strong>.'); ?></li>
                        </ul>
                       
					   <a href="<?= Url::to(['page/reika']); ?>" class="btn__base btn__base-wood _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Смотреть типы ламелей'); ?>"><?= Yii::t('hm', 'Смотреть типы ламелей'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></a>
						
						<!--<a href="<?= Url::to(['page/feedback', '_h' => 1]); ?>" class="content__callme text-body _section__btn-page d-md-inline-block" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><?= Yii::t('hm', 'Заказать звонок'); ?></a>-->
						
						<a href="#" onclick="showModal();" class="content__callme text-body d-md-inline-block" tabindex="-1" title="Заказать звонок">Заказать звонок!</a>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!--a class="mobile-anchor" name="colors"></a-->
    <section class="section s4 section-colors" data-anchor="colors">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content d-flex flex-wrap justify-content-center">
                <div class="section__left section__left-colors d-flex flex-column">
                    <div class="d-xl-none mb-4">
                        <div class="content__title mb-2"><?= Yii::t('hm', 'Окрашивание'); ?></div>
                        <h2 class="mb-3"><?= Yii::t('hm', '<span class="text-wood">Цветовые</span> решения'); ?></h2>
                    </div>
                    <div class="position-relative d-lg-flex d-xxl-block">
                        <div class="colors__tabs mb-4 mb-lg-0">
                            <ul class="list-group content__ul content__ul-nav content__ul-colors text-right text-uppercase text-nowrap d-flex justify-content-between flex-lg-column justify-content-lg-start" role="tablist">
                                <li><a href="#colors1" class="active show" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Текстура дерева'); ?>"><?= Yii::t('hm', '<span class="d-none d-lg-inline">Текстура </span>дерева'); ?></a></li>
                                <li><a href="#colors2" class="" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Окрашивание RAL'); ?>"><?= Yii::t('hm', '<span class="d-none d-lg-inline">Окрашивание </span>RAL'); ?></a></li>
                                <li><a href="#colors3" class="" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Текстурное окрашивание'); ?>"><span class="d-none d-lg-inline"><?= Yii::t('hm', 'Текстурное окрашивание'); ?></span><span class="d-lg-none">Decoral</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content colors__bg position-relative">
                            <?php $i = 0; foreach($colors as $type => $colorss): ?>
                                <div class="tab-pane fade<?= !$i?' active show': null; ?>" id="colors<?= $type ?>" role="tabpanel">
                                    <div class="colors__wrapper position-relative">
                                        <div class="colors__area d-flex flex-wrap justify-content-start align-items-start align-content-start">
                                            <?php foreach($colorss as $j=>$color): ?>
                                                <div class="colors__thumb"><img src="<?= $color->imageUrl; ?>" alt="<?= Yii::t('hm/color', $color->name); ?>"></div>
                                                <?php if ($j > 8) break; // show only 10 thumbs ?>
                                        <?php endforeach; ?>
                                        </div>
                                        <a href="<?= Url::to(['page/color', 'a' => $type]); ?>" class="content__showall text-body _section__btn-page" data-ajax_method="GET" data-bgwhite tabindex="-1" title="<?= Yii::t('hm', 'Показать все'); ?>"><?= Yii::t('hm', 'Показать все'); ?></a>
                                    </div>
                                </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>
                    <a href="<?= Url::to(['page/feedback']); ?>" class="btn__base btn__base-wood _section__btn-page d-lg-none align-self-center align-self-sm-start text-white mt-5" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><?= Yii::t('hm', 'Заказать звонок'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></a>
                </div>
                <div class="section__right section__right-colors d-none d-xl-block">
                    <div class="content__title mb-2"><?= Yii::t('hm', 'Окрашивание'); ?></div>
                    <h2 class="mb-3"><?= Yii::t('hm', '<span class="text-wood">Цветовые</span> решения'); ?></h2>
                    <p><?= Yii::t('hm', 'В наличии всегда 8 цветов, имитирующих ценные <strong>породы дерева</strong> и 21 наиболее популярный цвет из набора <strong>RAL</strong>.'); ?>
                    <br><?= Yii::t('hm', 'Под заказ доступна вся шкала RAL, а также текстурное окрашивание по технологии <strong>Decoral System</strong>.'); ?></p>
                    <p class="text-note text-wood"><span class="sup"><strong>*</strong></span><?= Yii::t('hm', 'Итальянская технология Decoral System допускает нанесение нестандартных рисунков — текстуры патины, состаренной меди и т.д.'); ?></p>
                </div>
            </div>
        </div>
    </section>
	
	<!--a class="mobile-anchor" name="modules"></a-->
    <section class="section section__bg s5 section__3dsys inv" data-anchor="modules">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content flex-fill d-flex">
                <div class="sec__bg">
                    <div class="swiper-container swiper-container-bg _sec__bg" id="modules__bg">
                        <div class="swiper-wrapper">
                            <?php foreach($bgmodule as $bgm):  ?>
                            <div class="swiper-slide swiper-lazy" data-background="<?= $bgm ?>"></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-prev"><a href="#" class="swiper__button swiper__button-prev" title="Вперед"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-next"><a href="#" class="swiper__button swiper__button-next" title="Назад"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                    </div>
                    <ul class="content__pagination sec__pagination" id="modules__pagination"></ul>
                </div>
                <div class="align-self-stretch flex-fill position-relative content__inner">
                    <div class="d-md-none align-self-end">
                        <div class="content__sm content__sm-3dsys">
                            <h4 class="text-uppercase mb-2"><?= Yii::t('hm', 'Модульная 3D система'); ?></h4>
                            <p><?= Yii::t('hm', 'Металлические 3D модули для потолочных и стеновых конструкций.'); ?></p>
                            <a href="#popup-3dsys" class="content__toggler content__toggler-open text-body _section__btn-toggle" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        </div>
                    </div>
                    <div id="popup-3dsys" class="content__overhead content__overhead-3dsys d-md-block">
                        <div class="overhead__img overhead__img-3dsys"></div>
                        <a href="#popup-3dsys" class="content__toggler content__toggler-close text-body _section__btn-toggle d-md-none" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        <h2 class="content__title d-none d-md-block mb-1">Himmel</h2>
                        <h2 class="mb-4 mb-lg-6"><?= Yii::t('hm', 'Модульная 3D система'); ?></h2>
                        <ul class="content__ul content__ul-styled mb-4 mb-lg-5">
                            <li><?= Yii::t('hm', 'Металлические 3D модули для потолочных и стеновых конструкций.'); ?></li>
                            <li><?= Yii::t('hm', 'Модули производятся в цветах по шкале RAL, хром, золото и в текстурах ценных пород дерева.'); ?></li>
                            <li><?= Yii::t('hm', 'Размер модулей, изгиб волны и форма могут быть как стандартными, так и по согласованию с заказчиком.'); ?></li>
                            <li><?= Yii::t('hm', 'Возможность перфорации с нанесением <strong>индивидуального рисунка</strong>.'); ?></li>
                        </ul>
                        <a href="<?= Url::to(['page/sys3d']); ?>" class="btn__base btn__base-wood _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Смотреть типы модулей'); ?>"><?= Yii::t('hm', 'Смотреть типы модулей'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></a>
                       
					   <!--
					   <a href="<?= Url::to(['page/feedback', '_h' => 1]); ?>" class="content__callme text-body _section__btn-page d-md-inline-block" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><?= Yii::t('hm', 'Заказать звонок'); ?></a>-->
					   
					   <a href="#" onclick="showModal();" class="content__callme text-body d-md-inline-block" tabindex="-1" title="Заказать звонок">Заказать звонок</a>
					   
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!--a class="mobile-anchor" name="panels"></a-->
    <section class="section section__bg s6 section__panel" data-anchor="panels">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content flex-fill d-flex">
                <div class="sec__bg">
                    <div class="swiper-container swiper-container-bg _sec__bg" id="panels__bg">
                        <div class="swiper-wrapper">
                            <?php foreach($bgpanel as $bgp):  ?>
                            <div class="swiper-slide swiper-lazy" data-background="<?= $bgp ?>"></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-prev"><a href="#" class="swiper__button swiper__button-prev" title="Вперед"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-next"><a href="#" class="swiper__button swiper__button-next" title="Назад"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                    </div>
                    <ul class="content__pagination sec__pagination" id="panels__pagination"></ul>
                </div>
                <div class="align-self-stretch flex-fill position-relative content__inner">
                    <div class="d-md-none align-self-end">
                        <div class="content__sm content__sm-panel">
                            <h4 class="text-uppercase mb-1"><?= Yii::t('hm', 'Панельная система'); ?></h4>
                            <p class="text-uppercase font-weight-bold mb-2"><?= Yii::t('hm', 'hook-on/коридорная/стеновая'); ?></p>
                            <p><?= Yii::t('hm', 'Металлические панели применяются для потолочных и стеновых конструкций в офисах, медицинских и образовательных учреждениях, спортивных заведениях.'); ?></p>
                            <a href="#popup-panel" class="content__toggler content__toggler-open text-body _section__btn-toggle" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        </div>
                    </div>
                    <div id="popup-panel" class="content__overhead content__overhead-panel d-md-block">
                        <div class="overhead__img overhead__img-panel"></div>
                        <a href="#popup-panel" class="content__toggler content__toggler-close text-body _section__btn-toggle d-md-none" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        <h2 class="content__title d-none d-md-block mb-1">Himmel</h2>
                        <h2 class="mb-1"><?= Yii::t('hm', 'Панельная система'); ?></h2>
                        <h6 class="text-uppercase mb-4 mb-lg-6"><?= Yii::t('hm', 'hook-on/коридорная/стеновая'); ?></h6>
                        <ul class="content__ul content__ul-styled mb-4 mb-lg-5">
                            <li><?= Yii::t('hm', 'Металлические панели применяются для потолочных и стеновых конструкций в офисах, медицинских и образовательных учреждениях, спортивных заведениях.'); ?></li>
                            <li><?= Yii::t('hm', 'Производятся в цветах RAL, хром, золото и в текстурах ценных пород дерева.'); ?></li>
                            <li><?= Yii::t('hm', 'Просты в монтаже, легко моются, вандалоустойчивы.'); ?></li>
                            <li><?= Yii::t('hm', 'Размер панели может меняться исходя из вашего дизайн-проекта.'); ?></li>
                            <li><?= Yii::t('hm', 'Возможность нанесения художественной перфорации для создания рисунка на общей конструкции.'); ?></li>
                        </ul>
                        <a href="<?= Url::to(['page/panel']); ?>" class="btn__base btn__base-wood _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Смотреть типы панелей'); ?>"><?= Yii::t('hm', 'Смотреть типы панелей'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></a>
                       
						<!--
						<a href="<?= Url::to(['page/feedback', '_h' => 1]); ?>" class="content__callme text-body _section__btn-page d-md-inline-block" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><?= Yii::t('hm', 'Заказать звонок'); ?></a>-->
						
						<a href="#" onclick="showModal();" class="content__callme text-body d-md-inline-block" tabindex="-1" title="Заказать звонок">Заказать звонок</a>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Himmel Aero -->
	<section class="section section__bg s7 section__reika inv" data-anchor="himmel-aero">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content flex-fill d-flex">
                <div class="sec__bg">
                    <div class="swiper-container swiper-container-bg _sec__bg" id="modules__bg">
                        <div class="swiper-wrapper">
                            <?php foreach($bgmodule as $bgm):  ?>
                            <div class="swiper-slide swiper-lazy" style="background-image: url(/i/_page/himmel-bg-3.jpg);"></div>
                            <?php endforeach; ?>
                        </div>
                        <!--
						<div class="swiper__btnwrapper swiper__btnwrapper-prev"><a href="#" class="swiper__button swiper__button-prev" title="Вперед"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
                        <div class="swiper__btnwrapper swiper__btnwrapper-next"><a href="#" class="swiper__button swiper__button-next" title="Назад"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a></div>
						-->
                    </div>
                    <ul class="content__pagination sec__pagination" id="modules__pagination"></ul>
                </div>
                <div class="align-self-stretch flex-fill position-relative content__inner">
                    
					<div class="d-md-none align-self-end">
                        <div class="content__sm content__sm-reika">
                            <h4 class="text-uppercase mb-2"><?= Yii::t('hm', 'Himmel Aero'); ?></h4>
                            <p><?= Yii::t('hm', 'Реечные потолки'); ?></p>
                            
							<a href="#popup-reika-2" class="content__toggler content__toggler-open text-body _section__btn-toggle" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        </div>
                    </div>
                    
					<div id="popup-reika-2"  class="content__overhead content__overhead-reika d-md-block">
                        <div class="overhead__img overhead__img-reika"></div>
                        <a href="#popup-reika-2" class="content__toggler content__toggler-close text-body _section__btn-toggle d-md-none" tabindex="-1" title="<?= Yii::t('hm', 'Смотреть характеристики'); ?>"><?= Yii::t('hm', 'Смотреть характеристики'); ?></a>
                        <h2 class="content__title d-none d-md-block mb-1">Himmel Aero</h2>
                        <h2 class="mb-4 mb-lg-6"><?= Yii::t('hm', 'Реечные потолки'); ?></h2>
                        <ul class="content__ul content__ul-styled mb-4 mb-lg-5">
							<li><?= Yii::t('hm', 'Реечный потолок HIMMEL Aero  прекрасно подойдёт для офисов , аэропортов, спортивных комплексов и торговых центров.'); ?></li>
                            <li><?= Yii::t('hm', 'Имеет одну из самых привлекательных цен среди потолочных конструкций для общественных пространств.'); ?></li>
                            <li><?= Yii::t('hm', 'Экономит бюджет при реализации больших проектов.'); ?></li>
							<li><?= Yii::t('hm', 'Прост в монтаже, легко моется.'); ?></li>
							<li><?= Yii::t('hm', 'Доступен монтаж "волной" в разных плоскостях и с разным шагом.'); ?></li>
							<li><?= Yii::t('hm', 'Возможно устанавливать и снимать бесконечное количество раз без ущерба для конструкции.'); ?></li>
							<li><?= Yii::t('hm', 'Производится в цветах RAL, хром, золото и в текстурах ценных пород дерева.'); ?></li>
							<li><?= Yii::t('hm', 'Потолок Himmel Aero может использоваться с установкой сплинклерных оросителей за потолком.'); ?></li>
                        </ul>
					   <a href="https://himmelaero.ru" target="blank" class="btn__base btn__base-wood" title="<?= Yii::t('hm', 'Подробнее о реечных потолках Himmel Aero'); ?>"><?= Yii::t('hm', 'Подробнее о Himmel Aero'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></a>
						
						<!--
						<a href="<?= Url::to(['page/feedback', '_h' => 1]); ?>" class="content__callme text-body _section__btn-page d-md-inline-block" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><?= Yii::t('hm', 'Заказать звонок'); ?></a>-->
						
						<a href="#" onclick="showModal();" class="content__callme text-body d-md-inline-block" tabindex="-1" title="Заказать звонок">Заказать звонок</a>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- /Himmel Aero -->

    <section class="section s8 section-videos" data-anchor="video-archive">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content d-flex flex-wrap justify-content-center">
                <div class="section__left section__left-videos">
                    <div class="content__title d-none d-xl-block mb-2"><?= Yii::t('hm', 'Видеоархив'); ?></div>
                    <h2 class="mb-6"><?= Yii::t('hm', '<span class="text-wood">Наглядно</span> о продукции'); ?></h2>
                    <div class="position-relative d-md-flex d-lg-block">
                        <div class="videos__tabs">
                            <ul class="list-group content__ul content__ul-nav content__ul-videos text-right text-uppercase text-nowrap d-flex justify-content-between flex-md-column justify-content-md-start" role="tablist">
                                <li><a href="#tabv0" class="active show" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Все видео'); ?>"><?= Yii::t('hm', 'Все видео'); ?></a></li>
                                <li><a href="#tabv1" class="" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Рейка'); ?>"><?= Yii::t('hm', 'Рейка'); ?></a></li>
                                <li><a href="#tabv2" class="" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Модули'); ?>"><?= Yii::t('hm', 'Модули'); ?></a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <?php $i = 0; foreach($videos as $type => $videoss): ?>
                                <div class="tab-pane fade<?= !$i?' active show': null; ?>" id="tabv<?= $type ?>" role="tabpanel">
                                    <div class="videos__wrapper position-relative d-flex justify-content-center">
                                        <div class="swiper-container swiper-container-video _videos__thumbs" id="videos__thumbs<?= $type ?>">
                                            <div class="swiper-wrapper videos__area">
                                            <?php foreach($videoss as $video): ?>
                                                <a href="#" class="videos__thumb _videos_play" data-service="<?= ArrayHelper::getValue($video, 'src'); ?>" data-url="<?= ArrayHelper::getValue($video, 'url'); ?>" title="<?= Yii::t('hm/video', ArrayHelper::getValue($video, 'name')); ?>">
                                                    <div class="vthumb__bg" style="background-image: url('<?= $video->imageUrl; ?>');"></div>
                                                    <div class="vthumb__play"></div>
                                                    <div class="vthumb__icon"></div>
                                                    <div class="vthumb__name"><?= Yii::t('hm/video', ArrayHelper::getValue($video, 'name')); ?></div>
                                                </a>
                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <ul class="content__pagination video__pagination" id="video__pagination<?= $type ?>"></ul>
                                    </div>
                                </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!--a class="mobile-anchor" name="projects"></a-->
    <section class="section section__bg s9 section__projects inv" data-anchor="projects">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content d-flex flex-wrap justify-content-center">
                <div class="section__left section__left-projects">
                    <div class="projects__albums d-none d-xl-block mb-1 text-uppercase"><strong><?= Yii::t('hm', 'Альбомы'); ?></strong></div>
                    <h2 class="mb-6 d-xl-none"><?= Yii::t('hm', 'Выполненные проекты'); ?></h2>
                    <div class="prj__wrapper position-relative">
                        <div class="swiper-container swiper-container-prj" id="prj__thumbs">
                            <div class="swiper-wrapper prj__area">
                                <?php foreach($projects as $project): ?>
                                <a href="<?= Url::to(['page/project', 'id' => $project->id]); ?>" class="prj__thumb d-flex flex-md-column justify-content-between align-items-center align-items-md-start _section__btn-page" data-backdrop data-ajax_method="GET" title="<?= Yii::t('hm/project', ArrayHelper::getValue($project, 'name')); ?>">
                                    <div class="prj__bg" style="<?= $project->previewImageUrl ? "background-image: url('".$project->previewImageUrl."');" : null; ?>"></div>
                                    <div class="prj__param-info">
                                        <div class="prj__param-name"><?= Yii::t('hm/project', ArrayHelper::getValue($project, 'name')); ?></div>
                                        <div class=""><small><?= Yii::t('hm/project', ArrayHelper::getValue($project, 'title')); ?></small></div>
                                    </div>
                                    <div class="prj__param-arr"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <ul class="content__pagination prj__pagination" id="prj__pagination"></ul>
                    </div>
                </div>
                <div class="section__right section__right-projects d-none d-xl-block">
                    <div class="content__title d-none d-md-block mb-2"><?= Yii::t('hm', 'Фотогалерея'); ?></div>
                    <h2 class="mb-3"><?= Yii::t('hm', 'Выполненные проекты'); ?></h2>
                    <p class="mb-3"><?= Yii::t('hm', 'В этом разделе мы разместили фотографии объектов, в которых используется продукция <span class="text-uppercase font-weight-bold">Himmel</span>. Надеемся, что эти материалы помогут вам получить более полное представление о продукции и возможностях нашей компании.'); ?></p>
                    <p><strong><?= Yii::t('hm', 'Остались вопросы? Запишитесь на консультацию прямо сейчас!'); ?></strong></p>
                    
					<!--
					<button data-url="<?= Url::to(['page/feedback']); ?>" type="button" class="btn btn__base btn__base-light mt-4 _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Получить консультацию'); ?>"><?= Yii::t('hm', 'Получить консультацию'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>-->
					
				
					<button data-url="#" onclick="showModal();" type="button" class="btn btn__base btn__base-light mt-4" tabindex="-1" title="Получить консультацию">Получить консультацию<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>
					
                </div>
            </div>
        </div>
    </section>

    <section class="section s10 section-about" data-anchor="about">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content d-flex flex-wrap justify-content-center">
                <div class="about__bg"><svg><use xlink:href="#ico__pentagon"></use></svg></div>
                <div class="section__left section__left-about d-flex flex-column justify-content-center">
                    <div class="content__title mb-2"><?= Yii::t('hm', 'О нас'); ?></div>
                    <h2 class="mb-3 mb-lg-4"><?= Yii::t('hm', 'Himmel - это'); ?></h2>
                    <p><?= Yii::t('hm', 'Производство инновационного продукта высочайшего качества, изготавливаемого на современном высокоточном европейском оборудовании.'); ?></p>
                    <p><?= Yii::t('hm', 'Эффективное взаимодействие с крупными архитектурными и дизайнерскими компаниями, при реализации сложных проектов.'); ?></p>
                    <p><?= Yii::t('hm', 'Возможность поставки конструкций HIMMEL во все регионы России и страны СНГ.'); ?></p>
                    <p><?= Yii::t('hm', '<!--<strong>Выполнение рабочего проекта – бесплатно.</strong>-->Вся продукция завода HIMMEL прошла сертификацию РФ'); ?></p>
                </div>
                <div class="section__right section__right-about d-none d-md-flex flex-column justify-content-center position-relative">
                    <ul class="content__ul content__ul-files">
                        <li><?= DocHelper::a('gost', ['class' => 'font-weight-bold', 'target' => '_blank']); ?></li>
                        <li><?= DocHelper::a('pozhar_ng', ['class' => 'font-weight-bold', 'target' => '_blank']); ?></li>
                        <!--li><?= DocHelper::a('protocol_stal', ['class' => 'font-weight-bold', 'target' => '_blank']); ?></li-->
                        <!--li><?= DocHelper::a('protocol_nerstal', ['class' => 'font-weight-bold', 'target' => '_blank']); ?></li-->
                        <!--li><?= DocHelper::a('iso9001', ['class' => 'font-weight-bold', 'target' => '_blank']); ?></li-->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section s11 section-contacts inv" data-anchor="contacts">
        <div class="sec__inner d-flex flex-column flex-wrap justify-content-center">
            <div class="sec__content sec__content-contacts d-flex flex-wrap justify-content-center">
                <div class="section__left section__left-contacts">
                    <div class="content__title mb-2"><?= Yii::t('hm', 'Контакты'); ?></div>
                    <h2 class="mb-5 mb-md-4"><?= Yii::t('hm', '<span class="text-wood">Свяжитесь</span><br>с&nbsp;нами'); ?></h2>
                    <ul class="content__ul content__ul-contacts">
                        <li class="address"><?= Yii::t('hm', '630015, Россия, г.&nbsp;Новосибирск, <strong class="pb-1 text-nowrap">ул. Планетная, 30, к. 1а</strong>'); ?></li>
                        <!--
						<li class="address"><?= Yii::t('hm', '127083, Россия, г.&nbsp;Москва, <strong class="pb-1 text-nowrap">ул. 8 Марта, 1 с12</strong>, БЦ&nbsp;&laquo;Трио&raquo;'); ?></li>
                        <li class="address"><?= Yii::t('hm', '191040, Россия, г.&nbsp;Санкт-Петербург, <strong class="pb-1 text-nowrap">Лиговский проспект, д. 50, к. 6</strong>, БЦ&nbsp;&laquo;Атлант&raquo;'); ?></li>
						-->
                        <li class="phone"><span class="text-nowrap"><a id="telHref" href="tel:8 (800) 700-63-62">8 (800) 700-63-62</a></span></li>
                        <li class="envelope"><a id="emailHref" href="mailto:info@himmelrf.ru"><span id="emailValue" class="text-nowrap">info@himmelrf.ru</span></a></li>
                        <li class="regions"><a href="<?= Url::to(['/regions/city/index']); ?>"><span class="text-nowrap">Мы в регионах</span></a></li>
                    </ul>
                   
					<!--
					<button data-url="<?= Url::to(['page/feedback']); ?>" type="button" class="btn btn__base btn__base-light mt-4 _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать консультацию'); ?>"><?= Yii::t('hm', 'Заказать консультацию'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>-->
				  
				   
				   <button onclick="showModal();" data-url="" type="button" class="btn btn__base btn__base-light mt-4 _section__btn-page" data-ajax_method="GET" data-backdrop="" tabindex="-1" title="Заказать консультацию">Заказать консультацию<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>
				    
					
                </div>
                <div class="section__right section__right-contacts d-none d-md-flex flex-column justify-content-center">
                    <!--div id="contacts__gmap"-->
					<!--div id="contacts__gmap_2">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1b2f37613388f61980ed69faee652c08e7db70c3473ef21911cc723dbc1153ad&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
					</div-->
					<div id="map" style="width: 600px; height: 400px"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="conrol-layer inv">
    
	<nav class="navtop">
        <div class="row no-gutters">
            <div class="col-md-3 d-none d-md-block pt-3">
                <strong class="text-uppercase text-nowrap"><?= $phone ?></strong>
            </div>
            <div class="col-6 text-center">
                <div class="text-left text-md-center">
                    <h1 class="navtop__logo font-weight-bold text-uppercase">Himmel<!--<svg><use xlink:href="#ico__logo"></use></svg>--></h1>
                    <!--<div class="navtop__phrase d-none d-md-block mt-2 text-center"><?= Yii::t('hm', 'потолочные конструкции'); ?></div>-->
                </div>
            </div>
            <div class="col col-md-3 pt-3">
                <div class="navtop__menu text-right">
                    <a href="#" class="navtop-menu__switcher navtop-menu__open" title="Меню"><strong class="text-uppercase"><?= Yii::t('hm', 'Меню'); ?></strong></a>
                    <div class="navtop-menu__wrapper">
                        <div class="navtop-menu__block">
                            <a href="#" class="navtop-menu__switcher navtop-menu__close" title="Закрыть"><strong class="text-uppercase"><?= Yii::t('hm', 'Закрыть'); ?></strong></a>
                            <ul class="navtop-menu__list text-left">
                                <li data-menuanchor="index" class="active"><a class="menu-link" href="#index"><?= Yii::t('hm', 'Главная'); ?></a></li>
                                <li data-menuanchor="promo-video"><a class="menu-link" href="#promo-video"><?= Yii::t('hm', 'Частицы гармонии'); ?></a></li>
                                <li data-menuanchor="reika"><a class="menu-link" href="#reika"><?= Yii::t('hm', 'Реечные конструкции'); ?></a></li>
                                <li data-menuanchor="colors"><a class="menu-link" href="#colors"><?= Yii::t('hm', 'Цветовые решения'); ?></a></li>
                                <li data-menuanchor="modules"><a class="menu-link" href="#modules"><?= Yii::t('hm', 'Модульная 3D система'); ?></a></li>
                                <li data-menuanchor="panels"><a class="menu-link" href="#panels"><?= Yii::t('hm', 'Панельная система'); ?></a></li>
								<li data-menuanchor="himmel-aero"><a class="menu-link" href="#himmel-aero"><?= Yii::t('hm', 'HIMMEL Aero'); ?></a></li>
								<li data-menuanchor="video-archive"><a class="menu-link" href="#video-archive"><?= Yii::t('hm', 'Видеоархив'); ?></a></li>
                                <li data-menuanchor="projects"><a class="menu-link" href="#projects"><?= Yii::t('hm', 'Выполненные проекты'); ?></a></li>
                                <li data-menuanchor="about"><a class="menu-link" href="#about"><?= Yii::t('hm', 'О нас'); ?></a></li>
                                <li data-menuanchor="contacts"><a class="menu-link" href="#contacts"><?= Yii::t('hm', 'Контакты'); ?></a></li>
                                <li class="d-md-none mt-5"><strong class="text-nowrap pb-1 border-bottom border-white"><a href="tel:8 (800) 700-63-62">8 (800) 700-63-62</a></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	
    <nav class="navleft">
        <ul class="navleft_icons">
            <li><a href="<?= Url::to(['page/feedback']); ?>" class="_section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1"><div class="navleft__icon text-wood"><svg><use xlink:href="#ico__envelope"></use></svg></div></a></li>
            <!--li><a href="https://business.facebook.com/himmelrf/?business_id=360347817759602" target="_blank"><div class="navleft__icon"><svg><use xlink:href="#ico__vk"></use></svg></div></a></li>
            <li><a href="https://www.instagram.com/himmelrf/" target="_blank"><div class="navleft__icon"><svg><use xlink:href="#ico__instagram"></use></svg></div></a></li-->
        </ul>
    </nav>
    <footer class="footer d-none d-md-block">
        <div class="footer__logo"><a href="/" title="Himmel"><strong class="text-uppercase text-nowrap">Himmel <?= date('Y'); ?></strong></a></div>
        <div class="footer__lng"><strong class="text-uppercase text-nowrap <?= Yii::$app->language ?>"><a href="<?= Url::to(['lng', 'l' => 'ru-RU']); ?>" class="ru-RU" title="<?= Yii::t('hm', 'Руский'); ?>">RU</a>/<a href="<?= Url::to(['lng', 'l' => 'en-US']); ?>" class="en-US" title="<?= Yii::t('hm', 'Английский'); ?>">EN</a></strong></div>
    </footer>
    
	<!--
    <div class="callback-button">
        <a href="<?= Url::to(['page/callback']); ?>" class="callback-button__phone _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"></a>
    </div>-->
	
	<div class="callback-button">
        <a href="" onclick="showCallbackModal();" class="callback-button__phone _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="Заказать звонок"></a>
    </div>
    
    <div class="callback-button-mobile text-center d-sm-none">
        <a href="<?= Url::to(['page/callback']); ?>" class="_section__btn-page text-white" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Заказать звонок'); ?>"><span class="callback__icon mr-2"><svg><use xlink:href="#ico__handset"></use></svg></span><?= Yii::t('hm', 'Заказать звонок'); ?></a>
    </div>
</div>

<div id="advert" class="advert _section__wrapper" style="display: none;">
    <div class="d-flex flex-row justify-content-between align-items-end align-items-md-center flex-wrap h-100 text-white">
        <h4 class="advert__excl d-none d-xl-block order-0 text-uppercase">спецпредложение!</h4>
        <div class="d-inline-flex flex-row justify-content-start align-items-center flex-wrap order-1">
            <div class="advert__img order-1 order-md-0"><img src="/i/_color/e7930f34.jpg"></div>
            <div class="advert__title order-0 order-md-1 mb-3 mb-md-0 ml-md-3"><div class="advert__title-content"><div><strong>Рейка 30x30 шаг 50мм</strong></div><div>цвет ST001 Дуб рустикальный</div></div></div>
            <div class="advert__price d-flex flex-row flex-md-column align-items-center align-items-md-start ml-4 ml-lg-5 order-2"><div><s>4900 р/м<sup>2</sup></s></div><div class="ml-4 ml-md-0"><strong><big>2400</big>р/м<sup>2</sup></strong></div></div>
        </div>
        <div class="advert__contact d-none d-md-block order-md-2"><button data-url="<?= Url::to(['page/feedback', '_h' => 4]); ?>" type="button" class="btn btn__base btn__base-light _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Узнать подробнее'); ?>"><?= Yii::t('hm', 'Узнать подробнее'); ?><span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button></div>
        <div class="advert__contact d-md-none order-3 text-center"><a href="<?= Url::to(['page/feedback', '_h' => 4]); ?>" class="d-block w-100 text-white text-uppercase _section__btn-page" data-ajax_method="GET" data-backdrop tabindex="-1" title="<?= Yii::t('hm', 'Узнать подробнее'); ?>"><strong><?= Yii::t('hm', 'Узнать подробнее'); ?></strong></a></div>
        <div class="advert__close order-2 order-md-3 align-self-center _section__btn-close"><span class="advert__icon"><svg><use xlink:href="#ico__close"></use></svg></span></div>
    </div>
</div>

<div id="preloader" class="preloader">
    <div class="preloader__icon preloader__icon_outer"><svg><use xlink:href="#ico__triangle"></use></svg></div>
    <div class="preloader__icon preloader__icon_inner"><svg><use xlink:href="#ico__triangle"></use></svg></div>
    <div class="preloader__section preloader__section_left"></div>
    <div class="preloader__section preloader__section_right"></div>
</div>


<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <symbol id="ico__pentagon" viewBox="0 0 100 100"><polygon class="shape" points="50,12.5 14.5,38.5 28,80.25 72,80.25 85.5,38.5"></polygon></symbol>
    <symbol id="ico__triangle" viewBox="0 0 50 50"><path d="M24.9,18.2l12.4,19.5l-24.7,0.2L24.9,18.2 M24.8,5L0,45l50-0.4L24.8,5L24.8,5z"></path></symbol>
    <symbol id="ico__triangle2" viewBox="0 0 249 224"><path d="m21.465073,199.885674l98.534927,-174.771356l98.534918,174.771356l-197.069846,0z"></path></symbol>
    <symbol id="ico__logo" viewBox="0 0 760.76 164.86"><path d="M7667.6,447.78v115.4h-24.73V516.69h-51.76v46.49h-24.73V447.78h24.73v46.49h51.76V447.78h24.73Z" transform="translate(-7566.38 -398.32)"></path><path d="M7717.06,447.78v115.4h-24.73V447.78h24.73Z" transform="translate(-7566.38 -398.32)"></path><path d="M7915.6,398.32V563.18h-26.85V447.78l-52,78.19h-16l-52-78.43V563.18h-26.85V398.32H7766l62.65,94.44,62.65-94.44h24.26Z" transform="translate(-7566.38 -398.32)"></path><path d="M8114.14,398.32V563.18h-26.85V447.78l-52,78.19h-16l-52-78.43V563.18h-26.85V398.32h24.26l62.65,94.44,62.65-94.44h24.26Z" transform="translate(-7566.38 -398.32)"></path><path d="M8220.14,447.78v21.76H8163.6v24.56h51.6v21.6h-51.6v25.72h57.53v21.76h-82.26V447.78h81.27Z" transform="translate(-7566.38 -398.32)"></path><path d="M8270.59,447.78v93.14h56.55v22.26h-81.27V447.78h24.73Z" transform="translate(-7566.38 -398.32)"></path></symbol>

    <symbol id="ico__reika" viewBox="0 0 17 17"><path d="m2,2l3,0l0,13l-3,0l0,-13zm5,-2l3,0l0,13l-3,0l0,-13zm5,4l3,0l0,13l-3,0l0,-13z"></path></symbol>
    <symbol id="ico__panel" viewBox="0 0 17 17"><path d="m4,2 l10,0 l0,13 l-10,0 l0,-13 z"></path></symbol>
    <symbol id="ico__skrepka" viewBox="0 0 18 18"><path d="m15.939206,8.1l-4.1,8.8c-0.4,0.9 -1.5,1.3 -2.4,0.9l-6.4,-3c-0.9,-0.4 -1.3,-1.5 -0.9,-2.4l5.3,-11.2c0.4,-0.9 1.5,-1.3 2.4,-0.9l4,1.9c0.9,0.4 1.3,1.5 0.9,2.4l-3.8,8c-0.4,0.9 -1.5,1.3 -2.4,0.9l-1.6,-0.7c-0.9,-0.4 -1.3,-1.5 -0.9,-2.4l2.6,-5.6c0.2,-0.4 0.7,-0.6 1.2,-0.4c0.5,0.1 0.7,0.6 0.5,1l-2.3,4.8c-0.2,0.4 0,1 0.4,1.2c0.4,0.2 1,0 1.2,-0.4l3,-6.4c0.2,-0.4 0,-1 -0.4,-1.2l-2.4,-1.1c-0.4,-0.2 -1,0 -1.2,0.4l-4.5,9.6c-0.2,0.4 0,1 0.4,1.2l4.8,2.2c0.4,0.2 1,0 1.2,-0.4l3.7,-8c0.2,-0.4 0.7,-0.6 1.2,-0.4c0.5,0.2 0.7,0.7 0.5,1.2z"></path></symbol>

    <symbol id="ico__envelope" viewBox="0 0 512 384"><path d="M502.3,190.8a6,6,0,0,1,9.7,4.7V400a48,48,0,0,1-48,48H48A48,48,0,0,1,0,400V195.6a6,6,0,0,1,9.7-4.7c22.4,17.4,52.1,39.5,154.1,113.6,21.1,15.4,56.7,47.8,92.2,47.6,35.7,0.3,72-32.8,92.3-47.6C450.3,230.4,479.9,208.2,502.3,190.8ZM256,320c23.2,0.4,56.6-29.2,73.4-41.4,132.7-96.3,142.8-104.7,173.4-128.7A23.93,23.93,0,0,0,512,131V112a48,48,0,0,0-48-48H48A48,48,0,0,0,0,112v19a24.08,24.08,0,0,0,9.2,18.9c30.6,23.9,40.7,32.4,173.4,128.7,16.8,12.2,50.2,41.8,73.4,41.4h0Z" transform="translate(0 -64)"></path></symbol>
    <symbol id="ico__vk" viewBox="0 0 264 512"><path d="M76.7,512V283H0V192H76.7V120.3C76.7,42.4,124.3,0,193.8,0c33.3,0,61.9,2.5,70.2,3.6V85H215.8c-37.8,0-45.1,18-45.1,44.3V192H256l-11.7,91H170.7V512" transform="translate(0 0)"></path></symbol>
    <symbol id="ico__instagram" viewBox="0 0 448.25 448.15"><path d="M224.1,141A114.9,114.9,0,1,0,339,255.9,114.72,114.72,0,0,0,224.1,141Zm0,189.6a74.7,74.7,0,1,1,74.7-74.7,74.84,74.84,0,0,1-74.7,74.7h0ZM370.5,136.3a26.8,26.8,0,1,1-26.8-26.8A26.74,26.74,0,0,1,370.5,136.3Zm76.1,27.2c-1.7-35.9-9.9-67.7-36.2-93.9s-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9,0C95.8,35.1,64,43.3,37.7,69.5s-34.4,58-36.2,93.9c-2.1,37-2.1,147.9,0,184.9,1.7,35.9,9.9,67.7,36.2,93.9s58,34.4,93.9,36.2c37,2.1,147.9,2.1,184.9,0,35.9-1.7,67.7-9.9,93.9-36.2s34.4-58,36.2-93.9c2.1-37,2.1-147.8,0-184.8h0ZM398.8,388a75.63,75.63,0,0,1-42.6,42.6c-29.5,11.7-99.5,9-132.1,9s-102.7,2.6-132.1-9A75.63,75.63,0,0,1,49.4,388c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7,9-132.1A75.63,75.63,0,0,1,92,81.2c29.5-11.7,99.5-9,132.1-9s102.7-2.6,132.1,9a75.63,75.63,0,0,1,42.6,42.6c11.7,29.5,9,99.5,9,132.1S410.5,358.6,398.8,388Z" transform="translate(0.07 -31.82)"></path></symbol>

    <symbol id="ico__arrow-1-w" viewBox="0 0 20 20"><path d="m20,10l-1.39,-1.44l-7.61,7.61l0,-16.17l-2,0l0,16.17l-7.59,-7.59l-1.41,1.42l10,10l10,-10z"></path></symbol>
    <symbol id="ico__file" viewBox="0 0 22 22"><path d="m12.00688,1l-7,0a2,2 0 0 0 -2,2l0,16a2,2 0 0 0 2,2l12,0a2,2 0 0 0 2,-2l0,-11l-7,-7z"></path><polyline points="12.006881713867188,1 12.006881713867188,8 19.006881713867188,8 "></polyline></symbol>
    <symbol id="ico__address" viewBox="0 0 22 22"><path d="m2,8l9,-7l9,7l0,11a2,2 0 0 1 -2,2l-14,0a2,2 0 0 1 -2,-2l0,-11z"></path><polyline points="8,21 8,11 14,11 14,21 "></polyline></symbol>
    <symbol id="ico__phone" viewBox="0 0 23 23"><path d="m13.994439,5.03a5,5 0 0 1 3.95,3.95m-3.95,-7.95a9,9 0 0 1 7.95,7.94m-1,8l0,3a2,2 0 0 1 -2,2l-0.18,0a19.79,19.79 0 0 1 -8.63,-3.07a19.5,19.5 0 0 1 -6,-6a19.79,19.79 0 0 1 -3.07,-8.69a2,2 0 0 1 1.81,-2.18l3.18,0a2,2 0 0 1 2,1.72a12.84,12.84 0 0 0 0.7,2.81a2,2 0 0 1 -0.45,2.11l-1.27,1.27a16,16 0 0 0 6,6l1.27,-1.27a2,2 0 0 1 2.11,-0.45a12.84,12.84 0 0 0 2.81,0.7a2,2 0 0 1 1.72,2.03l0,0.02z"></path></symbol>
    <symbol id="ico__envelope" viewBox="0 0 22 22"><path d="m3,3l16,0a2,2 0 0 1 2,2l0,12a2,2 0 0 1 -2,2l-16,0a2,2 0 0 1 -2,-2l0,-12a2,2 0 0 1 2,-2z"></path><polyline points="21,4.875036124140024 11,11.875036124140024 1,4.875036124140024 "></polyline></symbol>
    <symbol id="ico__navarrow" viewBox="0 0 10 11"><path d="m8.226056,5.540152l-7.251961,4.013166l-0.003688,-8.081929l7.255649,4.068763z"></path></symbol>
    <symbol id="ico__handset" viewBox="0 0 139 139"><path d="M67.317,81.952c-9.284-7.634-15.483-17.054-18.742-22.414l-2.431-4.583c0.85-0.912,7.332-7.853,10.141-11.619  c3.53-4.729-1.588-9-1.588-9S40.296,19.933,37.014,17.076c-3.282-2.861-7.06-1.272-7.06-1.272  c-6.898,4.457-14.049,8.332-14.478,26.968C15.46,60.22,28.705,78.216,43.028,92.148c14.346,15.734,34.043,31.504,53.086,31.486  c18.634-0.425,22.508-7.575,26.965-14.473c0,0,1.59-3.775-1.268-7.06c-2.86-3.284-17.265-17.688-17.265-17.688  s-4.268-5.119-8.998-1.586c-3.525,2.635-9.855,8.496-11.38,9.917C84.171,92.749,73.582,87.104,67.317,81.952z"></path></symbol>
    <symbol id="ico__close" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></symbol>

    <symbol id="ico__spinner" viewBox="0 0 135 140" fill="#fff"><rect y="10" width="15" height="120" rx="6"><animate attributeName="height" begin="0.5s" dur="1s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite" /><animate attributeName="y" begin="0.5s" dur="1s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite" /> </rect> <rect x="30" y="10" width="15" height="120" rx="6"> <animate attributeName="height" begin="0.25s" dur="1s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="y" begin="0.25s" dur="1s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite" /> </rect> <rect x="60" width="15" height="140" rx="6"> <animate attributeName="height" begin="0s" dur="1s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="y" begin="0s" dur="1s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite" /> </rect> <rect x="90" y="10" width="15" height="120" rx="6"> <animate attributeName="height" begin="0.25s" dur="1s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="y" begin="0.25s" dur="1s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite" /> </rect> <rect x="120" y="10" width="15" height="120" rx="6"> <animate attributeName="height" begin="0.5s" dur="1s" values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="y" begin="0.5s" dur="1s" values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear" repeatCount="indefinite" /></rect></symbol>
</svg>


<!-- Google reCaptcha v3
<style>.grecaptcha-badge{z-index:999}</style>
<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
			//document.getElementById('g-recaptcha-response-download').value=token;
			//document.getElementById('g-recaptcha-response-feedback').value=token;
			//document.getElementById('g-recaptcha-response-callback').value=token;
		});
	});
</script> -->

<div id="modalDownload" class="modal" tabindex="-1" role="dialog" data-backdrop="false" aria-modal="true">
	<a href="#" class="modal__close" title="Закрыть" data-dismiss="modal" tabindex="-1" onclick="modalClose3();">
		<strong class="text-uppercase">Закрыть</strong>
	</a>
	<div class="modal__body2 d-flex flex-wrap justify-content-center" role="document">
		<div class="modal__content modal__content-feedback align-self-center d-flex flex-wrap">
			<div id="downloadContent" class="feedback__content align-self-center flex-fill d-flex flex-column justify-content-center">
				<h3 class="mb-5 text-uppercase"><span class="text-wood">Скачать</span> каталог</h3>
				<!--<form id="grid__form-create" class="_getcat" action="" method="post" onsubmit="ajaxDownload(); download(); return false;"> -->
				<form id="grid__form-create" class="_getcat track-goal-form" action="" method="post" onsubmit="ajaxDownload(); download(); return false;">

					<div class="model-fields mb-4">
						<div class="form-group label-floating field-contactform-name required is_empty">
							<label class="control-label" for="contactform-name-3">Как вас зовут?</label>
							<input type="text" id="contactform-name-3" class="form-control" name="ContactForm[name2]" tabindex="1" required="" aria-required="true">
							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-email required">
							<label class="control-label" for="contactform-email-3">E-mail</label>
							<input type="text" id="contactform-email-3" class="form-control" name="ContactForm[email]" tabindex="2" required="" aria-required="true">

							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-phone required">
							<label class="control-label" for="contactform-phone-3">Номер телефона</label>
							<div class="input-group">
							<input type="text" id="contactform-phone-3" class="form-control _phonemask" name="ContactForm[phone]" tabindex="3" required="" data-mask="\+\7 (999) 999-99-99" aria-required="true"><div class="input-group-prepend"><button class="btn btn-flag pr-0 dropdown-toggle" type="button" data-toggle="dropdown"><span id="flag" class="flag-icon flag-icon-ru"></span></button><div id="w0" class="_cc dropdown-menu-right dropdown-menu"><a class="dropdown-item" href="#" data-mask="\+\9\9\4 99-999-99-99" data-cc="az"><span class="flag-icon flag-icon-az"></span> Азербайджан</a>
							<a class="dropdown-item" href="#" data-mask="\+\3\7\4 99-999-99-99" data-cc="ar"><span class="flag-icon flag-icon-ar"></span> Армения</a>
							<a class="dropdown-item" href="#" data-mask="\+\3\7\5 99-999-99-99" data-cc="by"><span class="flag-icon flag-icon-by"></span> Белоруссия</a>
							<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="kz"><span class="flag-icon flag-icon-kz"></span> Казахстан</a>
							<a class="dropdown-item" href="#" data-mask="\+\9\9\6 99-999-99-99" data-cc="kg"><span class="flag-icon flag-icon-kg"></span> Киргизия</a>
							<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="ru"><span class="flag-icon flag-icon-ru"></span> Россия</a>
							<a class="dropdown-item" href="#" data-mask="\+\9\9\2 99-999-99-99" data-cc="tj"><span class="flag-icon flag-icon-tj"></span> Таджикистан</a>
							<a class="dropdown-item" href="#" data-mask="\+\9\9\3 99-999-99-99" data-cc="tm"><span class="flag-icon flag-icon-tm"></span> Туркмения</a>
							<a class="dropdown-item" href="#" data-mask="\+\9\9\8 99-999-99-99" data-cc="uz"><span class="flag-icon flag-icon-uz"></span> Узбекистан</a>
							<a class="dropdown-item" href="#" data-mask="\+\3\8\0 99-999-99-99" data-cc="ua"><span class="flag-icon flag-icon-ua"></span> Украина</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-cc="xx" data-mask="\+9999999999[99]"><span class="flag-icon flag-icon-xx"></span> Произвольный номер</a></div></div></div>

							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-city">
							<label class="control-label" for="contactform-city-3">Город</label>
							<input type="text" id="contactform-city-3" class="form-control" name="ContactForm[city]" tabindex="4">

							<div class="help-block"></div>
						</div>
						<input type="hidden" id="contactform-cc" name="ContactForm[cc]" value="ru">
						<input type="hidden" id="contactform-tz" name="ContactForm[tz]">
					</div>
					<div class="small text-center mb-6">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности</div>
					<div class="text-center">
						<button type="submit" class="btn btn__base btn__base-light pl-5">Скачать<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="modalDownloadBackdrop" class="modal-backdrop" style="position: static;"></div>

<script>
	function showModalDownload() {
		// Show modal download window
		document.getElementById( 'modalDownload' ).style.display = 'block';
		document.getElementById( 'modalDownload' ).classList.add( 'show' );
		document.getElementById( 'modalDownloadBackdrop' ).style.position = 'fixed';
		document.getElementById( 'modalDownloadBackdrop' ).classList.add( 'show' );
		
		var offset = 0 - (new Date().getTimezoneOffset()/60) - 7;
		$('input[name="ContactForm[tz]"]').first().val((offset <= 0 ?'':'+') + offset);

		$('._phonemask').each(function() {
			$(this).inputmask({
				mask: $(this).data('mask'),
				removeMaskOnSubmit: false,
				showMaskOnHover: false,
				showMaskOnFocus: true,
				//clearMaskOnLostFocus: false,
				onKeyValidation: function(key, result) {
					if ($(this).inputmask('isComplete')) {
						this.setCustomValidity('');
					} else {
						this.setCustomValidity("Укажите телефон");
					}
				}
			});
		});
		$('._cc > .dropdown-item').on('click', function(e) {
			var $mask = $('._phonemask');
			$mask.inputmask('setvalue', null);
			$mask.inputmask('option', {mask: $(this).data('mask')});
			$mask.focus();
			$('input[name="ContactForm[cc]"]').first().val($(this).data('cc'));
			$('#flag').attr('title', $(this).text()).removeClass(function (index, className) { return (className.match (/(^|\s)flag-icon-\S{2}/g) || []).join(' '); }).addClass('flag-icon-'+$(this).data('cc'));
		});

		$('.label-floating input').on('focusin', function(e) {
			$(this).closest('.label-floating').removeClass('is_empty');
		});
		$('.label-floating input').on('focusout', function(e) {
			if (!$(this).val().length) {
				$(this).closest('.label-floating').addClass('is_empty');
			}
		});
	}
	
	// Отправляем данные
	function ajaxDownload() {
		//let recaptcha = document.getElementById( 'g-recaptcha-response-download' ).value;
		let name = document.getElementById( 'contactform-name-3' ).value;
		let email = document.getElementById( 'contactform-email-3' ).value;
		let tel = document.getElementById( 'contactform-phone-3' ).value;
		let city = document.getElementById( 'contactform-city-3' ).value;
		$.ajax({
			type: "POST",
			url: 'https://himmelrf.ru/ajaxDownload.php',
			data: { name: name, email: email, tel: tel, city: city },
			success: function( data ) {
				document.getElementById( 'downloadContent' ).innerHTML = data;
				sendOrder();
			}
		});
	}
	
	// Закрываем модальное окно
	function modalClose3() {
		document.getElementById( 'modalDownload' ).style.display = 'none';
		document.getElementById( 'modalDownload' ).classList.remove( 'show' );
		document.getElementById( 'modalDownloadBackdrop' ).style.position = 'static';
		document.getElementById( 'modalDownloadBackdrop' ).classList.remove( 'show' );
	}
	
	/* Download file with send mail */
	function download() {
		let link = document.createElement('a');
		link.setAttribute('href', 'https://himmelrf.ru/Himmel_catalog.pdf');
		link.setAttribute('download', 'Himmel_catalog.pdf');
		link.click();
		return false;
	}
</script>


<!-- ================================================================================================================= -->

<!-- FEEDBACK -->
<!-- Модальное окно обратной связи -->
<div id="modal-id" class="modal" tabindex="-1" role="dialog" data-backdrop="false" aria-modal="true">
	<a href="#" class="modal__close" title="Закрыть" data-dismiss="modal" tabindex="-1" onclick="modalClose();">
		<strong class="text-uppercase">Закрыть</strong>
	</a>
	<div class="modal__body2 d-flex flex-wrap justify-content-center" role="document">
		<div class="modal__content modal__content-feedback align-self-center d-flex flex-wrap">
			<div id="feedbackContentId" class="feedback__content align-self-center flex-fill d-flex flex-column justify-content-center">
				<h3 class="mb-5 text-uppercase"><span class="text-wood">Свяжитесь</span> с нами..</h3>
				<form id="grid__form-create" class="_getcons _getcall _callnow _getcat _advert track-goal-form" action="" method="post" onsubmit="ajaxFeedback(); return false;"><!--  ym(35277685,'reachGoal','LEAD'); return false; -->
					<div class="model-fields mb-4">
						<div class="form-group label-floating field-contactform-name required is_empty">
							<label class="control-label" for="contactform-name">Как вас зовут?</label>
							<input type="text" id="contactform-name" class="form-control" name="ContactForm[name2]" tabindex="1" required="" aria-required="true">
							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-email required">
							<label class="control-label" for="contactform-email">E-mail</label>
							<input type="text" id="contactform-email" class="form-control" name="ContactForm[email]" tabindex="2" required="" aria-required="true">
							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-phone required">
							<label class="control-label" for="contactform-phone">Номер телефона</label>
							<div class="input-group">
								<input type="text" id="contactform-phone" class="form-control _phonemask" name="ContactForm[phone]" tabindex="3" required="" data-mask="\+\7 (999) 999-99-99" aria-required="true">
								<div class="input-group-prepend">
									<button class="btn btn-flag pr-0 dropdown-toggle" type="button" data-toggle="dropdown"><span id="flag" class="flag-icon flag-icon-ru"></span></button>
									<div id="w0" class="_cc dropdown-menu-right dropdown-menu">
										<a class="dropdown-item" href="#" data-mask="\+\9\9\4 99-999-99-99" data-cc="az"><span class="flag-icon flag-icon-az"></span> Азербайджан</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\7\4 99-999-99-99" data-cc="ar"><span class="flag-icon flag-icon-ar"></span> Армения</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\7\5 99-999-99-99" data-cc="by"><span class="flag-icon flag-icon-by"></span> Белоруссия</a>
										<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="kz"><span class="flag-icon flag-icon-kz"></span> Казахстан</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\6 99-999-99-99" data-cc="kg"><span class="flag-icon flag-icon-kg"></span> Киргизия</a>
										<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="ru"><span class="flag-icon flag-icon-ru"></span> Россия</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\2 99-999-99-99" data-cc="tj"><span class="flag-icon flag-icon-tj"></span> Таджикистан</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\3 99-999-99-99" data-cc="tm"><span class="flag-icon flag-icon-tm"></span> Туркмения</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\8 99-999-99-99" data-cc="uz"><span class="flag-icon flag-icon-uz"></span> Узбекистан</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\8\0 99-999-99-99" data-cc="ua"><span class="flag-icon flag-icon-ua"></span> Украина</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-cc="xx" data-mask="\+9999999999[99]"><span class="flag-icon flag-icon-xx"></span> Произвольный номер</a>
									</div>
								</div>
							</div>
							<div class="help-block"></div>
						</div>
						<div class="form-group label-floating is_empty field-contactform-city">
						<label class="control-label" for="contactform-city">Город</label>
						<input type="text" id="contactform-city" class="form-control" name="ContactForm[city]" tabindex="4">
							<div class="help-block"></div>
						</div>
						<input type="hidden" id="contactform-cc" name="ContactForm[cc]" value="ru">
						<input type="hidden" id="contactform-tz" name="ContactForm[tz]" value="-4">
					</div>
					<div class="small text-center mb-6">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности</div>
					<div class="text-center">
						<button type="submit" class="btn btn__base btn__base-light pl-5">Отправить<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="modal-backdrop-id" class="modal-backdrop" style="position: static;"></div>

<script>
	function showModal() {
		// Show modal window
		document.getElementById( 'modal-backdrop-id' ).style.position = 'fixed';
		document.getElementById( 'modal-backdrop-id' ).classList.add( 'show' );
		document.getElementById( 'modal-id' ).style.display = 'block';
		document.getElementById( 'modal-id' ).classList.add( 'show' );
		
		// Маска для телефона
		var offset = 0 - (new Date().getTimezoneOffset()/60) - 7;
		$('input[name="ContactForm[tz]"]').first().val((offset <= 0 ?'':'+') + offset);

		$('._phonemask').each(function() {
			$(this).inputmask({
				mask: $(this).data('mask'),
				removeMaskOnSubmit: false,
				showMaskOnHover: false,
				showMaskOnFocus: true,
				//clearMaskOnLostFocus: false,
				onKeyValidation: function(key, result) {
					if ($(this).inputmask('isComplete')) {
						this.setCustomValidity('');
					} else {
						this.setCustomValidity("Укажите телефон");
					}
				}
			});
		});
		
		// Выпадающий список кодов телефонов стран
		$('._cc > .dropdown-item').on('click', function(e) {
			var $mask = $('._phonemask');
			$mask.inputmask('setvalue', null);
			$mask.inputmask('option', {mask: $(this).data('mask')});
			$mask.focus();
			$('input[name="ContactForm[cc]"]').first().val($(this).data('cc'));
			$('#flag').attr('title', $(this).text()).removeClass(function (index, className) { return (className.match (/(^|\s)flag-icon-\S{2}/g) || []).join(' '); }).addClass('flag-icon-'+$(this).data('cc'));
		});

		$('.label-floating input').on('focusin', function(e) {
			$(this).closest('.label-floating').removeClass('is_empty');
		});
		$('.label-floating input').on('focusout', function(e) {
			if (!$(this).val().length) {
				$(this).closest('.label-floating').addClass('is_empty');
			}
		});
	}
</script>

<script>
	// Отправляем данные
	function ajaxFeedback() {
		//let name = 'g-recaptcha-response';
		//let recaptcha = document.getElementById( 'g-recaptcha-response-feedback' ).value;
		let name = document.getElementById( 'contactform-name' ).value;
		let email = document.getElementById( 'contactform-email' ).value;
		let tel = document.getElementById( 'contactform-phone' ).value;
		let city = document.getElementById( 'contactform-city' ).value;
		$.ajax({
			type: "POST",
			url: 'https://himmelrf.ru/ajaxFeedback.php',
			data: { name: name, email: email, tel: tel, city: city },
			success: function( data ) {
				document.getElementById( 'feedbackContentId' ).innerHTML = data;
			}
		});
	}
	
	// Закрываем модальное окно
	function modalClose() {
		document.getElementById( 'modal-backdrop-id' ).style.position = 'static';
		document.getElementById( 'modal-backdrop-id' ).classList.remove( 'show' );
		document.getElementById( 'modal-id' ).style.display = 'none';
		document.getElementById( 'modal-id' ).classList.remove( 'show' );
	}
</script>


<!-- =================================================================================== -->


<!-- Callback -->
<div id="modalCallback" class="modal" tabindex="-1" role="dialog" data-backdrop="false" aria-modal="true">
	<a href="#" class="modal__close" title="Закрыть" data-dismiss="modal" tabindex="-1" onclick="modalClose2();"><strong class="text-uppercase">Закрыть</strong></a>
	<div class="modal__body2 d-flex flex-wrap justify-content-center" role="document">
		<div class="modal__content modal__content-feedback align-self-center d-flex flex-wrap">
			<div id="callbackContent" class="feedback__content align-self-center flex-fill d-flex flex-column justify-content-center">
				<h3 class="mb-2 text-uppercase text-wood">Есть вопросы?</h3>
				<h4 class="mb-5 text-uppercase">Перезвоним в ближайшее время!</h4>
				<form id="grid__form-create" class="_callnow callbackwidget-call-form track-goal-form" action="" method="post" onsubmit="ajaxCallback(); return false;">
					<div class="model-fields mb-5">
						<div class="form-group label-floating field-contactform-phone required is_empty">
							<label class="control-label" for="contactform-phone-2">Номер телефона</label>
							<div class="input-group">
								<input type="text" id="contactform-phone-2" class="form-control _phonemask" name="ContactForm[phone]" tabindex="3" data-mask="\+\7 (999) 999-99-99" aria-required="true" required>
								<div class="input-group-prepend">
									<button class="btn btn-flag pr-0 dropdown-toggle" type="button" data-toggle="dropdown"><span id="flag" class="flag-icon flag-icon-ru" title="Россия"></span></button>
									<div id="w0" class="_cc dropdown-menu-right dropdown-menu">
										<a class="dropdown-item" href="#" data-mask="\+\9\9\4 99-999-99-99" data-cc="az"><span class="flag-icon flag-icon-az"></span> Азербайджан</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\7\4 99-999-99-99" data-cc="ar"><span class="flag-icon flag-icon-ar"></span> Армения</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\7\5 99-999-99-99" data-cc="by"><span class="flag-icon flag-icon-by"></span> Белоруссия</a>
										<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="kz"><span class="flag-icon flag-icon-kz"></span> Казахстан</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\6 99-999-99-99" data-cc="kg"><span class="flag-icon flag-icon-kg"></span> Киргизия</a>
										<a class="dropdown-item" href="#" data-mask="\+\7 (999) 999-99-99" data-cc="ru"><span class="flag-icon flag-icon-ru"></span> Россия</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\2 99-999-99-99" data-cc="tj"><span class="flag-icon flag-icon-tj"></span> Таджикистан</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\3 99-999-99-99" data-cc="tm"><span class="flag-icon flag-icon-tm"></span> Туркмения</a>
										<a class="dropdown-item" href="#" data-mask="\+\9\9\8 99-999-99-99" data-cc="uz"><span class="flag-icon flag-icon-uz"></span> Узбекистан</a>
										<a class="dropdown-item" href="#" data-mask="\+\3\8\0 99-999-99-99" data-cc="ua"><span class="flag-icon flag-icon-ua"></span> Украина</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-cc="xx" data-mask="\+9999999999[99]"><span class="flag-icon flag-icon-xx"></span> Произвольный номер</a>
									</div>
								</div>
							</div>
							<div class="help-block"></div>
						</div>
						<input type="hidden" id="contactform-cc" name="ContactForm[cc]" value="ru">
						<input type="hidden" id="contactform-tz" name="ContactForm[tz]">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn__base btn__base-light pl-5">Жду звонка<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="modalCallbackBackdrop" class="modal-backdrop" style="position: static;"></div>

<script>
	function showCallbackModal() {
		// Show Callback Modal window
		document.getElementById( 'modalCallback' ).style.display = 'block';
		document.getElementById( 'modalCallback' ).classList.add( 'show' );
		document.getElementById( 'modalCallbackBackdrop' ).style.position = 'fixed';
		document.getElementById( 'modalCallbackBackdrop' ).classList.add( 'show' );
		
	
		var offset = 0 - (new Date().getTimezoneOffset()/60) - 7;
		$('input[name="ContactForm[tz]"]').first().val((offset <= 0 ?'':'+') + offset);
			
		$('._phonemask').each(function() {
			$(this).inputmask({
				mask: $(this).data('mask'),
				removeMaskOnSubmit: false,
				showMaskOnHover: false,
				showMaskOnFocus: true,
				//clearMaskOnLostFocus: false,
				onKeyValidation: function(key, result) {
					if ($(this).inputmask('isComplete')) {
						this.setCustomValidity('');
					} else {
						this.setCustomValidity("Укажите телефон");
					}
				}
			});
		});

		$('._cc > .dropdown-item').on('click', function(e) {
			var $mask = $('._phonemask');
			$mask.inputmask('setvalue', null);
			$mask.inputmask('option', {mask: $(this).data('mask')});
			$mask.focus();
			//$('#country').text($(this).data('name'));
			//$('#country').text($(this).text());
			$('input[name="ContactForm[cc]"]').first().val($(this).data('cc'));
			$('#flag').attr('title', $(this).text()).removeClass(function (index, className) { return (className.match (/(^|\s)flag-icon-\S{2}/g) || []).join(' '); }).addClass('flag-icon-'+$(this).data('cc'));
		});

		$('.label-floating input').on('focusin', function(e) {
			$(this).closest('.label-floating').removeClass('is_empty');
		});
		$('.label-floating input').on('focusout', function(e) {
			if (!$(this).val().length) {
				$(this).closest('.label-floating').addClass('is_empty');
			}
		});
		
	}
	
	// Отправляем данные
	function ajaxCallback() {
		let tel = document.getElementById( 'contactform-phone-2' ).value;
		//let city = document.getElementById( 'contactform-city' ).value;
		$.ajax({
			type: "POST",
			url: 'include_form.php',
			data: { tel: tel },
			success: function( data ) {
				document.getElementById( 'callbackContent' ).innerHTML = data;
			}
		});
	}
	
	// Закрываем модальное окно
	function modalClose2() {
		document.getElementById( 'modalCallback' ).style.display = 'none';
		document.getElementById( 'modalCallback' ).classList.remove( 'show' );
		document.getElementById( 'modalCallbackBackdrop' ).style.position = 'static';
		document.getElementById( 'modalCallbackBackdrop' ).classList.remove( 'show' );
	}
</script>