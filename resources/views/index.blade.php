<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /*fonts*/
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');

        /* font-family: 'Space Mono', monospace;*/
        body {
            font-family: 'Space Mono', monospace;
            color: white;
        }
        @keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Apply the animation to the elements you want to animate */
.wrapper > * {
  animation: fadeIn 0.5s ease-out;
  animation-fill-mode: forwards;
  opacity: 0;
}
        .wrapper {
            max-width: 100%;
            height: 100%;
        }

        header {
            background-color: #2f2f2f;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 21px;
            padding: 10px 25px;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
        }

        nav li a {
            text-decoration: none;
            color: white;
            padding: 0 20px;
            transition: .5s;
        }

        nav li a:hover {
            text-decoration: underline;
            transition: .5s;
        }


        @media (max-width: 675px) {
            header {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            nav ul li {

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            nav li a {
                padding: 20px 20px;
            }

        }

        /*-----------------------------------------------------*/
        .header {
            background: url('images/bg-image-4.jpg') no-repeat;
            width: 100%;
            height: 300px;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes resizeAnimation1 {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.2);
            }

            50% {
                transform: scale(0.8);
            }

            75% {
                transform: scale(1.4);
            }
        }

        @keyframes resizeAnimation2 {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.4);
            }

            50% {
                transform: scale(0.8);
            }

            75% {
                transform: scale(1.2);
            }
        }

        /* Добавьте анимации для остальных картинок по аналогии */

        .image-container {
            display: flex;
        }

        .image-container img {
            width: 62px;
            /* Замените этот размер на ваш желаемый размер */
            height: auto;
            margin: 0 10px;
            /* Расстояние между изображениями */
        }

        .image-container img:nth-child(1) {
            animation: resizeAnimation1 4s infinite;
        }

        .image-container img:nth-child(2) {
            animation: resizeAnimation2 4s infinite;
        }

        @keyframes resizeAnimation3 {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(0.8);
            }

            50% {
                transform: scale(1.4);
            }

            75% {
                transform: scale(1.2);
            }
        }

        @keyframes resizeAnimation4 {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.2);
            }

            50% {
                transform: scale(0.8);
            }

            75% {
                transform: scale(1.4);
            }
        }

        .image-container img:nth-child(3) {
            animation: resizeAnimation3 4s infinite;
        }

        .image-container img:nth-child(4) {
            animation: resizeAnimation4 4s infinite;
        }



        /*---------------------------------------------*/
        .read-more {
            background-color: #2f2f2f;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
        }

        .read-more h2 {
            font-size: 63px;
        }

        .read-more p {
            font-size: 29px;
        }

        .read-more button {
            margin-top: 50px;
            margin-bottom: 0;
            color: black;
            background-color: white;
            padding: 10px;
            font-size: 24px;
            border: none;
            border-radius: 30px;
            max-width: 250px;
            transition: .5s;
        }

        .div-text {
            max-width: 510px;
            position: relative;
            left: -10%;
        }

        .div-text>div {
            margin: 20px 0;

        }

        .div-img>img {
            max-width: 70%;
            max-height: 70%;
        }

        @media (max-width:970px) {
            .read-more {
                flex-direction: column;
                justify-content: space-between;
            }

            .div-text {

                justify-content: center;
                padding: 0 40px;
                flex-direction: row;
                justify-content: space-between;

            }

            .read-more h2 {
                font-size: 50px;
            }

            .read-more p {
                font-size: 23px;
            }
        }

        /*-------------------------------------------*/
        .about-us {
            background-color: #252525;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .about-container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        .about-text {
            position: relative;
            left: -20%;
        }

        .about-us h2 {
            font-size: 63px;
            text-shadow: -1rem -1rem 0 rgba(253, 253, 253, 0.10);
        }

        .about-us p {
            font-size: 29px;
            max-width: 750px;

        }

        .about-us>div,
        h2 {
            margin: 30px 0;
        }

        .about-img {
            background: url('images/about-bg.jpg') no-repeat;
            background-size: cover;
            background-position: left;
            position: relative;
            background-attachment: fixed;

            left: 0;

            width: 900px;
            height: 400px;
        }

        @media (max-width:970px) {

            .about-us h2 {
                font-size: 50px;
            }

            .about-us p {
                font-size: 23px;
            }

            button {
                font-size: 20px;
            }
        }

        /*-------------------------------------------*/
        .teams {
            background-color: #2f2f2f;
            padding: 50px 0;
        }

        .teams h2 {
            text-align: center;
            font-size: 50px;
        }

        .teams .teams-masters {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .master-img>img {
            width: 200px;
        }

        /*----------------------------------------------*/

        .services {
            background-color: #252525;

        }

        .services h3 {
            text-align: center;
            font-size: 40px;
            padding: 50px 0;
            text-shadow: -1rem -1rem 0 rgba(253, 253, 253, 0.10);

        }

        .services-list {}

        .services-ul {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            padding: 50px 0;
            text-shadow: -1rem -1rem 0 rgba(253, 253, 253, 0.10);

        }

        .services-ul li {
            list-style: none;
            font-size: 30px;
            margin: 10px;
            text-align: center;
            padding: 10px;
            background-color: #2f2f2f;
            border-radius: 10px;
            transition: .5s;
            text-shadow: -0.2rem -0.2rem 0 rgba(253, 253, 253, 0.10);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;


        }

        /*----------------------------------------------*/
        .become-container {
            background: url('images/gift-card-bg.jpg') no-repeat;
            background-size: cover;
            padding: 5rem;
            background-attachment: fixed;
        }

        .become-btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .become-container button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #775432;
            color: #fff;
            border: none;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 0;
            transition: background-color 0.3s;
            font-weight: bold;
            font-size: 24px;

        }

        .become-container button:hover {
            background-color: #623d26;
        }

        /*----------------------------------------------*/
        .price h2 {
            text-align: center;
            font-size: 50px;
            text-shadow: -1rem -1rem 0 rgba(253, 253, 253, 0.10);
            padding: 50px 0;
            color: white;

        }

        .price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .price-img img {
            height: 700px;
        }

        .price-list {
            background-color: #775432;
            padding: 70px 50px;
            position: relative;
            z-index: 1;
            right: -25%;
        }

        .price-list h3 {
            text-align: center;
            font-size: 2.1rem;
            text-shadow: -0.5rem -0.5rem 0 rgba(253, 253, 253, 0.10);
            margin-bottom: 2rem;
        }

        .price-list table {
            font-size: 1.8rem;
        }

        .price-list table th,
        td {
            padding: 5px 20px;
        }


        /*----------------------------------------------*/
        .works-container h2 {
            text-align: center;

            text-shadow: -1rem -1rem 0 rgba(253, 253, 253, 0.10);

        }

        .works {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .work-item img {
            width: 24.5vw;
            display: block;

            height: auto;
            transition: transform 0.3s;
            /* Плавный переход при увеличении */
        }

        .work-item img:hover {

            transform: scale(1.1);
            /* Увеличиваем картинку на 10% при наведении */
        }

        /*--------------------------------------------------*/
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: none !important;
            border-radius: 5px;
            background-color:rgba(0, 0, 0, 0.1)
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select,
        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            color:white !important;
            background-color:rgba(0, 0, 0, 0.1)
            
        }

        .forms button {
            padding: 10px 20px;
            background-color: #775432;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .forms button:hover {
            background-color: #623d26;
        }




        /*--------------------------------------------------*/
        footer {
            background-color: #222;
            padding: 60px 130px;
            font-size: 27px;
        }

        footer ul li {
            list-style: none;
            padding: 5px 0;

        }

        footer li a {
            text-decoration: none;
            color: white;
            padding: 20px 20px;
        }

        footer li a:hover {
            text-decoration: underline;
        }

        .navigations {
            display: flex;
            flex-direction: row;
        }

        .navigations div {
            padding-right: 80px;
            padding-bottom: 200px;
        }

        .navigations div:nth-child(2) {
            padding-right: 200px;
        }

        .cop {
            display: flex;
            flex-direction: row;
        }

        .cop p {
            padding: 0 10px;
        }

        .last-logo {
            margin-bottom: 60px;
        }

        .cop-p {
            border-right: 2px solid white;
        }

        .copy {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }

        button:hover {
            box-shadow: 0 0 5px gray;
            background-color: lightgray;
            transition: .5s;
        }

        img {
            max-width: 100%;
        }

        @media (max-width:970px) {
            footer {
                background-color: #2f2f2f;
                padding: 30px 70px;
                font-size: 20px;
            }

            .navigations {

                flex-direction: column;
            }

            .navigations div {
                padding-right: 40px;
                padding-bottom: 50px;
            }

            .navigations div:nth-child(2) {
                padding-right: 40px;
            }

        }
    </style>
    <div class="wrapper">
        <header>
            <div class="logo"><img src="images/icon.png" alt="logo"></div>
            <div>
                <nav>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#galery">Galery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!----------------------------------------------------------------->
        <div class="header">
            <div class="image-container">
                <img src="images/icon-service-light-3-70x62.png" alt="">
                <img src="images/icon-service-light-2-70x62.png" alt="">
                <img src="images/icon-service-light-1-70x62.png" alt="">
                <img src="images/icon-service-light-4-70x62.png" alt="">
            </div>
        </div>
        <!----------------------------------------------------------------->
        <div class="read-more">
            <div class="div-img"><img src="images/hero-img.jpg" alt="wonam"></div>
            <div class="div-text">
                <h2>CREATE YOUR STYLE WITH US</h2>
                <p> .... </p>
                <div><button>Make An Appointment</button></div>
            </div>
        </div>
        <!----------------------------------------------------------------------->
        <div class="about-us" id="about">
            <div>
                <h2>About US</h2>
            </div>
            <div class="about-container">
                <div class="about-img">

                </div>
                <div class="about-text">
                    <h3>WELCOME TO OUR BARBERSHOP</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut</p>
                </div>
            </div>
        </div>
        <!--------------------------------------------------------------------->
        <div class="teams" id="team">
            <h2>OUR TEAM</h2>
            <div class="teams-container">
                <div class="teams-masters">
                    <!-- /////////-->
                    <div class="teams-item">
                        <div class="master-img">
                            <img src="images/team-4.jpg" alt="master1">
                        </div>
                        <div class="master-text">
                            <h3>John </h3>
                        </div>
                    </div>
                    <!-- /////////-->
                    <div class="teams-item">
                        <div class="master-img">
                            <img src="images/team-2.jpg" alt="master2">
                        </div>
                        <div class="master-text">
                            <h3>Thomas</h3>
                        </div>
                    </div>
                    <!-- /////////-->
                    <div class="teams-item">
                        <div class="master-img">
                            <img src="images/team-3.jpg" alt="master3">
                        </div>
                        <div class="master-text">
                            <h3>Daniel</h3>
                        </div>
                    </div>
                    <!-- /////////-->
                    <div class="teams-item">
                        <div class="master-img">
                            <img src="images/team-1.jpg" alt="master4">
                        </div>
                        <div class="master-text">
                            <h3>John</h3>
                        </div>
                    </div>
                    <!-- /////////-->
                    <div class="teams-item">
                        <div class="master-img">
                            <img src="images/team-5.jpg" alt="master5">
                        </div>
                        <div class="master-text">
                            <h3>Sarah</h3>
                        </div>
                    </div>
                    <!-- /////////-->

                </div>
            </div>
            <!--------------------------------------------------------------------->
            <div class="services" id="services">
                <h3>Services</h3>
                <div class="new-services">
                    <div class="services-list">
                        <ul class="services-ul">
                            <li>Shaving</li>
                            <li>Haircoloring</li>
                            <li>Beard Trim</li>
                            <li>Haircuts</li>
                            <li>Mustache Trim</li>
                            <li>Waxing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--------------------------------------------------------------------->
            <div class="become-container">
                <div>
                    <h2>BECOME OUR CUSTOMER & GET A GIFT CARD</h2>
                    <div class="become-btn">
                        <button>Make An Appointment</button>
                    </div>
                </div>
            </div>
            <!--------------------------------------------------------------------->

            <div class="price" id="price">
                <h2>PRICING</h2>
                <div class="price-container">
                    <div class="price-list">
                        <h3>PRICELIST</h3>
                        <div>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>MUSTACHE TRIM</th>
                                        <th>$30</th>
                                    </tr>
                                    <tr>
                                        <td>BEARD TRIM</td>
                                        <td>$45</td>
                                    </tr>
                                    <tr>
                                        <td>HAIRCOLORING</td>
                                        <td>$55</td>
                                    </tr>
                                    <tr>
                                        <td>HAIRCUTS</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>SHAVING</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>WAXING</td>
                                        <td>$35</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="price-img">
                        <img src="images/pricing-bg.jpg" alt="pricing-bg">
                    </div>
                </div>

            </div>

            <!--------------------------------------------------------------------->
            <div class="works-container" id="works">
                <h2>OUR WORKS</h2>
                <div class="works">
                    <div class="work-item">
                        <img src="images/work-img-1.jpg" alt="work1">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-2.jpg" alt="work2">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-3.jpg" alt="work3">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-4.jpg" alt="work4">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-5.jpg" alt="work5">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-6.jpg" alt="work6">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-7.jpg" alt="work7">
                    </div>
                    <div class="work-item">
                        <img src="images/work-img-8.jpg" alt="work8">
                    </div>
                </div>

            </div>
            <!--------------------------------------------------------------------->

            <div class="forms" id="contact">
                <h2>MAKE APPOINTMENT</h2>
                <div class="form-container">
                <form action="{{ route('records.store') }}" method="POST">
    @csrf
    <label for="stylist">Выберите стилиста:</label>
    <select id="stylist" name="stylist">
        <option value="John">John</option>
        <option value="Thomas">Thomas</option>
        <option value="Daniel">Daniel</option>
        <option value="Sarah">Sarah</option>
        <option value="Emily">Emily</option>
        <option value="Jessica">Jessica</option>
    </select>
    <br>

    <label for="service">Выберите процедуру:</label>
    <select id="service" name="service">
        <option value="Haircut">Haircut</option>
        <option value="Beard">Beard Trim</option>
        <option value="Hair">Hair Coloring</option>
        <option value="Haircuts">Haircuts</option>
        <option value="Shaving">Shaving</option>
        <option value="Waxing">Waxing</option>
        <option value="Mustache">Mustache Trim</option>
        
    </select>
    <br>

    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="phone">Телефон:</label>
    <input type="tel" id="phone" name="phone" required>
    <br>

    <label for="date">Дата на прием:</label>
    <input type="date" id="date" name="date" required>
    <br>

    <label for="time">Время:</label>
    <input type="time" id="time" name="time" required>
    <br>

    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" rows="4"></textarea>
    <br>

    <button type="submit" id="submit-btn">Отправить</button>
</form>
<script>
    document.getElementById('submit-btn').addEventListener('click', function() {
        alert('Запись успешно создана!');
    })
</script>
                </div>
            </div>

            <!--------------------------------------------------------------------->
            <footer>
                
                <div class="navigations">
                    <div>
                        <ul>
                            <li><a href="#">About App</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Privacy Policy</a></li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>Your Name</li>
                            <li>St Name number 1</li>
                            <li>City, Country</li>
                            <li>+00 123 456 789</li>
                            <li>name@email.com</li>
                        </ul>
                    </div>
                </div>
                <div class="copy">

                    <div class="cop">
                        <p class="cop-p">Copyright</p>
                        <p>Yourname</p>
                    </div>
                    <div class="svg">

                        <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50"
                            viewBox="-100.7682 -167.947 873.3244 1007.682">
                            <g fill="#fff">
                                <path
                                    d="M335.895 0c-91.224 0-102.663.387-138.49 2.021-35.752 1.631-60.169 7.31-81.535 15.612-22.088 8.584-40.82 20.07-59.493 38.743-18.674 18.673-30.16 37.407-38.743 59.495C9.33 137.236 3.653 161.653 2.02 197.405.386 233.232 0 244.671 0 335.895c0 91.222.386 102.661 2.02 138.488 1.633 35.752 7.31 60.169 15.614 81.534 8.584 22.088 20.07 40.82 38.743 59.495 18.674 18.673 37.405 30.159 59.493 38.743 21.366 8.302 45.783 13.98 81.535 15.612 35.827 1.634 47.266 2.021 138.49 2.021 91.222 0 102.661-.387 138.488-2.021 35.752-1.631 60.169-7.31 81.534-15.612 22.088-8.584 40.82-20.07 59.495-38.743 18.673-18.675 30.159-37.407 38.743-59.495 8.302-21.365 13.981-45.782 15.612-81.534 1.634-35.827 2.021-47.266 2.021-138.488 0-91.224-.387-102.663-2.021-138.49-1.631-35.752-7.31-60.169-15.612-81.534-8.584-22.088-20.07-40.822-38.743-59.495-18.675-18.673-37.407-30.159-59.495-38.743-21.365-8.302-45.782-13.981-81.534-15.612C438.556.387 427.117 0 335.895 0zm0 60.521c89.686 0 100.31.343 135.729 1.959 32.75 1.493 50.535 6.965 62.37 11.565 15.68 6.094 26.869 13.372 38.622 25.126 11.755 11.754 19.033 22.944 25.127 38.622 4.6 11.836 10.072 29.622 11.565 62.371 1.616 35.419 1.959 46.043 1.959 135.73 0 89.687-.343 100.311-1.959 135.73-1.493 32.75-6.965 50.535-11.565 62.37-6.094 15.68-13.372 26.869-25.127 38.622-11.753 11.755-22.943 19.033-38.621 25.127-11.836 4.6-29.622 10.072-62.371 11.565-35.413 1.616-46.036 1.959-135.73 1.959-89.694 0-100.315-.343-135.73-1.96-32.75-1.492-50.535-6.964-62.37-11.564-15.68-6.094-26.869-13.372-38.622-25.127-11.754-11.753-19.033-22.943-25.127-38.621-4.6-11.836-10.071-29.622-11.565-62.371-1.616-35.419-1.959-46.043-1.959-135.73 0-89.687.343-100.311 1.959-135.73 1.494-32.75 6.965-50.535 11.565-62.37 6.094-15.68 13.373-26.869 25.126-38.622 11.754-11.755 22.944-19.033 38.622-25.127 11.836-4.6 29.622-10.072 62.371-11.565 35.419-1.616 46.043-1.959 135.73-1.959" />
                                <path
                                    d="M335.895 447.859c-61.838 0-111.966-50.128-111.966-111.964 0-61.838 50.128-111.966 111.966-111.966 61.836 0 111.964 50.128 111.964 111.966 0 61.836-50.128 111.964-111.964 111.964zm0-284.451c-95.263 0-172.487 77.224-172.487 172.487 0 95.261 77.224 172.485 172.487 172.485 95.261 0 172.485-77.224 172.485-172.485 0-95.263-77.224-172.487-172.485-172.487m219.608-6.815c0 22.262-18.047 40.307-40.308 40.307-22.26 0-40.307-18.045-40.307-40.307 0-22.261 18.047-40.308 40.307-40.308 22.261 0 40.308 18.047 40.308 40.308" />
                            </g>
                        </svg>
                        <!------------------------------------------------------------>

                        <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50"
                            viewBox="-204.79995 -341.33325 1774.9329 2047.9995">
                            <path
                                d="M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373"
                                fill="#2f2f2f" />
                            <path
                                d="M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4"
                                fill="#fff" />
                        </svg>
                        <!----------------------------------------------------------------->

                        <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50"
                            viewBox="-44.7006 -60.54775 387.4052 363.2865">
                            <path fill="#fff"
                                d="M93.719 242.19c112.46 0 173.96-93.168 173.96-173.96 0-2.646-.054-5.28-.173-7.903a124.338 124.338 0 0030.498-31.66c-10.955 4.87-22.744 8.148-35.11 9.626 12.622-7.57 22.313-19.543 26.885-33.817a122.62 122.62 0 01-38.824 14.841C239.798 7.433 223.915 0 206.326 0c-33.764 0-61.144 27.381-61.144 61.132 0 4.798.537 9.465 1.586 13.941-50.815-2.557-95.874-26.886-126.03-63.88a60.977 60.977 0 00-8.279 30.73c0 21.212 10.794 39.938 27.208 50.893a60.685 60.685 0 01-27.69-7.647c-.009.257-.009.507-.009.781 0 29.61 21.075 54.332 49.051 59.934a61.218 61.218 0 01-16.122 2.152 60.84 60.84 0 01-11.491-1.103c7.784 24.293 30.355 41.971 57.115 42.465-20.926 16.402-47.287 26.171-75.937 26.171-4.929 0-9.798-.28-14.584-.846 27.059 17.344 59.189 27.464 93.722 27.464" />
                        </svg>
                    </div>

                </div>
            </footer>
        </div>
</body>

</html>