<!DOCTYPE html>

<html lang="en" class="gr__getbootstrap_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1170">
   <!--   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>Расчет стоимости - КДФ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/form-validation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gilroy.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>

<body class="bg-white" data-gr-c-s-loaded="true">

    <div class="container">

      <div class="top-menu row">

      <!--   <div class="col-md-6">
          <p class="lead no-print">Калькулятор стоимости</p>
        </div> -->
        <div class="col-md-12">
            <p class="lead no-print"><a href="/">Бани</a> | <a href="#viking">Викинги</a> | <a href="#moduldom">Модульные дома</a></p>
        </div>

      </div>


      <div class="row">


        <div class="col-md-4  ">
          <img class="d-block   logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt=""  height="72">
        </div>
        <div class="col-md-4  ">
         
        </div>

        <div class="col-md-4  ">
          <p class="d-block mx-auto special-date only-print">Предложение действительно<br/>до <span class="client_date">23 октября 2021</span></p>
        </div>
        
      </div>

      <div class="special-box only-print">
          <p  class="special-box-title"><b>Специальное предложение</b> и расчет будущей бани<br/>
<span class="client_name"></span></p>
      </div>

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
                <p   class="product_price" >Стоимость:<br/>
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
                  <td class="compare-title-table" >Другие производители</td>
                  <td class="compare-title-table" >Наше предложение</td>
                </tr>

                <tr>
                  <td>Подкровельный ковер</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>

                <tr>
                  <td>Лиственница в полу</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table"  src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>

                <tr>
                  <td>Свежее дыхание под печью</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table" src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>

               <!--  <tr>
                  <td>Паровая пушка</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table"  src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>
 -->
                <tr>
                  <td>Паровая пушка для мелкодисперсного пара</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table"  src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>

                <tr>
                  <td>Дренажная система</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table"  src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>



                <tr>
                  <td>Уличное освещение</td>
                  <td>Платная опция, ₽</td>
                  <td class="green-text"><img class="check-img-table"  src="{{ asset('img/new-check.png') }}"> Включено</td>
                </tr>

              </table>


      


              <div class="sostav_block bochka22">
               <div class="row">

                <div class="col-md-6 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br/>
                        <b>Диаметр:</b> 2,2 м<br/>
                        Количество секций: 1<br/>
                          Вместительность: 2-4 человека<br/><br/>

                        Трапики из сосны на полу<br/>
Слив под канализацию<br/>
Дренажная система в торцах<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>


</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-6 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 1,8 м<br/><br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>


                            </p>
                      </div>
                  </div>
               </div>
              </div>


 <div class="dop_baza_block bochka22">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Слив под канализацию</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">35500</span></li>
         </div>




              <div class="sostav_block bochka3">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 3 м<br/>
                        <b>Диаметр:</b> 2,2 м<br/>
                        Количество секций: 2<br/>
                        Вместительность: до 4 человек<br/><br/>

                       Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>
<br/>
                        Раздевалка: 0,9 м</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                          Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">Рундук<br/>
                            Лавка<br/>
                            Электрическая разводка и светильники IP54<br/>
                            Выключатели и розетки<br/>
                            Лиственница в полу<br/>
                            </p>
                      </div>
                  </div>
               </div>
              </div>


 <div class="dop_baza_block bochka3">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">35500</span></li>
   </div>



              <div class="sostav_block bochka35">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 3,5 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 4 человека<br/><br/>

Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>

</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,2 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Рундук<br/>
Одна лавка<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>
<br/>
                            </p>
                      </div>
                  </div>
               </div>
              </div>




 <div class="dop_baza_block bochka35">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Одна лавка</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>



              <div class="sostav_block bochka4">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 4 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 6 человек<br/><br/>

Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>


</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                           Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,7 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
                    </p>
                      </div>
                  </div>
               </div>
              </div>



 <div class="dop_baza_block bochka4">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>



              <div class="sostav_block bochka4k">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 4 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 6 человек<br/><br/>

Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>


</p>





                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,7 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>

                            </p>
                      </div>
                  </div>
               </div>
              </div>


 <div class="dop_baza_block bochka4k">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>


              <div class="sostav_block bochka5">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 5 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 8 человек<br/><br/>

Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах <br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>


</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                        
      
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                           Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,7 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
                            </p>
                      </div>
                  </div>
               </div>
              </div>
              

 <div class="dop_baza_block bochka5">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>


              <div class="sostav_block bochka5s">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 5 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 3<br/>
Вместительность: 8 человек<br/><br/>

Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах <br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>

</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                        
                         <p class="komplekt_title">Моечное отделение</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1 м<br/>
                            <b>Диаметр:</b> 2,2 м
                            </p>
      

                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>
<br/>


                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,7 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
                            </p>
                      </div>
                  </div>
               </div>
              </div>
              

 <div class="dop_baza_block bochka5s">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>


              <div class="sostav_block bochka6">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text"><b>Длина:</b> 6 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
Количество секций: 3<br/>
Вместительность: 8 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha


</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                        
                         <p class="komplekt_title">Моечное отделение</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,1 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                             <b>Высота:</b> 2,2 м<br/>
                            </p>
      

                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                       
                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,4 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Рундук<br/>
Лавка<br/>
Раскладной стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
                            </p>
                      </div>
                  </div>
               </div>
              </div>
              
 <div class="dop_baza_block bochka6">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>






              <div class="sostav_block kvadro22">
               <div class="row">

                <div class="col-md-6"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 2,2 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 1<br/>
Вместительность: 2-4 человека<br/>


Трапики из сосны на полу<br/>
Слив под канализацию <br/>
Дренажная система в торцах<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-6 "> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,8 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              
               </div>
              </div>
              
 <div class="dop_baza_block kvadro22">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Слив под канализацию</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">23500</span></li>
   </div>





              <div class="sostav_block kvadro3">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 3 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: до 4 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Раздевалка: 0,8 м</p>

                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,9 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text"><b>Ширина:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Рундук<br/>
Лавка<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro3">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лавка</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>





         <div class="sostav_block kvadro35">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 3,5 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 4 человека<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">
                          <b>Ширина:</b> 1,23 м<br/>
                          <b>Ширина:</b> 2,2 м<br/>
                          <b>Высота:</b> 2,2 м<br/>
                            Рундук<br/>
Лавка<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro35">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Одна лавка</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>







         <div class="sostav_block kvadro4">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 4,0 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: до 6 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">
                          <b>Ширина:</b> 1,73 м<br/>
                          <b>Ширина:</b> 2,2 м<br/>
                          <b>Высота:</b> 2,2 м<br/>
                            Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro4">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>







         <div class="sostav_block kvadro5">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 5,0 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 8 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      
                        <p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,0 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">
                          <b>Ширина:</b> 2, м<br/>
                          <b>Ширина:</b> 2,2 м<br/>
                          <b>Высота:</b> 2,2 м<br/>
Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro5">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>






         <div class="sostav_block kvadro5s">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 5,0 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 8 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      
                        <p class="komplekt_title">Моечное отделение</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,0 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>

<p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,9 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">
                          <b>Ширина:</b> 1,8 м<br/>
                          <b>Ширина:</b> 2,2 м<br/>
                          <b>Высота:</b> 2,2 м<br/>
                            Рундук<br/>
Две лавки<br/>
Стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro5s">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Две лавки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>






         <div class="sostav_block kvadro6">
               <div class="row">

                <div class="col-md-4 col-md-4-min"> 
                  <div class="komplekt_box">
                   
                    <p class="komplekt_title">Характеристики</p>

                                          
                       <p class="js_komplekt_text">
<b>Длина:</b> 6,0 м<br/>
<b>Диаметр:</b> 2,2 м<br/>
<b>Высота:</b> 2,2 м<br/>
Количество секций: 2<br/>
Вместительность: 8 человек<br/>


Трапики из сосны на полу<br/>
Мягкая кровля “Технониколь”<br/>
Подкровельный ковер<br/>
Огне- и биозащита <br/>
Обработка антисептиком Неомид<br/>
Уличное освещение<br/>
Сливы под канализацию в каждом помещении<br/>
Дренажная система в торцах<br/>
Обработка торцов прорезиненной пропиткой Tikkurila Vinha
<br/>



</p>

                      </p>
                  </div>
                </div>
                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      
                        <p class="komplekt_title">Моечное отделение</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 1,1 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>

<p class="komplekt_title">Парная</p>

                        <p class="js_komplekt_text"><b>Длина:</b> 2,2 м<br/>
                            <b>Диаметр:</b> 2,2 м<br/>
                            <b>Высота:</b> 2,2 м<br/>
                            Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)<br/>
Два полка из липы<br/>
Форточка 30х40 из липы<br/>
120кг камня вулканической породы Габбро Диабаз<br/>





                            </p>
                      </div>
                  </div>
              

                  <div class="col-md-4 col-md-4-min"> 
                      <div class="komplekt_box">
                      

                        <p class="komplekt_title">Комната отдыха</p>

                        <p class="js_komplekt_text">
                          <b>Ширина:</b> 2,4 м<br/>
                          <b>Ширина:</b> 2,2 м<br/>
                          <b>Высота:</b> 2,2 м<br/>
                            Рундук<br/>
Лавка<br/>
Раскладной стол<br/>
Электрическая разводка и светильники IP54<br/>
Выключатели и розетки<br/>
Лиственница в полу<br/>
<br/>





                            </p>
                      </div>
                  </div>


               </div>
              </div>
              
 <div class="dop_baza_block kvadro6">

          <li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Трапики из сосны на полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Мягкая кровля “Технониколь”</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Огне- и биозащита</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка антисептиком Неомид</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Сливы под канализацию в каждом помещении</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Дренажная система в торцах</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Печь в сборе Везувий Оптимум (бак на 50л из нержавейки)</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Форточка 30х40 из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лавка</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Раскладной стол</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Электрическая разводка и светильники IP54</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Выключатели и розетки</h6>
<small class="text-muted"></small></div><span class="text-muted" style="">Стандартный комплект</span></li><li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Подкровельный ковер</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">4500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Уличное освещение</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Обработка торцов прорезиненной пропиткой Tikkurila Vinha</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">2000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Два полка из липы</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">14000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">120кг камня вулканической породы Габбро Диабаз</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1500 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Рундук</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">1400 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between lh-condensed">
<div><h6 class="my-0">Лиственница в полу</h6>
<small class="text-muted"></small></div><span class="text-muted" style="text-decoration: line-through;">12000 руб.</span></li>

<li class="list-group-item list-group-item-baza d-flex justify-content-between no-print lh-condensed" style="display:none !important;">
<div><h6 class="my-0">Вы экономите</h6>
<small class="text-muted"></small></div><span id="economy" class="text-muted" style="text-decoration: line-through;">36900</span></li>
   </div>





               <div class="row ">
                <div class="col-md-6"> 
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Гарантия 2 года</div>
                  </div>
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Доступ на наше производство</div>
                  </div>
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Индивидуальный подход</div>
                  </div>
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Персональный инженер проекта</div>
                  </div>
                </div>


                  <div class="col-md-6"> 
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Сервисная служба
в рамках гарантии</div>
                  </div>
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Инструкция по применению 
и ухаживанию изделия</div>
                  </div>
                  <div class="bullet_item">
                      <img class="bullet_item_check"  src="{{ asset('img/new-check.png') }}"><div class="bullet_item_text">Обработка изделия: огне-биозащитой 
Неомид, антисептиком Неомид 
и специальными защитными пропитками</div>
                  </div>
                
                </div>

              </div>



              
            </div>
          </div>
    </div>

 <div class="footer-print only-print">



      <div class="row">


        <div class="col-md-5 mt-3 ">
          <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt=""  height="72">
        </div>
        <div class="col-md-45 mt-3 ">
           <div style="width:100%">
                <img src="{{ asset('img/kdf-kvadrat.jpg') }}" id="manager_photo" class="manager-phone manager_photo">
                <h6 class="my-0 manager_name" id="manager_name">Краснодарская деревообрабатывающая фабрика</h6>
                <small class="text-muted"><span class="manager_dolgnost" id="manager_dolgnost"></span></small>
              </div>
            
        </div>

        <div class="col-md-2 col-md-25 mt-3 ">
         
            
            <div style="width:100%">
               
                  <span class="manager_phone"  id="manager_phone">8 (961) 525-06-46</span><br class="br-print"/>
                <span class="manager_email"  id="manager_email">info@fabrika23.ru</span></small>
              </div>
             

        </div>
        
      </div>


      


     
</div>

<div class="row only-print mt-1">


        <div class="col-md-12 " style="text-align: right; margin-right: 20px;">
          <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf"><img style="width:24px;" src="img/icon-www.png"></a> <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf">fabrika23.ru</a>
         
           <a class="footer-link"  href="https://www.instagram.com/fabrika23/"><img style="width:24px;" src="img/icon-instagram.png"></a>
           <a class="footer-link"  href="https://www.instagram.com/fabrika23/">@fabrika23</a>
          <a class="footer-link"  href="https://vk.com/kdf23/"><img style="width:24px;" src="img/icon-vk.png"></a>
           <a class="footer-link"  href="https://vk.com/kdf23/">@kdf23</a>
           
            <a class="footer-link"  href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A"><img style="width:24px;" src="img/icon-youtube.png"></a>
            <a class="footer-link"  href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A">@Фабрика23</a>
        </div>
        
      </div>



    <div class="page-break"></div>
      
<div class="only-print">
      
       <div class="row">

        <div class="col-md-4  ">
          <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt=""  height="72">
        </div>
        <div class="col-md-4  ">
         
        </div>

        <div class="col-md-4 ">
          <p class="d-block mx-auto special-date only-print">Предложение действительно<br/>
до <span class="client_date">23 октября 2021</span></p>
        </div>
        
      </div>

</div>

      <div class="row">


        <div class="col-md-6 order-md-1 no-print">
          <h4 class="mb-3">Выберите продукт</h4>

              <div class="d-block my-3">


             
              <div class="custom-control custom-radio">
                <input id="bochka22" name="product" type="radio" class="custom-control-input js-product"  checked="" required="" value="баня-бочка 2.2м с козырьком" data-key="bochka22" data-price="192000" data-type="bochka"  data-dlina="2,2" data-razmer="2"  data-price-el="192000"   data-price-kedr="222400"   data-img1="bochka22_1.jpg"  data-img2="bochka22_2.jpg"> 
                <label class="custom-control-label" for="bochka22">баня-бочка 2.2м с козырьком <span class="text-muted">- от 192000 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka3" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 3м с козырьком" data-key="bochka3" data-price="245400" data-type="bochka"  data-dlina="3" data-razmer="3"  data-price-el="245400"   data-price-kedr="282500"   data-img1="bochka3_1.jpg"  data-img2="bochka3_2.jpg"> 
                <label class="custom-control-label" for="bochka3">баня-бочка 3м с козырьком <span class="text-muted">- от 245400 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka35" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 3.5м с козырьком" data-key="bochka35" data-price="264000" data-type="bochka"  data-dlina="3,5" data-razmer="35"  data-price-el="264000"   data-price-kedr="304000"   data-img1="bochka35_1.jpg"  data-img2=""> 
                <label class="custom-control-label" for="bochka35">баня-бочка 3.5м с козырьком <span class="text-muted">- от 264000 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka4" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 4м с козырьком" data-key="bochka4" data-price="314000" data-type="bochka"  data-dlina="4" data-razmer="4"  data-price-el="314000"   data-price-kedr="351800"   data-img1="bochka4_1.jpg"  data-img2="bochka4_2.jpg"> 
                <label class="custom-control-label" for="bochka4">баня-бочка 4м с козырьком <span class="text-muted">- от 314000 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka4k" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 4м с крыльцом 1м" data-key="bochka4k" data-price="339900" data-type="bochka"  data-dlina="4" data-razmer="4"  data-price-el="339900"   data-price-kedr="380600"   data-img1="bochka4k_1.jpg"  data-img2="bochka4k_2.jpg"> 
                <label class="custom-control-label" for="bochka4k">баня-бочка 4м с крыльцом 1м <span class="text-muted">- от 339900 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka5" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 5м с козырьком" data-key="bochka5" data-price="338600" data-type="bochka"  data-dlina="5" data-razmer="5"  data-price-el="338600"   data-price-kedr="395800"   data-img1="bochka5_1.jpg"  data-img2="bochka5_2.jpg"> 
                <label class="custom-control-label" for="bochka5">баня-бочка 5м с козырьком <span class="text-muted">- от 338600 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka5s" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 5м с козырьком (3 секции)" data-key="bochka5s" data-price="356400" data-type="bochka"  data-dlina="5" data-razmer="5"  data-price-el="356400"   data-price-kedr="415800"   data-img1="bochka5s_1.jpg"  data-img2=""> 
                <label class="custom-control-label" for="bochka5s">баня-бочка 5м с козырьком (3 секции) <span class="text-muted">- от 356400 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="bochka6" name="product" type="radio" class="custom-control-input js-product"   required="" value="баня-бочка 6м с козырьком" data-key="bochka6" data-price="420500" data-type="bochka"  data-dlina="6" data-razmer="6"  data-price-el="420500"   data-price-kedr="462900"   data-img1="bochka6_1.jpg"  data-img2="bochka6_2.jpg"> 
                <label class="custom-control-label" for="bochka6">баня-бочка 6м с козырьком <span class="text-muted">- от 420500 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro22" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 2.2м с козырьком" data-key="kvadro22" data-price="227700" data-type="kvadro"  data-dlina="2" data-razmer="2"  data-price-el="227700"   data-price-kedr="258000"   data-img1="kvadro22_1.jpg"  data-img2="kvadro22_2.jpg"> 
                <label class="custom-control-label" for="kvadro22">квадро-баня 2.2м с козырьком <span class="text-muted">- от 227700 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro3" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 3м с козырьком" data-key="kvadro3" data-price="276800" data-type="kvadro"  data-dlina="3" data-razmer="3"  data-price-el="276800"   data-price-kedr="313400"   data-img1="kvadro3_1.jpg"  data-img2="kvadro3_2.jpg"> 
                <label class="custom-control-label" for="kvadro3">квадро-баня 3м с козырьком <span class="text-muted">- от 276800 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro35" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 3.5м с козырьком" data-key="kvadro35" data-price="297000" data-type="kvadro"  data-dlina="3,5" data-razmer="35"  data-price-el="297000"   data-price-kedr="336400"   data-img1="kvadro35_1.jpg"  data-img2="kvadro35_2.jpg"> 
                <label class="custom-control-label" for="kvadro35">квадро-баня 3.5м с козырьком <span class="text-muted">- от 297000 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro4" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 4м с козырьком" data-key="kvadro4" data-price="347900" data-type="kvadro"  data-dlina="4" data-razmer="4"  data-price-el="347900"   data-price-kedr="395900"   data-img1="kvadro4_1.jpg"  data-img2="kvadro4_2.jpg"> 
                <label class="custom-control-label" for="kvadro4">квадро-баня 4м с козырьком <span class="text-muted">- от 347900 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro5" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 5м с козырьком" data-key="kvadro5" data-price="375300" data-type="kvadro"  data-dlina="5" data-razmer="5"  data-price-el="375300"   data-price-kedr="432000"   data-img1="kvadro5_1.jpg"  data-img2=""> 
                <label class="custom-control-label" for="kvadro5">квадро-баня 5м с козырьком <span class="text-muted">- от 375300 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro5s" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 5м с козырьком (3 секции)" data-key="kvadro5s" data-price="389000" data-type="kvadro"  data-dlina="5" data-razmer="5"  data-price-el="389000"   data-price-kedr="443000"   data-img1="kvadro5s_1.jpg"  data-img2="kvadro5s_2.jpg"> 
                <label class="custom-control-label" for="kvadro5s">квадро-баня 5м с козырьком (3 секции) <span class="text-muted">- от 389000 руб.</span></label>
              </div>

              
              <div class="custom-control custom-radio">
                <input id="kvadro6" name="product" type="radio" class="custom-control-input js-product"   required="" value="квадро-баня 6м с козырьком" data-key="kvadro6" data-price="456000" data-type="kvadro"  data-dlina="6" data-razmer="6"  data-price-el="456000"   data-price-kedr="513300"   data-img1="kvadro6_1.jpg"  data-img2="kvadro6_2.jpg"> 
                <label class="custom-control-label" for="kvadro6">квадро-баня 6м с козырьком <span class="text-muted">- от 456000 руб.</span></label>
              </div>

               

            </div>
          
          <hr class="mb-4">
           
          <h4 class="mb-3">Выберите материал</h4> 
          <div class="row" >
              <div class="col-md-6 mb-3">
            <div class="custom-control custom-radio">
              <input type="radio" checked="" name="product_material" class="custom-control-input js-product-material" id="material-el"  value="el">
              <label class="custom-control-label" for="material-el">Ель</label>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_material" class="custom-control-input  js-product-material" id="material-kedr" value="kedr">
              <label class="custom-control-label" for="material-kedr">Кедр</label>
            </div>
          </div>
        </div>

           <hr class="mb-4">
           
          <h4 class="mb-3">Увеличение</h4> 
          <div class="row" >
          <div class="col-md-3 mb-3">
            <div class="custom-control custom-radio">

               


              <input type="radio" checked=""  name="product_rash" class="custom-control-input js-product-rash" id="rash0"  value="0"

              >
              <label class="custom-control-label" for="rash0">Нет</label>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash23"  data-name="до 2.3м" value="23" 
               data-bochka-2="6800" data-bochka-3="8550" data-bochka-35="9150" data-bochka-4="10850" data-bochka-5="12400" data-bochka-6="14700" data-bochka_kedr-2="6800" data-bochka_kedr-3="8550" data-bochka_kedr-35="9150" data-bochka_kedr-4="10850" data-bochka_kedr-5="12400" data-bochka_kedr-6="14700" data-kvadro-2="7950" data-kvadro-3="9750" data-kvadro-35="10350" data-kvadro-4="12100" data-kvadro-5="13500" data-kvadro-6="15900" data-kvadro_kedr-2="7950" data-kvadro_kedr-3="9750" data-kvadro_kedr-35="10350" data-kvadro_kedr-4="12100" data-kvadro_kedr-5="13500" data-kvadro_kedr-6="15900"  
              >
              <label class="custom-control-label" for="rash23">до 2.3м</label>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash24" data-name="до 2.4м" value="24" 
               data-bochka-2="8150" data-bochka-3="10250" data-bochka-35="11000" data-bochka-4="13000" data-bochka-5="14850" data-bochka-6="17650" data-bochka_kedr-2="8150" data-bochka_kedr-3="10250" data-bochka_kedr-35="11000" data-bochka_kedr-4="13000" data-bochka_kedr-5="14850" data-bochka_kedr-6="17650" data-kvadro-2="9550" data-kvadro-3="11700" data-kvadro-35="12400" data-kvadro-4="14500" data-kvadro-5="16200" data-kvadro-6="19050" data-kvadro_kedr-2="9550" data-kvadro_kedr-3="11700" data-kvadro_kedr-35="12400" data-kvadro_kedr-4="14500" data-kvadro_kedr-5="16200" data-kvadro_kedr-6="19050" 
              >
              <label class="custom-control-label" for="rash24">до 2.4м</label>
            </div>
          </div>


 <div class="col-md-3 mb-3 ">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash25" data-name="до 2.5м" value="25" 
               data-bochka-5="28700" data-bochka-6="31500" data-kvadro-5="30050" data-kvadro-6="32950" data-kvadro_kedr-5="30050" data-kvadro_kedr-6="35550" 
              >
              <label class="custom-control-label" for="rash25">до 2.5м</label>
            </div>
          </div>


 <div class="col-md-3 mb-3 dopitem6">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash26" data-name="до 2.6м" value="26" 
               data-kvadro-6="40850" data-kvadro_kedr-6="46050" 
              >
              <label class="custom-control-label" for="rash26">до 2.6м</label>
            </div>
          </div>




 <div class="col-md-3 mb-3 dopitem6">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash27" data-name="до 2.7м" value="27" 
               data-kvadro-6="48750" data-kvadro_kedr-6="56550" 
              >
              <label class="custom-control-label" for="rash27">до 2.7м</label>
            </div>
          </div>



 <div class="col-md-3 mb-3 dopitem6">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash28" data-name="до 2.8м" value="28" 
               data-kvadro-6="56650" data-kvadro_kedr-6="67050" 
              >
              <label class="custom-control-label" for="rash28">до 2.8м</label>
            </div>
          </div>



 <div class="col-md-3 mb-3 dopitem6">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash29" data-name="до 2.9м" value="29" 
               data-kvadro-6="64550" data-kvadro_kedr-6="77550" 
              >
              <label class="custom-control-label" for="rash29">до 2.9м</label>
            </div>
          </div>



 <div class="col-md-3 mb-3 dopitem6">
            <div class="custom-control custom-radio">
              <input type="radio" name="product_rash" class="custom-control-input  js-product-rash" id="rash30" data-name="до 3.0м" value="30" 
               data-kvadro-6="72450" data-kvadro_kedr-6="88050" 
              >
              <label class="custom-control-label" for="rash30">до 3.0м</label>
            </div>
          </div>


        </div>

       


          <hr class="mb-4">
           <h4 class="mb-3" >Дополнительные опции</h4>
           <div class="dopoption">


             <input type="text" name="name_client" id="name_client" class="form-control js-km" placeholder="Имя клиента в род. падеже, например Егора Николаевича"><br/>


                                                 <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop21" value="dop2" data-price="2850" data-name="Окно маленькое (30х40)">

           

              <label class="custom-control-label" for="dop21">Окно маленькое (30х40) <span class="text-muted">- 2850 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop31" value="dop3" data-price="4050" data-name="Окно среднее (64х94)">

           

              <label class="custom-control-label" for="dop31">Окно среднее (64х94) <span class="text-muted">- 4050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop311" value="dop31" data-price="6050" data-name="Окно большое глухое (70х150)">

           

              <label class="custom-control-label" for="dop311">Окно большое глухое (70х150) <span class="text-muted">- 6050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop41" value="dop4" data-price="2680" data-name="Окно на дверь в парилку (30х30)">

           

              <label class="custom-control-label" for="dop41">Окно на дверь в парилку (30х30) <span class="text-muted">- 2680 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop51" value="dop5" data-price="25750" data-name="Панорамное окно в пол стены">

           

              <label class="custom-control-label" for="dop51">Панорамное окно в пол стены <span class="text-muted">- 25750 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop61" value="dop6" data-price="8050" data-name="Стеклянная дверь в парилку">

           

              <label class="custom-control-label" for="dop61">Стеклянная дверь в парилку <span class="text-muted">- 8050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop611" value="dop61" data-price="7780" data-name="Обливное устройство">

           

              <label class="custom-control-label" for="dop611">Обливное устройство <span class="text-muted">- 7780 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop621" value="dop62" data-price="5500" data-name="Оцинкованный защитный лист на минерит внутри парной">

           

              <label class="custom-control-label" for="dop621">Оцинкованный защитный лист на минерит внутри парной <span class="text-muted">- 5500 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop631" value="dop63" data-price="2000" data-name="Оцинкованный защитный лист на минерит снаружи парной">

           

              <label class="custom-control-label" for="dop631">Оцинкованный защитный лист на минерит снаружи парной <span class="text-muted">- 2000 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop71" value="dop7" data-price="5360" data-name="Печь сбоку (баня-бочка)">

           

              <label class="custom-control-label" for="dop71">Печь сбоку (баня-бочка) <span class="text-muted">- 5360 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop81" value="dop8" data-price="4050" data-name="Печь сбоку (квадро-баня)">

           

              <label class="custom-control-label" for="dop81">Печь сбоку (квадро-баня) <span class="text-muted">- 4050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop91" value="dop9" data-price="2680" data-name="Печь в углу с топкой в комнату отдыха">

           

              <label class="custom-control-label" for="dop91">Печь в углу с топкой в комнату отдыха <span class="text-muted">- 2680 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop101" value="dop10" data-price="4050" data-name="Стеклянная дверца на печь">

           

              <label class="custom-control-label" for="dop101">Стеклянная дверца на печь <span class="text-muted">- 4050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop121" value="dop12" data-price="26600" data-name="Душ ПОД КЛЮЧ (душевой поддон, смеситель, лейка, бойлер и сантехнич. разводка)">

           

              <label class="custom-control-label" for="dop121">Душ ПОД КЛЮЧ (душевой поддон, смеситель, лейка, бойлер и сантехнич. разводка) <span class="text-muted">- 26600 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop131" value="dop13" data-price="12100" data-name="Душ ПОД КЛЮЧ без бойлера (душевой поддон, смеситель, лейка и сантехническая разводка)">

           

              <label class="custom-control-label" for="dop131">Душ ПОД КЛЮЧ без бойлера (душевой поддон, смеситель, лейка и сантехническая разводка) <span class="text-muted">- 12100 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop141" value="dop14" data-price="5400" data-name="Душевой поддон баня-бочка (70х70)">

           

              <label class="custom-control-label" for="dop141">Душевой поддон баня-бочка (70х70) <span class="text-muted">- 5400 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop161" value="dop16" data-price="3850" data-name="Душевой поддон квадро-баня (70х70)">

           

              <label class="custom-control-label" for="dop161">Душевой поддон квадро-баня (70х70) <span class="text-muted">- 3850 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop181" value="dop18" data-price="9140" data-name="Двухярусный полок в парилку">

           

              <label class="custom-control-label" for="dop181">Двухярусный полок в парилку <span class="text-muted">- 9140 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop281" value="dop28" data-price="6520" data-name="Светодиодная подсветка под полок">

           

              <label class="custom-control-label" for="dop281">Светодиодная подсветка под полок <span class="text-muted">- 6520 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop271" value="dop27" data-price="1200" data-name="Ограждение для печи">

           

              <label class="custom-control-label" for="dop271">Ограждение для печи <span class="text-muted">- 1200 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop231" value="dop23" data-price="26800" data-name="Лиственница на весь пол">

           

              <label class="custom-control-label" for="dop231">Лиственница на весь пол <span class="text-muted">- 26800 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop251" value="dop25" data-price="2000" data-name="Ступени на вход">

           

              <label class="custom-control-label" for="dop251">Ступени на вход <span class="text-muted">- 2000 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop261" value="dop26" data-price="1400" data-name="Рундук">

           

              <label class="custom-control-label" for="dop261">Рундук <span class="text-muted">- 1400 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2611" value="dop261" data-price="6050" data-name="Кровать в комнате отдыха">

           

              <label class="custom-control-label" for="dop2611">Кровать в комнате отдыха <span class="text-muted">- 6050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2621" value="dop262" data-price="5460" data-name="Подспинники из липы в парной">

           

              <label class="custom-control-label" for="dop2621">Подспинники из липы в парной <span class="text-muted">- 5460 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2631" value="dop263" data-price="2450" data-name="Шкаф для бойлера">

           

              <label class="custom-control-label" for="dop2631">Шкаф для бойлера <span class="text-muted">- 2450 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2641" value="dop264" data-price="4050" data-name="Трапик из лиственницы">

           

              <label class="custom-control-label" for="dop2641">Трапик из лиственницы <span class="text-muted">- 4050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2651" value="dop265" data-price="7120" data-name="Перегородка для душевого отделения в банях 3,5 м и 4 м">

           

              <label class="custom-control-label" for="dop2651">Перегородка для душевого отделения в банях 3,5 м и 4 м <span class="text-muted">- 7120 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2661" value="dop266" data-price="2400" data-name="Сантехническая разводка">

           

              <label class="custom-control-label" for="dop2661">Сантехническая разводка <span class="text-muted">- 2400 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop191" value="dop19" data-price="24200" data-name="Крыльцо на баню-бочку (1000х2100)">

           

              <label class="custom-control-label" for="dop191">Крыльцо на баню-бочку (1000х2100) <span class="text-muted">- 24200 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop201" value="dop20" data-price="26800" data-name="Крыльцо на квадро-баню (1000х2100)">

           

              <label class="custom-control-label" for="dop201">Крыльцо на квадро-баню (1000х2100) <span class="text-muted">- 26800 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop211" value="dop21" data-price="10770" data-name="Дверь сбоку на баню-бочку">

           

              <label class="custom-control-label" for="dop211">Дверь сбоку на баню-бочку <span class="text-muted">- 10770 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop221" value="dop22" data-price="8050" data-name="Дверь сбоку на квадро-баню">

           

              <label class="custom-control-label" for="dop221">Дверь сбоку на квадро-баню <span class="text-muted">- 8050 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop241" value="dop24" data-price="30000" data-name="Сборка на участке  (Баня-бочка)">

           

              <label class="custom-control-label" for="dop241">Сборка на участке  (Баня-бочка) <span class="text-muted">- 30000 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2411" value="dop241" data-price="36000" data-name="Сборка на участке  (Квадро-баня)">

           

              <label class="custom-control-label" for="dop2411">Сборка на участке  (Квадро-баня) <span class="text-muted">- 36000 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2431" value="dop243" data-price="9660" data-name="Лаги из лиственницы">

           

              <label class="custom-control-label" for="dop2431">Лаги из лиственницы <span class="text-muted">- 9660 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2441" value="dop244" data-price="33800" data-name="Отделка парной липой">

           

              <label class="custom-control-label" for="dop2441">Отделка парной липой <span class="text-muted">- 33800 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop2991" value="dop299" data-price="7000" data-name="Доставка на Манипуляторе по городу Краснодару и в пределах 35км">

           

              <label class="custom-control-label" for="dop2991">Доставка на Манипуляторе по городу Краснодару и в пределах 35км <span class="text-muted">- 7000 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop291" value="dop29" data-price="150" data-name="Доставка на манипуляторе">

           

              <label class="custom-control-label" for="dop291">Доставка на манипуляторе <span class="text-muted">- 150 руб.</span></label>
            

               


            </div>

               
                                          <div class="custom-control custom-checkbox">
                
         
               
              <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop301" value="dop30" data-price="70" data-name="Доставка под сборку на участке">

           

              <label class="custom-control-label" for="dop301">Доставка под сборку на участке <span class="text-muted">- 70 руб.</span></label>
            

               


            </div>

               
                 
               <div class="input-group">
              <input type="text" name="km" id="km" class="form-control js-km" placeholder="километров">
          
            </div>

          </div>



           
      
          <!-- <hr class="mb-4">  
          <h4 class="mb-3">Контактные данные клиента</h4>
          <form class="needs-validation" novalidate="">
            <div class="mb-3">
              <label for="name">ФИО <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="name" id="name" placeholder="">
            </div>

           <div class="mb-3">
              <label for="address2">Телефон<span class="text-muted"></span></label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="" required="">
            </div>


            <div class="mb-3">
              <label for="address">Адрес установки</label>
              <input type="text" class="form-control" id="address" placeholder="" >
              <div class="invalid-feedback">
                
              </div>
            </div>  -->

          <!--   <div class="mb-3">
              <label for="email">Email <span class="text-muted">(по желанию)</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

         
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Сохранить расчет</button>

               -->


             

          </form>

          
          <form class="needs-validation card p-2 no-print mb-3 mt-3" novalidate="" >
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
                <h6 class="my-0 hide-item" id="product_name">Баня-бочка 2.2м с козырьком</h6>
                <small class="text-muted hide-item">Материал: <span id="product_material">Ель</span></small>
                <p class="product_name">Экологичная <span class="js_product_name">баня-бочка 2.2м</span> 
                из массива <span class="product_material">ели</span></p>
              </div>
              <span class="text-muted js_product_price" id="product_price">135400 руб.</span>
            </li>
            
            
            </ul>


<h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted dop-item  dops-item hide-item"  >Дополнительные опции</span>
          
          </h4>

          <ul class="list-group list-striped mb-3 print_full dop-item rash-item "><li class="list-group-item d-flex justify-content-between lh-condensed"> <div><h6 class="my-0">Увеличение <span id="product_rash"></span></h6>                <small class="text-muted"></small>              </div><span class="text-muted" id="product_rash_price">0 руб.</span>            </li></ul>


          <ul class="list-group list-group-dop mb-3 print_full dops-item hide-item" id="list_dop">
            
          </ul>



             <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Итого</span>
          
          </h4>
            <ul class="list-group print_full mb-3">
            
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Стоимость комплекта</span>
              <strong  id="summa_complect"></strong>
            </li>
            <li class="list-group-item d-flex justify-content-between text-success">
              <span>Экономия на опциях в комплекте</span>
              <strong  id="summa_economy"></strong>
            </li>
             <li class="list-group-item d-flex justify-content-between  hide-item dop-item" >
              <span>Стоимость доп. опций</span>
              <strong id="summa_dop"></strong>
            </li>
            <li class="list-group-item d-flex li-big justify-content-between" style="background: #f5f6fa;">
              <span>Итого</span>
              <strong  id="summa_itogo"></strong>
            </li>
          
            <li class="list-group-item d-flex hide-item item-promo justify-content-between bg-white" >
              <div class="text-success">
                <!-- <span>Скидка -<span id="promo"></span>% действительна до 3-х дней</span> -->
                <span>Скидка действительна до 3-х дней</span>
              
              </div>
              <span  id="summa_promo">0 руб.</span>
            </li>


            <li class="list-group-item d-flex hide-item item-promo justify-content-between"  >
              <span>Итого со скидкой</span>
              <strong  id="summa_itogo_promo">192 000 руб.</strong>
            </li>
          </ul>

          <form class="card p-2 no-print mb-3">
            <div class="input-group">
              <input type="text" name="promocod" class="form-control js-promo" placeholder="Промокод" >
             <!--  <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Применить</button>
              </div> -->
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

          <div class="col-md-12 mb-3 print-manager">
                <label for="country" class=" no-print">Инженер проекта</label>
                <select class="custom-select d-block js-manager  no-print"  id="manager" required="">
                  <option value="0">Выберите</option>

                  
                    <option value="Краснодарская<br/>деревообрабатывающая фабрика" data-phone="8 (961) 525-06-46" data-name="Краснодарская<br/>деревообрабатывающая фабрика"  data-dolgnost=""  data-img="img/кдф-квадрат.jpg" data-email="info@fabrika23.ru" >Краснодарская<br/>деревообрабатывающая фабрика</option>
                
                    <option value="Андрей Адарьев" data-phone="8 (928) 400 49 88" data-name="Андрей Адарьев"  data-dolgnost="Инженер проектов"  data-img="img/andreev_a.jpg" data-email="adarev.andrey@fabrika23.ru" >Андрей Адарьев</option>
                
                    <option value="Сысуев Илья Сергеевич" data-phone="8 (978) 995 10 85" data-name="Сысуев Илья Сергеевич"  data-dolgnost="Руководитель инженерного отдела"  data-img="img/sisuev_i.jpg" data-email="Susyev.ilya@fabrika23.ru" >Сысуев Илья Сергеевич</option>
                
                    <option value="Смиренская Марина Александровна" data-phone="8 (978) 994 91 60" data-name="Смиренская Марина Александровна"  data-dolgnost="Инженер проектов"  data-img="img/smirenskaya_m.jpg" data-email="smirenskaya.marina@fabrika23.ru" >Смиренская Марина Александровна</option>
                
                    <option value="Макурин Александр" data-phone="8 (928) 407 39 51" data-name="Макурин Александр"  data-dolgnost="Инженер проектов"  data-img="img/makurin_a.jpg" data-email="makurin.a@fabrika23.ru" >Макурин Александр</option>
                
                    <option value="Энтин Дмитрий" data-phone="8 (928) 037 01 87 " data-name="Энтин Дмитрий"  data-dolgnost="Инженер проектов"  data-img="img/entin_d.jpg" data-email="entin.dmitriy@fabrika23.ru" >Энтин Дмитрий</option>
                
                    <option value="Ломаев Дмитрий" data-phone="8 (978) 994 91 93" data-name="Ломаев Дмитрий"  data-dolgnost="Инженер проектов"  data-img="img/кдф-квадрат.jpg" data-email="" >Ломаев Дмитрий</option>
                
                    <option value="Расторгуев Роман" data-phone="8 (928) 215 31 46" data-name="Расторгуев Роман"  data-dolgnost="Инженер проектов"  data-img="img/rastorguev_r.jpg" data-email="" >Расторгуев Роман</option>
                                </select>
                
            </div>


          <ul class="list-group mb-3 box-manager hide-item no-print" id="">
            <li class="list-group-item d-flex justify-content-between lh-condensed print_full">
              <div style="width:100%">
                <!-- <img src="../images/кдф-саша-квадрат.jpg" id="manager_photo" class="manager-phone manager_photo"> -->
                
                <h6 class="my-0 manager_name" id="manager_name">Зуйков Александр Сергеевич</h6>
                <small class="text-muted"><span class="manager_dolgnost"  id="manager_dolgnost">Инженер проекта</span><br/>
                  <span class="manager_phone" id="manager_phone">8 (928) 400-49-88</span><br class="br-print"/>
                <span class="manager_email" id="manager_email">al.zyikov@fabrika23.ru</span></small>
              </div>
            </li>
            
            
            </ul>

            <ul class="list-inline no-print">
          <li class="list-inline-item"><a style="cursor: pointer;" onclick="window.print()">Распечатать</a></li>
          <li class="list-inline-item"><a  style="cursor: pointer;"  onclick="window.print()">Сохранить PDF / Предпросмотр</a></li>
        </ul>




        </div>


      </div>

       <div class="footer-print only-print">



      <div class="row">


        <div class="col-md-5 mt-3 ">
          <img class="d-block  logo" src="{{ asset('img/kdf-new-logo.svg') }}" alt=""  height="72">
        </div>
        <div class="col-md-45 mt-3 ">
           <div style="width:100%">
                <img src="{{ asset('img/kdf-kvadrat.jpg') }}" id="manager_photo" class="manager-phone manager_photo">
                <h6 class="my-0 manager_name" id="manager_name">Краснодарская деревообрабатывающая фабрика</h6>
                <small class="text-muted"><span class="manager_dolgnost" id="manager_dolgnost"></span></small>
              </div>
            
        </div>

        <div class="col-md-2 col-md-25 mt-3 ">
         
            
            <div style="width:100%">
               
                  <span class="manager_phone"  id="manager_phone">8 (961) 525-06-46</span><br class="br-print"/>
                <span class="manager_email"  id="manager_email">info@fabrika23.ru</span></small>
              </div>
             

        </div>
        
      </div>

     
</div>


<div class="row only-print mt-1">


        <div class="col-md-12 " style="text-align: right; margin-right: 20px;">
          <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf"><img style="width:24px;" src="{{ asset('img/icon-www.png') }}"></a> <a class="footer-link" href="https://fabrika23.ru?utm_source=kp_pdf">fabrika23.ru</a>
         
           <a class="footer-link"  href="https://www.instagram.com/fabrika23/"><img style="width:24px;" src="{{ asset('img/icon-instagram.png') }}"></a>
           <a class="footer-link"  href="https://www.instagram.com/fabrika23/">@fabrika23</a>
          <a class="footer-link"  href="https://vk.com/kdf23/"><img style="width:24px;" src="{{ asset('img/icon-vk.png') }}"></a>
           <a class="footer-link"  href="https://vk.com/kdf23/">@kdf23</a>
           
            <a class="footer-link"  href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A"><img style="width:24px;" src="{{ asset('img/icon-youtube.png') }}"></a>
            <a class="footer-link"  href="https://www.youtube.com/channel/UC36zTYfbqT8i9zDBsTKW37A">@Фабрика23</a>
        </div>
        
      </div>


   <!--    <footer class="my-5 pt-5 text-muted text-center text-small text-policy">
        <p class="mb-1">Краснодар, Тургеневское ш. 2<br/>
Крым, г.Симферополь, ул.Евпаторийская, 125 (территория ТЦ "METRO")<br/> © Краснодарская деревообрабатывающая фабрика.</p>
      
      </footer> -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/holder.min.js') }}"></script>
    <script>

      $(function(){

        calc();
        var $product_material_id;
        var $product_name;
        var $product_price;
        var  $product_material;

var x;
var m_names = new Array("Января", "Февраля", "Марта", 
    "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", 
    "Октября", "Ноября", "Декабря");

var d = new Date();
d.setDate(d.getDate() + 3);
console.log(d.toString());

var curr_day = d.getDate();
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
var date_3 = curr_day + " " + m_names[curr_month] + " " + curr_year;

$('.client_date').html(date_3);



    $('.js-product').change(function(){
        calc();
    });    

    $('.js-product-material').change(function(){
        calc();
    });   

    $('.js-dop').change(function(){
        calc();
    });  

    $('.js-product-rash').change(function(){
        calc();
    });  


    $('.js-manager').change(function(){
     
        if ($(this).val()!='0') {
            $('.box-manager').removeClass('hide-item');

          $manager_data = $(".js-manager option:selected");

          $('.manager_name').html($manager_data.data('name'));
        $('.manager_dolgnost').html($manager_data.data('dolgnost'));
        $('.manager_photo').attr('src',$manager_data.data('img'));
        $('.manager_phone').html($manager_data.data('phone'));
        $('.manager_email').html($manager_data.data('email'));

        } else {
          $('.box-manager').addClass('hide-item');
        }

  

    }); 

    $('.js-installment').change(function() {
        calc();
    }); 



     $(document).on('click', '.js-add-dop', function(){
        
        $dop = $('#adddop').val();
        $price = $('#addprice').val();
        $date = Date.now();
      
        $addstr = '<div class="custom-control custom-checkbox">\
                <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop_'+$date+'" value="dop_'+$date+'" data-price="'+$price+'" data-name="'+$dop+'">\
                  <label class="custom-control-label" for="dop_'+$date+'">'+$dop+' <span class="text-muted">- '+$price+' руб.</span></label>\
            </div>';

            $('.dopoption').append($addstr);
            $('#dop_'+$date+'').prop('checked','true');
            calc();


        $('#adddop').val('');
        $('#addprice').val('');

   //}
        
        // $('#box-result'+$id).addClass('is-hidden');
  
   });



    $('.js-promo').on('input', function() {
             calc();
    }); 

    $('.js-km').on('input', function() {
             calc();
    }); 
    
//    $('#countdop2981').on('input', function() {
//             calc();
//    }); 

});



      function calc() {


        $('.dopitem6').css('opacity', '0.5');
        $('.dopitem6').find('input').prop("disabled", true);
   

        $product_material = 'Ель';
        $product_material_new = 'ели';
        $product_material_id = 'el';
        $product_material_rash = '';

        $product_material_id = $('input[name=product_material]:checked').val();

         if ($product_material_id=='kedr') {
          $product_material = 'Кедр';
          $product_material_new = 'кедра';
          $product_material_rash = 'kedr';
      } 

      if ($product_material_id=='el') {
          $product_material = 'Ель';
          $product_material_rash = '';
      } 


        //$('#product_price').html($product_price);
        $('#product_material').html($product_material);
        $('.product_material').html($product_material_new);
        $km = Number($('#km').val());

         $name_client = $('#name_client').val();
         if ($name_client!='') {
         $('.client_name').html('для '+$name_client);
         }


        
        //$obvyazka = Number($('#countdop2981').val());
         $product = $('input[name=product]:checked');

          $product_name = $product.val();




          if ($product_name=='квадро-баня 6м с козырьком') { $('.dopitem6').css('opacity', '1'); 
          $('.dopitem6').find('input').prop("disabled", false);
           }
          $product_price = $product.data('price-'+$product_material_id);
          $product_type = $product.data('type');
          $product_razmer = $product.data('razmer');
          
          $product_img1 = $product.data('img1');
          $product_img2 = $product.data('img2');

          // if ($product_img2=='') {
          //   $product_img2 = 'transparent.png';
          // }

       
          $('.js_product_img1').attr('src','img/'+$product_img1);
          
          if ($product_img2=='') {
            $('.js_product_img2').hide();
          } else {
            $('.js_product_img2').show();
          $('.js_product_img2').attr('src','img/'+$product_img2);
          }


          $product_dlina = $product.data('dlina');
          $('.product_dlina').html($product_dlina);

          $product_key = $product.data('key');
          $('.sostav_block').hide();
          $('.dop_baza_block').hide();
          $('.sostav_block.'+$product_key).show();

         
           
          

          $('.rash-item').addClass('hide-item');
          $product_rash = $('input[name=product_rash]:checked');

           if ($product_material_id=='kedr') {
            $product_type = $product_type+'_kedr';
          }

          $rash_price = Number($product_rash.data($product_type+'-'+$product_razmer));

          if ($product_rash.val()!='0') {

            $('#product_rash').html($product_rash.data('name').toLocaleString('ru') );

            $('#product_rash_price').html($rash_price.toLocaleString('ru')+' руб.' );
            $('.rash-item').removeClass('hide-item');

          } else {
            $('#product_rash').html('');
            $('#product_rash_price').html('');
            $('.rash-item').addClass('hide-item');
            $rash_price = 0;
          }
        

        $('#product_name').html($product_name);
         $('.js_product_name').html($product_name);

        $('#product_price').html(($product_price.toLocaleString('ru'))+' руб.');
        $('.js_product_price').html(($product_price.toLocaleString('ru'))+' руб.');
      
        $('#product_material').html($product_material);

        $summa_dop = 0;
        $price_dost = 0;

        $("#list_dop").html('');

        $('input[name=dop]:checked').each(function(){

              
              $price_dop = Number($(this).data('price'));

              $name_dop = $(this).data('name');

              console.log($(this).val());
              if ($(this).val()=='dop29') {
                  $price_dop = Number($(this).data('price'))*$km;
                  $name_dop = 'Доставка '+$km+' км. на манипуляторе';
                  $price_dost = Number($(this).data('price'))*$km;
              }

              if ($(this).val()=='dop30') {
                  $price_dop = Number($(this).data('price'))*$km;
                  $name_dop = 'Доставка '+$km+' км. под сборку на участке';
                  $price_dost = Number($(this).data('price'))*$km;
              }
              
            //  if ($(this).val()=='dop298') {
            //      $price_dop = Number($(this).data('price'))*$obvyazka;
            //      $name_dop = 'Обвязка брусом 100х150 '+$obvyazka+' п.м.';
            //      $price_dost = Number($(this).data('price'))*$obvyazka;
            //  }

              $summa_dop += $price_dop;



              $("ul#list_dop").append(" <li class='list-group-item d-flex justify-content-between lh-condensed'> <div><h6 class='my-0'>"+ $name_dop+"</h6>\
                <small class='text-muted'></small>\
              </div><span class='text-muted'>"+ $price_dop+" руб.</span>\
            </li>");
          
        });

        $summa_itogo = $summa_dop + $product_price +$rash_price;

        $summa_economy = Number($('#economy').html());

        $summa_complect = $product_price+$summa_economy;


        if ($summa_dop==0) {
          $('.dops-item').addClass('hide-item');
          $('.dop-item').addClass('hide-item');
        } else {
          $('.dops-item').removeClass('hide-item');
          $('.dop-item').removeClass('hide-item');
        }


        $('#summa_dop').html($summa_dop.toLocaleString('ru')+' руб.');
        $('#summa_itogo').html($summa_itogo.toLocaleString('ru')+' руб.');

        $('#summa_economy').html('-'+$summa_economy.toLocaleString('ru')+' руб.');
        $('#summa_complect').html($summa_complect.toLocaleString('ru')+' руб.');


        $promo = Number($('.js-promo').val());
        $summa_promo = 0;
        if (($promo!='0') && ($promo!='')) {
        //$summa_promo = (($summa_itogo-$price_dost)*$promo/100);//+$rash_price
        $summa_promo = (($product_price)*$promo/100);

        $('#promo').html($promo);

        $('#summa_promo').html($summa_promo.toLocaleString('ru')+' руб.');

        $('.item-promo').removeClass('hide-item');
        
        
        $('#summa_itogo_promo').html(($summa_itogo-$summa_promo).toLocaleString('ru')+' руб.');
        //alert($('input[name="product_material"]:checked').val());
          } else {
            $('.item-promo').addClass('hide-item');
          }


         $('.list-group-standart').find('.list-group-item-baza').remove();

          $('.list-group-standart').append($('.dop_baza_block.'+$product_key).html());

        /*
          РАССРОЧКА START
        */
        
        $max_invoice_sum = 300000;  // максимальная сумма рассрочки

        $installment = $('input[name=installment]:checked').val();

        if ($installment!=0) {
            
            $('h4.installment-title').removeClass('no-print');
            $('.installment').removeClass('hide-item');

            if ($promo != '0') {
                $invoice = Math.round($summa_itogo-$summa_promo);
            } else {
                $invoice = Math.round($summa_itogo);
            }

            if ($invoice > $max_invoice_sum) {
            
                $monthly_paymen = Math.round($max_invoice_sum / $installment);
                $installment_down_payment = Math.round($invoice - $max_invoice_sum);
                
                $('#down_payment').html(($installment_down_payment) + ' руб.');
                $('#monthly_paymen').html(($monthly_paymen) + ' руб.');
                $('.down_payment').removeClass('hide-item');

            } else {

                $monthly_paymen = Math.round($invoice / $installment);

                $('.down_payment').addClass('hide-item');
                $('#monthly_paymen').html(($monthly_paymen) + ' руб.');

            }

            $('#count_month').html($installment);
            
        } else {
            
            $('.installment').addClass('hide-item');
            $('h4.installment-title').addClass('no-print');

        }


         $("title").html($product_name +' - '+ $name_client + ' - ' + ($summa_itogo-$summa_promo).toLocaleString('ru')+' руб.');

    }
        /*
          РАССРОЧКА END
        */




      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

<div class="switips-wrapper"></div></body></html>