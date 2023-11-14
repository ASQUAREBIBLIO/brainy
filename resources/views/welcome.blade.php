<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brainy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
        <!-- Booststrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <style>
            body {
                font-family: sans-serif;
                background-color: #fff;
            }
            .landing-page{
                padding: 20px;
            }
            .landing-head{
                background-color: #fff;
                width: 100%;
                position: sticky;
                top: 0;
                right: 0;
                left: 0;
                padding: 10px 0;
                overflow: hidden;
                line-height: 40px;
            }
            .landing-head a{
                float: left;
                font-size: 18px;

            }
            .landing-head a.active{
                color: #6963dd;
                font-size: 27px;
                letter-spacing: 1px;
                font-weight: bold;
            }
            .landing-right-head{
                float: right;
            }
            .log_btn{
                color: #6963dd;
                font-weight: bold;
                text-decoration: none;
                margin-right: 17px;
            }
            .sign_btn{
                color: #fff;
                background: linear-gradient(0deg, #6963dd, #6863ee);
                padding: 0 20px;
                border: 0;
                border-radius: 3px;
                text-decoration: none;
            }
            .landing-page-body{
                padding: 7px;
            }
            .grid_container{
                width: 100%;
                background-image: url('bg.jpg');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                margin-top: 20px;
                border-radius: 10px;
            }
            .grid_container_content{
                border-radius: 5px;
                justify-content: right;
            }
            .action{
                width: 100%;
                display: flex;
                justify-content: right;
            }
            .action section{
                background-color: #6963ddd3;
                max-width: 50%;
                height: 100%;
                padding: 100px 50px;
                border-left: 15px groove #fff;
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
                display: flex;
                justify-content: right;
                align-items: right;
            }
            .action section .site_details{
                display: flex;
                flex-direction: column;
                justify-content: right;
                text-align: right;
            }
            .action section .site_details span{
                color: #fff;
                font-weight: bold;
                font-size: 40px;
                padding: 0 10px;
                margin-bottom: -20px;
            }
            .action section .site_details p{
                color: #fff;
                font-size: 25px;
                padding: 0 10px;
                font-weight: bold;
                text-align: right;
            }
            
            .features{
                margin-top: 100px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
            }
            .actors{
                display: flex;
                justify-content: center;
            }
            .actors span{
                margin-right: 10px;
                font-weight: bold;
                color: #a19cf1;
            }
            .actors-container{
                margin-top: 100px;
                display: flex;
                justify-content: center;
            }
            .actors-grid{
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 30px;
                margin-bottom: 20px;
            }
            .actors-flex span{
                font-size: 22px;
                font-weight: bold;
            }
            .actors-flex a{
                color: #6963dd;
            }
            .features-grid{
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 30px;
                margin-bottom: 20px;
            }
            .features h2{
                font-size: 30px;
            }
            .features-flex{
                text-align: center;
                padding: 20px;
            }
            .features-flex i{
                background-color: #6963dd;
                border: 7px groove #a19cf1;
                border-radius: 100%;
                padding: 20px;
                color: #fff;
                font-size: 25px;
                font-weight: bold;
            }
            .features-flex p{
                font-size: 20px;
                font-weight: bold;
            }
            @media ( max-width: 820px ){
                .action section{
                    padding: 50px 25px;
                }
                .actors-grid, .features-grid{
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (max-width: 600px){
                .action section{
                    background-color: #6963ddd3;
                    max-width: 100%;
                    height: 100%;
                    padding: 80px 10px;
                    border: 0;
                    border-radius: 10px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .action section .site_details, .action section .site_details p{
                    justify-content: center;
                    text-align: center;
                }
                .actors-grid, .features-grid{
                    grid-template-columns: repeat(1, 1fr);
                }
            }
            @media (max-width: 430px){
                .log_btn{
                    opacity: 0;
                    overflow: hidden;
                }
                .action section{
                    padding: 80px 0;
                }
                .actors{
                    text-align: center;
                    flex-direction: column;
                    justify-content: center;
                }
            }
        </style>
    </head>
    <body>
        <div class="landing-page">
            <div class="landing-head">
                <a class="active">BRAINY</a>
                <div class="landing-right-head">
                    @if (Route::has('user.login'))
                        <div class="">
                            @auth
                                <a href="{{ url('admin/index') }}" class="log_btn">HOME</a>
                            @else
                                <a href="{{ route('admin.login') }}" class="log_btn">LOG IN</a>
                                <a href="{{ route('admin.register') }}" class="sign_btn">SIGN UP</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

            <div class="landing-page-body">
                <div class="grid_container">
                    <div class="grid_container_content">
                        <div class="action">
                            <section>
                                <div>
                                    <div class="site_details">
                                        <span>BRAINY</span>
                                        <p>TRAIN YOUR MEMORY && STAY IN CONTACT WITH YOUR FAMILY</p>
                                    </div>
                                    <div>
                                        <div class="actors">
                                            <span>Patient</span>
                                            <span>Family member</span>
                                            <span>Doctor</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="actors-container">
                    <div class="actors-grid">
                        <div class="actors-flex">
                            <div>
                                <span><i class="las la-procedures"></i> Patients</span>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate debitis pariatur quam tenetur expedita similique dolorum quo quasi repellendus earum praesentium facilis, blanditiis consectetur suscipit consequuntur quos aperiam nemo!
                                </p>
                                <a href="{{ route('user.login')}}">Log in</a>
                            </div>
                        </div>
                        <div class="actors-flex">
                            <div>
                                <span><i class="las la-users"></i> Family Members</span>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate debitis pariatur quam tenetur expedita similique dolorum quo quasi repellendus earum praesentium facilis, blanditiis consectetur suscipit consequuntur quos aperiam nemo!
                                </p>
                                <a href="{{ route('admin.login')}}">Log in</a>
                            </div>
                        </div>
                        <div class="actors-flex">
                            <div>
                                <span><i class="las la-stethoscope"></i> Doctors</span>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate debitis pariatur quam tenetur expedita similique dolorum quo quasi repellendus earum praesentium facilis, blanditiis consectetur suscipit consequuntur quos aperiam nemo!
                                </p>
                                <a href="{{ route('doctor.login')}}">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features">
                    <h2>Features</h2>
                    <div class="features-grid">
                        <div class="features-flex">
                            <i class="las la-home"></i>
                            <p>
                                Stay in contact with your family
                            </p>
                        </div>
                        <div class="features-flex">
                            <i class="las la-calendar-check"></i>
                            <p>
                                Manage your appointments
                            </p>
                        </div>
                        <div class="features-flex">
                            <i class="las la-chart-line"></i>
                            <p>
                                Reports generated weekly
                            </p>
                        </div>
                    </div>
                </div>

            <div id="welcome"></div>
            <script src="{{ mix('js/app.js')}}"></script>
        </div>
    </body>
</html>
