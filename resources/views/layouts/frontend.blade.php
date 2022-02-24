<!DOCTYPE html>
<html lang="en" class="gr__getbootstrap_com">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            <div class="col-md-12">
                <p class="lead no-print">
                    @foreach (App\Models\Category::get() as $cat)
                        <a href="/calc/{{ $cat->slug }}" @if (isset($category) && $category->slug == $cat->slug) class="category-active" @endif>{{ $cat->name }}</a> | 
                    @endforeach
                </p>
            </div>
        </div>


        @yield('content')

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>


    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/holder.min.js') }}"></script>
    
    <script>
    $(function() {

        @foreach ($products as $product)

            $('#bname_' + '{{ $product->slug }}').hide();
            $('#bdescription_' + '{{ $product->slug }}').hide();
            $('#badvantages_' + '{{ $product->slug }}').hide();
            $('#battribues_' + '{{ $product->slug }}').hide();

        @endforeach


        calc();

        var $product_material_id;
        var $product_name;
        var $product_price;
        var $product_material;

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



        $('.js-product').change(function() {
            console.log('change..');
            calc();
        });

        $('.js-product-material').change(function() {
            calc();
        });

        $('.js-dop').change(function() {
            calc();
        });

        $('.js-product-rash').change(function() {
            calc();
        });


        $('.js-manager').change(function() {

            if ($(this).val() != '0') {
                $('.box-manager').removeClass('hide-item');

                $manager_data = $(".js-manager option:selected");

                $('.manager_name').html($manager_data.data('name'));
                $('.manager_dolgnost').html($manager_data.data('dolgnost'));
                $('.manager_photo').attr('src', $manager_data.data('img'));
                $('.manager_phone').html($manager_data.data('phone'));
                $('.manager_email').html($manager_data.data('email'));

            } else {
                $('.box-manager').addClass('hide-item');
            }



        });

        $('.js-installment').change(function() {
            calc();
        });



        $(document).on('click', '.js-add-dop', function() {

            $dop = $('#adddop').val();
            $price = $('#addprice').val();
            $date = Date.now();

            $addstr = '<div class="custom-control custom-checkbox">\
                <input type="checkbox" name="dop" class="custom-control-input js-dop" id="dop_' + $date + '" value="dop_' + $date + '" data-price="' + $price + '" data-name="' + $dop + '">\
                  <label class="custom-control-label" for="dop_' + $date + '">' + $dop + ' <span class="text-muted">- ' + $price + ' руб.</span></label>\
            </div>';

            $('.dopoption').append($addstr);
            $('#dop_' + $date + '').prop('checked', 'true');
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

        if ($product_material_id == 'kedr') {
            $product_material = 'Кедр';
            $product_material_new = 'кедра';
            $product_material_rash = 'kedr';
        }

        if ($product_material_id == 'el') {
            $product_material = 'Ель';
            $product_material_rash = '';
        }


        //$('#product_price').html($product_price);
        $('#product_material').html($product_material);
        $('.product_material').html($product_material_new);
        //$km = Number($('#km').val());

        $name_client = $('#name_client').val();
        if ($name_client != '') {
            $('.client_name').html('для ' + $name_client);
        }


        //$obvyazka = Number($('#countdop2981').val());
        $product = $('input[name=product]:checked');
        //console.log($product.val());

        $product_name = $product.val();

        if ($product_name == 'квадро-баня 6м с козырьком') {
            $('.dopitem6').css('opacity', '1');
            $('.dopitem6').find('input').prop("disabled", false);
        }


        $product_price = $product.data('price-' + $product_material_id);
        $product_type = $product.data('type');
        $product_razmer = $product.data('razmer');

        $product_img1 = $product.data('img1');
        $product_img2 = $product.data('img2');

        // if ($product_img2=='') {
        //   $product_img2 = 'transparent.png';
        // }


        console.log('prices', $product_price, $product_type, $product_razmer, $product_name);


        // set hidden images
        $('.js_product_img1').attr('src', $product_img1);

        if ($product_img2 == '') {
            $('.js_product_img2').hide();
        } else {
            $('.js_product_img2').show();
            $('.js_product_img2').attr('src', $product_img2);
        }

        $product_dlina = $product.data('dlina');
        $('.product_dlina').html($product_dlina);

        $product_key = $product.data('key');
        $('.sostav_block').hide();
        $('.dop_baza_block').hide();
        $('.sostav_block.' + $product_key).show();


        // show blocks

        $('.bname_').hide();
        $('.bdescription_').hide();
        $('.badvantages_').hide();
        $('.battribues_').hide();

        $('#bname_' + $product_key).show();
        $('#bdescription_' + $product_key).show();
        $('#badvantages_' + $product_key).show();
        $('#battribues_' + $product_key).show();


        // increments
        $('.rash-item').addClass('hide-item');
        $product_rash = $('input[name=product_rash]:checked');

        // if ($product_material_id == 'kedr') {
        //     $product_type = $product_type + '_kedr';
        // }

        // if ($product_material_id == 'el') {

        // }
        $product_type = $product_type + '_' + $product_material_id;

        $rash_price = Number($product_rash.data($product_type + '-' + $product_razmer));

        console.log([$product_rash, $rash_price]);

        if ($product_rash.val() != '0') {

            $('#product_rash').html($product_rash.data('name').toLocaleString('ru'));

            $('#product_rash_price').html($rash_price.toLocaleString('ru') + ' руб.');
            $('.rash-item').removeClass('hide-item');

        } else {
            $('#product_rash').html('');
            $('#product_rash_price').html('');
            $('.rash-item').addClass('hide-item');
            $rash_price = 0;
        }

        // show total info
        $('#product_name').html($product_name);
        $('.product_name').html($product_name);
        $('.js_product_name').html($product_name);

        $('#product_price').html(($product_price.toLocaleString('ru')) + ' руб.');
        $('.js_product_price').html(($product_price.toLocaleString('ru')) + ' руб.');

        $('#product_material').html($product_material);

        $summa_dop = 0;
        $price_dost = 0;

        $("#list_dop").html('');

        $('input[name=dop]:checked').each(function() {
            $price_dop = Number($(this).data('price'));
            $name_dop = $(this).data('name');

            console.log($(this).val());


            if ($(this).data('type') == 'input') {
                var km = $('#km_' + $(this).data('id')).val()
                $price_dop = Number($(this).data('price')) * km;
                $name_dop = $(this).data('name') + ' (' + km + ')';
                $price_dost = Number($(this).data('price')) * km;
            }


            //  if ($(this).val()=='dop298') {
            //      $price_dop = Number($(this).data('price'))*$obvyazka;
            //      $name_dop = 'Обвязка брусом 100х150 '+$obvyazka+' п.м.';
            //      $price_dost = Number($(this).data('price'))*$obvyazka;
            //  }

            $summa_dop += $price_dop;



            $("ul#list_dop").append(" <li class='list-group-item d-flex justify-content-between lh-condensed'> <div><h6 class='my-0'>" + $name_dop + "</h6>\
                <small class='text-muted'></small>\
              </div><span class='text-muted'>" + $price_dop + " руб.</span>\
            </li>");

        });

        $summa_itogo = $summa_dop + $product_price + $rash_price;

        $summa_economy = Number($('#economy').html());

        if (isNaN($summa_economy)) {
            $summa_economy = 0;
        }

        $summa_complect = $product_price + $summa_economy;


        if ($summa_dop == 0) {
            $('.dops-item').addClass('hide-item');
            $('.dop-item').addClass('hide-item');
        } else {
            $('.dops-item').removeClass('hide-item');
            $('.dop-item').removeClass('hide-item');
        }

        console.log('total', $summa_dop, $summa_economy, $summa_itogo);


        $('#summa_dop').html($summa_dop.toLocaleString('ru') + ' руб.');
        $('#summa_itogo').html($summa_itogo.toLocaleString('ru') + ' руб.');

        if (!isNaN($summa_economy)) {
            $('#summa_economy').html('-' + $summa_economy.toLocaleString('ru') + ' руб.');
            $('#summa_complect').html($summa_complect.toLocaleString('ru') + ' руб.');
        } else {
            $('#summa_economy').hide();
            $('#summa_complect').hide();
        }
        

        $promo = Number($('.js-promo').val());
        $summa_promo = 0;
        if (($promo != '0') && ($promo != '')) {
            //$summa_promo = (($summa_itogo-$price_dost)*$promo/100);//+$rash_price
            $summa_promo = (($product_price) * $promo / 100);

            $('#promo').html($promo);

            $('#summa_promo').html($summa_promo.toLocaleString('ru') + ' руб.');

            $('.item-promo').removeClass('hide-item');


            $('#summa_itogo_promo').html(($summa_itogo - $summa_promo).toLocaleString('ru') + ' руб.');
            //alert($('input[name="product_material"]:checked').val());
        } else {
            $('.item-promo').addClass('hide-item');
        }


        $('.list-group-standart').find('.list-group-item-baza').remove();

        $('.list-group-standart').append($('.dop_baza_block.' + $product_key).html());

        /*
          РАССРОЧКА START
        */

        $max_invoice_sum = 300000; // максимальная сумма рассрочки

        $installment = $('input[name=installment]:checked').val();

        if ($installment != 0) {

            $('h4.installment-title').removeClass('no-print');
            $('.installment').removeClass('hide-item');

            if ($promo != '0') {
                $invoice = Math.round($summa_itogo - $summa_promo);
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


        $("title").html($product_name + ' - ' + $name_client + ' - ' + ($summa_itogo - $summa_promo).toLocaleString('ru') + ' руб.');

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
    <div class="switips-wrapper"></div>
</body>

</html>
