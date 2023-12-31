<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Тестовое</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="./resources/css/app.css">

    </head>
    <body>
        <div class="container">
            <div class="rowBetween" style="align-items: center;">
                <form style="margin-top: 0" method="post">
                    <select name="number" id="number" class="town">
                        @foreach ($jsonData as $jsonElement)
                        <option>{{$jsonElement['city']}}</option>
                        @endforeach
                    </select>
                </form>

                <div class="temperature row">
                    <p style="color: #FFF;font-family: Lato;font-size: 18px;font-style: normal;font-weight: 400;line-height: normal;opacity: 0.3985; margin-right: 9px; margin-top: 0px;">º</p>
                    <div class="temperatureSwitch">
                        <span class="temp active">C</span>
                        <span class="temp">F</span>
                        
                    </div>
                </div>
            </div>
            
            <div class="rowBetween">
                <div class="townConfig row">
                    <p class="switchTown" style="margin-top: 0">Сменить город</p>
                    <div class="location row">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.489 5.83819L5.23895 16.6268L13.728 18.2769L18.2146 25.7637L22.489 5.83819Z" fill="white" fill-opacity="0.4"/>
                        </svg>
                        <p style="margin-top: 0">Мое местоположение</p>
                    </div>
                </div>
            </div>

            <section class="weather">
                <div class="weatherInfo row">
                    <svg width="139" height="139" viewBox="0 0 139 139" fill="none" xmlns="http://www.w3.org/2000/svg" class="weatherICO">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M65 5.10443V26.2411C65 29.0025 67.2386 31.2411 70 31.2411C72.7614 31.2411 75 29.0025 75 26.2411V5.10443C75 2.34301 72.7614 0.104431 70 0.104431C67.2386 0.104431 65 2.34301 65 5.10443ZM69.5 102C87.4493 102 102 87.4493 102 69.5C102 51.5508 87.4493 37 69.5 37C51.5508 37 37 51.5508 37 69.5C37 87.4493 51.5508 102 69.5 102ZM5.10443 73H26.2411C29.0025 73 31.2411 70.7614 31.2411 68C31.2411 65.2386 29.0025 63 26.2411 63H5.10443C2.34299 63 0.104431 65.2386 0.104431 68C0.104431 70.7614 2.34299 73 5.10443 73ZM134 73H112.863C110.102 73 107.863 70.7614 107.863 68C107.863 65.2386 110.102 63 112.863 63H134C136.761 63 139 65.2386 139 68C139 70.7614 136.761 73 134 73ZM65 134V112.863C65 110.102 67.2386 107.863 70 107.863C72.7614 107.863 75 110.102 75 112.863V134C75 136.761 72.7614 139 70 139C67.2386 139 65 136.761 65 134ZM20.7835 27.1475L35.7293 42.0933C37.6819 44.0459 40.8478 44.0459 42.8004 42.0933C44.753 40.1407 44.753 36.9749 42.8004 35.0222L27.8546 20.0764C25.9019 18.1238 22.7361 18.1238 20.7835 20.0764C18.8309 22.029 18.8309 25.1948 20.7835 27.1475ZM111.926 118.29L96.9806 103.345C95.028 101.392 95.028 98.2261 96.9806 96.2735C98.9332 94.3208 102.099 94.3208 104.052 96.2735L118.997 111.219C120.95 113.172 120.95 116.338 118.997 118.29C117.045 120.243 113.879 120.243 111.926 118.29ZM110.853 20.7835L95.9067 35.7293C93.9541 37.682 93.9541 40.8478 95.9067 42.8004C97.8594 44.753 101.025 44.753 102.978 42.8004L117.924 27.8546C119.876 25.9019 119.876 22.7361 117.924 20.7835C115.971 18.8309 112.805 18.8309 110.853 20.7835ZM19.7097 111.926L34.6555 96.9806C36.6081 95.0279 39.774 95.0279 41.7266 96.9806C43.6792 98.9332 43.6792 102.099 41.7266 104.052L26.7807 118.997C24.8281 120.95 21.6623 120.95 19.7097 118.997C17.757 117.045 17.757 113.879 19.7097 111.926Z" fill="url(#paint0_linear_16092_6)"/>
                        <defs>
                        <linearGradient id="paint0_linear_16092_6" x1="0.104431" y1="0.104431" x2="0.104431" y2="139" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFFCC9"/>
                            <stop offset="1" stop-color="#FFF799"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <p class="weatherTemperature">
                        {{$temp}}º
                    </p>
                </div>
                <p class="weatherDescription" style="margin-top: 0">{{$description}}</p>
            </section>

            <section class="weatherSecondaryInfo rowBetween">
                <div class="SecondaryInfo">
                    <h2>Ветер</h2>
                    <p>{{$windSpeed}} м/c,  {{$windDirection}}º</p>
                </div>
                <div class="SecondaryInfo">
                    <h2>Давление</h2>
                    <p>{{$pressure}} мм рт. ст.</p>
                </div>
                <div class="SecondaryInfo">
                    <h2>Влажность</h2>
                    <p>{{$humidity}}%</p>
                </div>
                <div class="SecondaryInfo">
                    <h2>Вероятность дождя</h2>
                    <p>{{$rainPercent}}%</p>
                </div>
            </section>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
    </body>
</html>
