@extends('layouts.frontend')



@section('content')

<div class="row">
    <div class="col-md-4  ">
        <img class="d-block   logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt="" height="72">
    </div>
    <div class="col-md-4  ">
    </div>
    <div class="col-md-4  ">
        <p class="d-block mx-auto special-date only-print">Предложение действительно<br />до <span class="client_date">23 октября 2021</span></p>
    </div>
</div>


<div class="special-box only-print">
    <p class="special-box-title"><b>Специальное предложение</b> <!-- и расчет будущей бани --><br />
        <span class="client_name"></span>
    </p>
</div>

@if ($category->slug == 'bath')
<div class="only-print">
    <div class="row ">
        <div class="col-md-7">
            <p class="product_name">Экологичная <span class="js_product_name">баня-бочка 2.2м</span>
                из массива <span class="product_material">ели</span></p>
        </div>
        <div class="col-md-2">
            <!-- <p  class="product_size">Длина: <span class="product_dlina">2,2</span> м<br/>      
        Ширина: <span class="product_shirina">2,2</span> м<br/>   
        Высота: <span class="product_visota">2,2</span> м</p> -->
        </div>
        <div class="col-md-3">
            <p class="product_price">Стоимость:<br />
                <span class="js_product_price">192 000 руб.</span></p>
        </div>
    </div>
</div>

<div class="only-print">
    <div class="row ">
        <div class="col-md-5">
            <img class="product_img js_product_img1" src="{{ asset('img/bochka22_1.jpg') }}">
            <img class="product_img js_product_img2" src="{{ asset('img/bochka22_2.jpg') }}">
            <p class="product_descr js_product_descr">Царские условия для парения созданы в этой модели бани. В ней есть всё для того, чтобы сделать отдых приятным и полезным. Удобная планировка, внутреннее пространство и качественное производство. Такая баня подойдет как для семейного отдыха, так и для баз отдыха.</p>
        </div>
        <div class="col-md-7">
            <table class="table table-striped compare-table">
                <tr>
                    <td></td>
                    <td class="compare-title-table">Другие производители</td>
                    <td class="compare-title-table">Наше предложение</td>
                </tr>
                <tr>
                    <td>Подкровельный ковер</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
                <tr>
                    <td>Лиственница в полу</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
                <tr>
                    <td>Свежее дыхание под печью</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
                <tr>
                    <td>Паровая пушка для мелкодисперсного пара</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
                <tr>
                    <td>Дренажная система</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
                <tr>
                    <td>Уличное освещение</td>
                    <td>Платная опция, ₽</td>
                    <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
            </table>
            <div class="sostav_block bochka22">
                <div class="row">
                    <div class="col-md-6 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 1<br />
                                Вместительность: 2-4 человека<br /><br />
                                Трапики из сосны на полу<br />
                                Слив под канализацию<br />
                                Дренажная система в торцах<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 1,8 м<br /><br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka22">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Слив под канализацию</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">35500</span>
                </li>
            </div>
            <div class="sostav_block bochka3">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 3 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: до 4 человек<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                                <br />
                                Раздевалка: 0,9 м</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">Рундук<br />
                                Лавка<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka3">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">35500</span>
                </li>
            </div>
            <div class="sostav_block bochka35">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 3,5 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 4 человека<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Рундук<br />
                                Одна лавка<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka35">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Одна лавка</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block bochka4">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 4 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 6 человек<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,7 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka4">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block bochka4k">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 4 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 6 человек<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,7 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka4k">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block bochka5">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 5 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 8 человек<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах <br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,7 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka5">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block bochka5s">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 5 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 3<br />
                                Вместительность: 8 человек<br /><br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах <br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Моечное отделение</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1 м<br />
                                <b>Диаметр:</b> 2,2 м
                            </p>
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                                <br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,7 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka5s">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block bochka6">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 6 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                Количество секций: 3<br />
                                Вместительность: 8 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Моечное отделение</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,1 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                            </p>
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,4 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Лавка<br />
                                Раскладной стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block bochka6">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro22">
                <div class="row">
                    <div class="col-md-6">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 2,2 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 1<br />
                                Вместительность: 2-4 человека<br />
                                Трапики из сосны на полу<br />
                                Слив под канализацию <br />
                                Дренажная система в торцах<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro22">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Слив под канализацию</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">23500</span>
                </li>
            </div>
            <div class="sostav_block kvadro3">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 3 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: до 4 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Раздевалка: 0,8 м</p>
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,9 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text"><b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Лавка<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro3">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лавка</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro35">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 3,5 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 4 человека<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">
                                <b>Ширина:</b> 1,23 м<br />
                                <b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Лавка<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro35">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Одна лавка</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro4">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 4,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: до 6 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">
                                <b>Ширина:</b> 1,73 м<br />
                                <b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro4">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro5">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 5,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 8 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Парная</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                Два полка из липы<br />
                                Форточка 30х40 из липы<br />
                                120кг камня вулканической породы Габбро Диабаз<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">
                                <b>Ширина:</b> 2, м<br />
                                <b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro5">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro5s">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 5,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 8 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Моечное отделение</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                <p class="komplekt_title">Парная</p>
                                <p class="js_komplekt_text"><b>Длина:</b> 1,9 м<br />
                                    <b>Диаметр:</b> 2,2 м<br />
                                    <b>Высота:</b> 2,2 м<br />
                                    Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                    Два полка из липы<br />
                                    Форточка 30х40 из липы<br />
                                    120кг камня вулканической породы Габбро Диабаз<br />
                                </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">
                                <b>Ширина:</b> 1,8 м<br />
                                <b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Две лавки<br />
                                Стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro5s">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Две лавки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="sostav_block kvadro6">
                <div class="row">
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Характеристики</p>
                            <p class="js_komplekt_text">
                                <b>Длина:</b> 6,0 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Количество секций: 2<br />
                                Вместительность: 8 человек<br />
                                Трапики из сосны на полу<br />
                                Мягкая кровля “Технониколь”<br />
                                Подкровельный ковер<br />
                                Огне- и биозащита <br />
                                Обработка антисептиком Неомид<br />
                                Уличное освещение<br />
                                Сливы под канализацию в каждом помещении<br />
                                Дренажная система в торцах<br />
                                Обработка торцов прорезиненной пропиткой Tikkurila Vinha
                                <br />
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Моечное отделение</p>
                            <p class="js_komplekt_text"><b>Длина:</b> 1,1 м<br />
                                <b>Диаметр:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                <p class="komplekt_title">Парная</p>
                                <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br />
                                    <b>Диаметр:</b> 2,2 м<br />
                                    <b>Высота:</b> 2,2 м<br />
                                    Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br />
                                    Два полка из липы<br />
                                    Форточка 30х40 из липы<br />
                                    120кг камня вулканической породы Габбро Диабаз<br />
                                </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4-min">
                        <div class="komplekt_box">
                            <p class="komplekt_title">Комната отдыха</p>
                            <p class="js_komplekt_text">
                                <b>Ширина:</b> 2,4 м<br />
                                <b>Ширина:</b> 2,2 м<br />
                                <b>Высота:</b> 2,2 м<br />
                                Рундук<br />
                                Лавка<br />
                                Раскладной стол<br />
                                Электрическая разводка и светильники IP54<br />
                                Выключатели и розетки<br />
                                Лиственница в полу<br />
                                <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dop_baza_block kvadro6">
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Трапики из сосны на полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Мягкая кровля “Технониколь”</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Огне- и биозащита</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка антисептиком Неомид</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Дренажная система в торцах</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Форточка 30х40 из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лавка</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Раскладной стол</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Электрическая разводка и светильники IP54</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Выключатели и розетки</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="">Стандартный комплект</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Подкровельный ковер</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Уличное освещение</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Два полка из липы</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Рундук</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Лиственница в полу</h6>
                        <small class="text-muted"></small>
                    </div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span>
                </li>
                <li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
                    <div>
                        <h6 class="my-0">Вы экономите</h6>
                        <small class="text-muted"></small>
                    </div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span>
                </li>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Гарантия 2 года</div>
                    </div>
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Доступ на наше производство</div>
                    </div>
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Индивидуальный подход</div>
                    </div>
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Персональный инженер проекта</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Сервисная служба
                            в рамках гарантии</div>
                    </div>
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Инструкция по применению
                            и ухаживанию изделия</div>
                    </div>
                    <div class="bullet_item">
                        <img class="bullet_item_check" src="{{ asset('img/new-check.png') }}">
                        <div class="bullet_item_text">Обработка изделия: огне-биозащитой
                            Неомид, антисептиком Неомид
                            и специальными защитными пропитками</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="footer-print only-print">
    <div class="row">
        <div class="col-md-5 mt-3 ">
            <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt="" height="72">
        </div>
        <div class="col-md-45 mt-3 ">
            <div style="width:100%">
                <img src="" id="manager_photo" class="manager-phone manager_photo">
                <h6 class="my-0 manager_name" id="manager_name"></h6>
                <small class="text-muted"><span class="manager_dolgnost" id="manager_dolgnost"></span></small>
            </div>
        </div>
        <div class="col-md-2 col-md-25 mt-3 ">
            <div style="width:100%">
                <span class="manager_phone" id="manager_phone"></span><br class="br-print" />
                <span class="manager_email" id="manager_email"></span></small>
            </div>
        </div>
    </div>
</div>

<div class="row only-print mt-1">
    <div class="col-md-12 " style="text-align: right; margin-right: 20px;">
        <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf"><img style="width:24px;" src="{{ asset('img/icon-www.png') }}"></a> <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf">fabrika23.ru</a>
        <a class="footer-link" href="https://www.instagram.com/fabrika23/"><img style="width:24px;" src="{{ asset('img/icon-instagram.png') }}"></a>
        <a class="footer-link" href="https://www.instagram.com/fabrika23/">@fabrika23</a>
        <a class="footer-link" href="https://vk.com/kdf23/"><img style="width:24px;" src="{{ asset('img/icon-vk.png') }}"></a>
        <a class="footer-link" href="https://vk.com/kdf23/">@kdf23</a>
        <a class="footer-link" href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A"><img style="width:24px;" src="{{ asset('img/icon-youtube.png') }}"></a>
        <a class="footer-link" href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A">@Фабрика23</a>
    </div>
</div>

<div class="page-break"></div>

<div class="only-print">
    <div class="row">
        <div class="col-md-4  ">
            <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt="" height="72">
        </div>
        <div class="col-md-4  ">
        </div>
        <div class="col-md-4 ">
            <p class="d-block mx-auto special-date only-print">Предложение действительно<br />
                до <span class="client_date"></span></p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 order-md-1 no-print">
        <!-- CHOOSE PRODUCT -->
        <h4 class="mb-3">Выберите продукт</h4>
        <div class="d-block my-3">
            @foreach ($products as $product)
            <div class="custom-control custom-radio">
                <input id="{{ $product->slug }}" name="product" type="radio" class="custom-control-input js-product" @if ($loop->index == 0) checked @endif required="" value="{{ $product->name }}" data-key="{{ $product->slug }}" data-price="{{ $product->price }}" data-type="{{ $product->type }}" data-dlina="{{ $product->width }}" data-razmer="{{ $product->size }}" data-price-el="{{ $product->price_el }}" data-price-kedr="{{ $product->price_kedr }}" data-img1="{{ asset($product->img_1) }}" data-img2="{{ asset($product->img_2) }}">
                <label class="custom-control-label" for="{{ $product->slug }}">{{ $product->name }} <span class="text-muted">- от {{ $product->price }} руб.</span></label>
            </div>
            @endforeach
        </div>

        <hr class="mb-4">
        
        <!-- CHOOSE MATERIAL -->
        <h4 class="mb-3">Выберите материал</h4>
        <div class="row">
            @foreach ($materials as $material)
            <div class="col-md-6 mb-3">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_material" class="custom-control-input js-product-material" id="material-{{ $material->slug }}" value="{{ $material->slug }}" @if ($loop->index == 0) checked @endif>
                    <label class="custom-control-label" for="material-{{ $material->slug }}">{{ $material->name }}</label>
                </div>
            </div>
            @endforeach
        </div>
        
        <hr class="mb-4">

        <!-- CHOOSE INCREMENT -->
        <h4 class="mb-3">Увеличение</h4>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" checked class="custom-control-input js-product-rash" id="rash0" value="0">
                    <label class="custom-control-label" for="rash0">Нет</label>
                </div>
            </div>

            <!-- 


            <div class="col-md-3 mb-3">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash23" data-name="до 2.3м" value="23" data-bochka-2="6800" data-bochka-3="8550" data-bochka-35="9150" data-bochka-4="10850" data-bochka-5="12400" data-bochka-6="14700" data-bochka_kedr-2="6800" data-bochka_kedr-3="8550" data-bochka_kedr-35="9150" data-bochka_kedr-4="10850" data-bochka_kedr-5="12400" data-bochka_kedr-6="14700" data-kvadro-2="7950" data-kvadro-3="9750" data-kvadro-35="10350" data-kvadro-4="12100" data-kvadro-5="13500" data-kvadro-6="15900" data-kvadro_kedr-2="7950" data-kvadro_kedr-3="9750" data-kvadro_kedr-35="10350" data-kvadro_kedr-4="12100" data-kvadro_kedr-5="13500" data-kvadro_kedr-6="15900">
                    <label class="custom-control-label" for="rash23">до 2.3м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash24" data-name="до 2.4м" value="24" data-bochka-2="8150" data-bochka-3="10250" data-bochka-35="11000" data-bochka-4="13000" data-bochka-5="14850" data-bochka-6="17650" data-bochka_kedr-2="8150" data-bochka_kedr-3="10250" data-bochka_kedr-35="11000" data-bochka_kedr-4="13000" data-bochka_kedr-5="14850" data-bochka_kedr-6="17650" data-kvadro-2="9550" data-kvadro-3="11700" data-kvadro-35="12400" data-kvadro-4="14500" data-kvadro-5="16200" data-kvadro-6="19050" data-kvadro_kedr-2="9550" data-kvadro_kedr-3="11700" data-kvadro_kedr-35="12400" data-kvadro_kedr-4="14500" data-kvadro_kedr-5="16200" data-kvadro_kedr-6="19050">
                    <label class="custom-control-label" for="rash24">до 2.4м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3 ">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash25" data-name="до 2.5м" value="25" data-bochka-5="28700" data-bochka-6="31500" data-kvadro-5="30050" data-kvadro-6="32950" data-kvadro_kedr-5="30050" data-kvadro_kedr-6="35550">
                    <label class="custom-control-label" for="rash25">до 2.5м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3 dopitem6">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash26" data-name="до 2.6м" value="26" data-kvadro-6="40850" data-kvadro_kedr-6="46050">
                    <label class="custom-control-label" for="rash26">до 2.6м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3 dopitem6">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash27" data-name="до 2.7м" value="27" data-kvadro-6="48750" data-kvadro_kedr-6="56550">
                    <label class="custom-control-label" for="rash27">до 2.7м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3 dopitem6">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash28" data-name="до 2.8м" value="28" data-kvadro-6="56650" data-kvadro_kedr-6="67050">
                    <label class="custom-control-label" for="rash28">до 2.8м</label>
                </div>
            </div>
            <div class="col-md-3 mb-3 dopitem6">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash29" data-name="до 2.9м" value="29" data-kvadro-6="64550" data-kvadro_kedr-6="77550">
                    <label class="custom-control-label" for="rash29">до 2.9м</label>
                </div>
            </div> -->
            @foreach ($increments as $name => $increment)
            <div class="col-md-3 mb-3 dopitem6">
                <div class="custom-control custom-radio">
                    <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash{{ $increment['id'] }}" data-name="{{ $name }}" value="{{ ($increment['width'] * 10) }}" 

                        @foreach ($increment['values'] as $key => $price)
                            data-{{ $key }}="{{ $price }}"
                        @endforeach
                    >
                    <label class="custom-control-label" for="rash{{ $increment['id'] }}">{{ $name }}</label>
                </div>
            </div>
            @endforeach
        </div>
        
        <hr class="mb-4">

        <!-- CHOOSE ADDONS -->
        <h4 class="mb-3">Дополнительные опции</h4>
        <div class="dopoption">
            <!-- CLIENT NAME -->
            <input type="text" name="name_client" id="name_client" class="form-control js-km" placeholder="Имя клиента в род. падеже, например Егора Николаевича"><br />
            
            <!-- LIST OF ADDONS -->

            @foreach ($addons as $addon)

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="dop" class="custom-control-input js-dop" id="{{ $addon->id }}" data-id="{{ $addon->id }}" value="{{ $addon->slug }}" data-price="{{ $addon->price }}" data-name="{{ $addon->name }}" data-type="{{ $addon->type }}">
                    <label class="custom-control-label" for="{{ $addon->id }}">{{ $addon->name }} <span class="text-muted">- {{ $addon->price }} руб.</span></label>
                </div>

                @if ($addon->type == 'input')
                    <div class="input-group">
                        <input type="text" id="km_{{ $addon->id }}" class="form-control js-km" data-id="{{ $addon->id }}" placeholder="километров">
                    </div>
                @endif

            @endforeach
        </div>
       
        <form class="needs-validation card p-2 no-print mb-3 mt-3" novalidate="">
            <h4 class="mb-3">Добавить доп. в список</h4>
            <div class="mb-3">
                <label for="name">Название допа <span class="text-muted"></span></label>
                <input type="text" class="form-control" id="adddop" name="dops" placeholder="">
            </div>
            <div class="mb-3">
                <label for="address2">Цена<span class="text-muted"></span></label>
                <input type="text" class="form-control" id="addprice" name="price" placeholder="" required=""><input type="hidden" name="formname" value="adddop">
            </div>
            <button class="btn btn-primary btn-lg btn-block js-add-dop" type="button">Добавить доп. в список</button>
        </form>
    </div>


    <div class="col-md-6 mb-6  order-md-2 make-me-sticky print_full">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Продукт</span>
        </h4>
        <ul class="list-group list-group-standart mb-3" id="">
            <li class="list-group-item d-flex justify-content-between lh-condensed print_full">
                <div>
                    <h6 class="my-0 hide-item" id="product_name"></h6>
                    <small class="text-muted hide-item">Материал: <span id="product_material"></span></small>
                    <p class="product_name"></p>
                </div>
                <span class="text-muted js_product_price" id="product_price">0 руб.</span>
            </li>
        </ul>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted dop-item  dops-item hide-item">Дополнительные опции</span>
        </h4>
        <ul class="list-group list-striped mb-3 print_full dop-item rash-item ">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Увеличение <span id="product_rash"></span></h6> <small class="text-muted"></small>
                </div><span class="text-muted" id="product_rash_price">0 руб.</span>
            </li>
        </ul>
        <ul class="list-group list-group-dop mb-3 print_full dops-item hide-item" id="list_dop">
        </ul>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Итого</span>
        </h4>
        <ul class="list-group print_full mb-3">
            <li class="list-group-item d-flex justify-content-between">
                <span>Стоимость комплекта</span>
                <strong id="summa_complect"></strong>
            </li>
            <li class="list-group-item d-flex justify-content-between text-success">
                <span>Экономия на опциях в комплекте</span>
                <strong id="summa_economy"></strong>
            </li>
            <li class="list-group-item d-flex justify-content-between  hide-item dop-item">
                <span>Стоимость доп. опций</span>
                <strong id="summa_dop"></strong>
            </li>
            <li class="list-group-item d-flex li-big justify-content-between" style="background: #f5f6fa;">
                <span>Итого</span>
                <strong id="summa_itogo"></strong>
            </li>
            <li class="list-group-item d-flex hide-item item-promo justify-content-between bg-white">
                <div class="text-success">
                    <!-- <span>Скидка -<span id="promo"></span>% действительна до 3-х дней</span> -->
                    <span>Скидка действительна до 3-х дней</span>
                </div>
                <span id="summa_promo">0 руб.</span>
            </li>
            <li class="list-group-item d-flex hide-item item-promo justify-content-between">
                <span>Итого со скидкой</span>
                <strong id="summa_itogo_promo">0 руб.</strong>
            </li>
        </ul>
        
        <form class="card p-2 no-print mb-3">
            <div class="input-group">
                <input type="text" name="promocod" class="form-control js-promo" placeholder="Промокод">
            </div>
        </form>

        <div class="installment-block">
            <h4 class="d-flex justify-content-between align-items-center installment-title mb-3">
                <span class="text-muted">Рассрочка 0%</span>
            </h4>
            <div class="list-group mb-3 no-print">
                <div class="row" style="margin:0px">
                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" checked="" required="" name="installment" class="custom-control-input js-installment" id="installment-none" value="0">
                            <label class="custom-control-label" for="installment-none">нет</label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" required="" name="installment" class="custom-control-input js-installment" id="installment-6" value="6">
                            <label class="custom-control-label" for="installment-6">6 месяцев</label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" required="" name="installment" class="custom-control-input js-installment" id="installment-12" value="12">
                            <label class="custom-control-label" for="installment-12">12 месяцев</label>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-group mb-3 installment " id="">
                <li class="list-group-item d-flex justify-content-between lh-condensed down_payment li-big print_full">
                    <div>
                        <h6 class="my-0" id="">Первоначальный взнос </h6>
                    </div>
                    <span class="text-muted" id="down_payment">0 руб.</span>
                </li>
                <li class="list-group-item li-big d-flex justify-content-between lh-condensed monthly_paymen print_full">
                    <div>
                        <h6 class="my-0" id="">Ежемесячный платеж на <span id="count_month"></span> мес.</h6>
                    </div>
                    <span class="text-muted" id="monthly_paymen">0 руб.</span>
                </li>
            </ul>
        </div>

        <!-- CHOOSE MANAGER -->
        <div class="col-md-12 mb-3 print-manager">
            <label for="country" class=" no-print">Инженер проекта</label>
            <select class="custom-select d-block js-manager  no-print" id="manager" required="">
                <option value="0">Выберите</option>

                @foreach ($managers as $manager)
                    <option value="{{ $manager->fullname }}" data-phone="{{ $manager->phone }}" data-name="{{ $manager->fullname }}" data-dolgnost="{{ $manager->specialty }}" data-img="{{ asset($manager->photo) }}" data-email="{{ $manager->email }}">{{ $manager->fullname }}</option>
                @endforeach
            </select>
        </div>

        <ul class="list-group mb-3 box-manager hide-item no-print" id="">
            <li class="list-group-item d-flex justify-content-between lh-condensed print_full">
                <div style="width:100%">
                    <img src="" id="manager_photo" class="manager-phone manager_photo">
                    <h6 class="my-0 manager_name" id="manager_name"></h6>
                    <small class="text-muted"><span class="manager_dolgnost" id="manager_dolgnost"></span><br />
                        <span class="manager_phone" id="manager_phone"></span><br class="br-print" />
                        <span class="manager_email" id="manager_email"></span></small>
                </div>
            </li>
        </ul>
        <ul class="list-inline no-print">
            <li class="list-inline-item"><a style="cursor: pointer;" onclick="window.print()">Распечатать</a></li>
            <li class="list-inline-item"><a style="cursor: pointer;" onclick="window.print()">Сохранить PDF / Предпросмотр</a></li>
        </ul>
    </div>
</div>

<div class="footer-print only-print">
    <div class="row">
        <div class="col-md-5 mt-3 ">
            <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt="" height="72">
        </div>
        <div class="col-md-45 mt-3 ">
            <div style="width:100%">
                <img src="" id="manager_photo" class="manager-phone manager_photo">
                <h6 class="my-0 manager_name" id="manager_name"></h6>
                <small class="text-muted"><span class="manager_dolgnost" id="manager_dolgnost"></span></small>
            </div>
        </div>
        <div class="col-md-2 col-md-25 mt-3 ">
            <div style="width:100%">
                <span class="manager_phone" id="manager_phone"></span><br class="br-print" />
                <span class="manager_email" id="manager_email"></span></small>
            </div>
        </div>
    </div>
</div>

<!-- SOCIALS -->
<div class="row only-print mt-1">
    <div class="col-md-12 " style="text-align: right; margin-right: 20px;">
        <!-- Website -->
        <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf"><img style="width:24px;" src="{{ asset('img/icon-www.png') }}"></a> 
        <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf">fabrika23.ru</a>
        
        <!-- Instagram -->
        <a class="footer-link" href="https://www.instagram.com/fabrika23/"><img style="width:24px;" src="{{ asset('img/icon-instagram.png') }}"></a>
        <a class="footer-link" href="https://www.instagram.com/fabrika23/">@fabrika23</a>
        
        <!-- VK -->
        <a class="footer-link" href="https://vk.com/kdf23/"><img style="width:24px;" src="{{ asset('img/icon-vk.png') }}"></a>
        <a class="footer-link" href="https://vk.com/kdf23/">@kdf23</a>
        
        <!-- Youtube -->
        <a class="footer-link" href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A"><img style="width:24px;" src="{{ asset('img/icon-youtube.png') }}"></a>
        <a class="footer-link" href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A">@Фабрика23</a>
    </div>
</div>
@endsection