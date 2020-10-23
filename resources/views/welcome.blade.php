<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body onload="timer()">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <form action="" method="post">
                    <input type="button" onclick="up()">
                    <input type="button" onclick="down()">
                    <input type="hidden" id="price" value="100">
                </form>
                <input id="count" type="button" value="">
                Секунд прошло <input id="countPrice" type="button" value="">
                <script type="text/javascript">
                    /*var c = 0;
                    var price = 0;
                    var countPrice = 0;
                    function down() {
                        c--;
                        if(c <= 1){
                            c = 0;
                        }
                        document.getElementById('count').value = c;
                        price = document.getElementById('price').value;
                        countPrice = c * price;
                        document.getElementById('countPrice').value = countPrice;
                    }
                    function up() {
                        c++;
                        document.getElementById('count').value = c;
                        price = document.getElementById("price").value;
                        countPrice = c * price;
                        document.getElementById('countPrice').value = countPrice;
                    }*/// функция рассета стоимости товара с пересчетом по назатию пользователя

                    //document.write("<br />Hello World!"); написать в самом документе
                    //document.writeln("<br />Hello World!"); написать в самом документе
                    // var number = 21; назначение переменной
                  /* var x = 5;
                   var y = 5;
                   var result;
                   result = x + y;
                   document.write("<br />" + result);
                   result += x;
                   document.write("<br />" + result);
                   result *= x;
                   document.write("<br />" + result);
                   document.write("<br />" + x + "+" + y + "=" + (x+y) + "<br />");// соединение строки и числа
                   var str_1 = "12";
                   var str_2 = "24";
                   document.write(Number(str_1) + Number(str_2)); // перевод строки в число
                   document.write("<br />");
                   var z = 6;
                   var d = 7;
                   bool = z < d;
                   document.write(bool); // вывод булевой функции правда и неправда
                   document.write("<br />");
                   document.write(10 + " % " + 7 + " = " + (10 % 7));// */ // действия с переменными
                   /*var id = setInterval("myFunction_1()", 1000);
                   var counter = 0;
                   function myFunction_1() {
                       counter++;
                       alert("Секунд прошло - " + counter);
                       if(counter == 3) clearInterval(id);
                   }*/
                   /*var counter = 0;
                   function timer() {
                        counter++;
                        document.getElementById('count').innerHTML = counter;
                        setTimeout("timer()", 1000);
                   }*///счетчик
                    /*var date = new Date();
                    text = "Год сегодня - " + date.getFullYear();
                    text += "\nМесяц сейчас - " + date.getMonth();
                    text += "\nДень сегодня - " + date.getDate();
                    text += "\nЧас сейчас - " + date.getHours();
                    text += "\nМинут сейчас - " + date.getMinutes();
                    text += "\nСекунд сейчас  - " + date.getSeconds();
                    document.write(text);*/// функции даты
                    /*var string = "Небольшая строка";

                    text = "Длина строки равна - " + string.length;
                    text += "\nСтрока в верхнем регистре - " + string.toUpperCase();
                    text += "\nСтрока в нижнем регистре - " + string.toLowerCase();
                    text += "\nОбрезанная строка - " + string.substring(0, 5);
                    text += "\n3-й символ это - " + string.charAt(2);
                    text += "\n'Стро' начинается с индекса - " + string.indexOf("стро");
                    alert(text);*/// функции строк
                </script>
            </div>
        </div>

    </body>
</html>
