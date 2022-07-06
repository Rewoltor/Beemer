<!DOCTYPE html>
<html lang="en">
<head>
    <title>Utopian - Rewarding Open Source Contributors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body>

<div id="app">

    <div class="container fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-uppercase font-weight-bold" id="navbar">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo-utopian.png"/>
            </a>

            <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rules">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#moderators">Moderators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
                <div class="text-right">
                    <a href="Regist/register.php" class="btn btn-primary mr-3 font-weight-bold">
                        Teszt kitöltése
                    </a>
                    <a href="Client/register.php">
                        Cégeknek
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div data-spy="scroll" data-target="#navbar">
        <div id="header">
            <div class="container" id="header-content">
                <h3 class="text-white text-center">Utopian.io</h3>
                <h1 class="text-white text-center font-weight-bold text-uppercase">Ismered a személyiséged?</h1>
                <h2 class="text-white text-center">Te hogyan látod a világot?<br>Személyiségteszt mindenkinek</h2>
            </div>
            <div class="parallax-wave" id="wave-grey1"></div>
            <div class="parallax-wave" id="wave-grey2"></div>
            <div class="parallax-wave" id="wave-white"></div>
        </div>

        <div class="container text-center" id="screen">
            <img src="assets/img/screen.png" class="mx-auto"/>
            <a href="#" class="play-video">
                <i class="fa fa-play"></i>
            </a>
        </div>

        <div class="container lead" id="intro">
        Nagyon sokan nem ismerik magukat így nem is tudják erősségeiket kihasználni és gyengeségeiket fejleszteni. 
        Ha nem tudod hol vagy a térlépen és nem tudod, hogy hová tartasz akkor nem fogsz célba sem érni. 
        Természetesen ez egy nagyon nehéz feladata mivel mi emberek vagyunk a legbonyolultabb dolgok az ismert univerzumban. 
        Egy kis segítséget mindenki el tud fogadni. Mi szívesen segítünk mindenkinek abba, hogy fejlessze magát.
        </div>

        <div id="github-trigger"></div>
        <div class="container" id="github">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="assets/img/octocat.png" id="octocat"/>
                </div>
                <div class="col-md-9">
                    <div id="github-text">
                        <h3 class="font-weight-bold my-4">Hi! I'm Octocat!</h3>
                        I work at GitHub, as a Mascot! It's a very great place to be. We are a world spanning community of enthusiasts and volunteers, working together on thousands of cool projects. <b>Utopian.io</b> rewards you for making contributions to Open Source projects, like fixing bugs, translating texts, writing documentation or sharing good ideas and more.<br>
                        <div class="text-right mt-3">
                            <a href="https://v2.steemconnect.com/oauth2/authorize?client_id=utopian.app&redirect_uri=https%3A%2F%2Futopian.io%2Fcallback&scope=" class="btn btn-primary">Join our community!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" id="topics">
            <div id="carouselTopicsControls" class="carousel slide" data-autoplay="off">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/idea-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Idea/Feature</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Submit Idea/Feature</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/code-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Development</h4>
                                            <p class="card-text text-center">This category is meant only for developers pushing code updates to Open Source projects.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/bug-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Bug Hunting</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/translate-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Translation</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/idea-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Graphics</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/code-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Documentation</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/bug-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Analysis</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="image" style="background-image: url('assets/img/translate-icon.png')"></div>
                                        <div class="card-body">
                                            <h4 class="card-title text-center text-uppercase">Visibility</h4>
                                            <p class="card-text text-center">Share ideas for new features that you would like to have in an Open Source project.</p>
                                            <div class="text-center"><a href="#" class="btn btn-light">Go somewhere</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselTopicsControls" role="button" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselTopicsControls" role="button" data-slide="next">
                    <i class="fa fa-2x fa-angle-right"></i>
                </a>
            </div>
        </div>



        <div id="rules">
            <div class="header">
                <h2><span>Rules</span></h2>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3><img src="assets/img/check-rules.svg"/></h3>
                                <p>Abide by our rules!</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3><img src="assets/img/review.svg"/></h3>
                                <p>Get reviewed by our moderators!</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3><img src="assets/img/community-vote.png"/></h3>
                                <p>Get upvoted by Utopian.io and the community!</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3><img src="assets/img/wallet.svg"/></h3>
                                <p>Get paid after 7 days!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-5" id="topic-rules">
                <div class="row">
                    <div class="col">
                        <p class="lead">
                            To ensure quality each contribution is reviewed by one of our moderators according to our rules. Not respecting the rules will either give you lower votes or your contribution won't be accepted.
                        </p>
                        <div id="carouselRulesControls" class="carousel slide mt-5" data-autoplay="off" data-interval="7000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3 class="text-center">Idea/Feature</h3>
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Ideas are features that you would like to have in an Open Source project.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Ideas must provide great details for the features to be actually built.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Images, screenshots, links and examples are always necessary in this category.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Never write about ideas you have already shared before or ideas already shared by someone else.</li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <h3 class="text-center">Idea/Feature</h3>
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Ideas are features that you would like to have in an Open Source project.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Ideas must provide great details for the features to be actually built.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Images, screenshots, links and examples are always necessary in this category.</li>
                                        <li class="list-group-item"><i class="fa fa-exclamation"></i> Never write about ideas you have already shared before or ideas already shared by someone else.</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselRulesControls" role="button" data-slide="prev">
                                <i class="fa fa-2x fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselRulesControls" role="button" data-slide="next">
                                <i class="fa fa-2x fa-angle-right"></i>
                            </a>
                        </div>

                        <div class="text-center mt-5 mb-5">
                            <a href="https://utopian.io/rules" class="btn btn-primary">
                                Read all rules
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="moderators">
            <div class="header">
                <h2><span>Moderators</span></h2>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-3">
                            <div class="box">
                                <div id="carouselModeratorsControls" class="carousel slide" data-autoplay="off" data-interval="7000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/img/moderators/elear.png" class="profile-image" />
                                            <h4>
                                                <a href="https://steemit.com/@elear">
                                                    elear
                                                </a>
                                            </h4>
                                            <p class="lead">
                                                &bdquo;Insert random quote from elear here.&rdquo;
                                            </p>
                                            <div class="container social-links">
                                                <div class="text-center">
                                                    <a href="#">
                                                        <img src="assets/img/instagram.png"/>
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/img/linkedin.png"/>
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/img/instagram.png"/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/moderators/elear.png" class="profile-image" />
                                            <h4>
                                                <a href="https://steemit.com/@elear">
                                                    elear
                                                </a>
                                            </h4>
                                            <p class="lead">
                                                &bdquo;Insert quote from elear here.&rdquo;
                                            </p>
                                            <div class="container social-links">
                                                <div class="text-center">
                                                    <a href="#">
                                                        <img src="assets/img/instagram.png"/>
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/img/linkedin.png"/>
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/img/instagram.png"/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselModeratorsControls" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselModeratorsControls" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-9 text-center">
                            <h3 class="font-weight-bold text-uppercase">The moderators team</h3>
                            <p class="lead">On Utopian.io all contributors are rewarded for their hard work, including our the moderators. They ensure a high quality standard on this platform.</p>
                            <div class="container">
                                <div class="row font-weight-bold">
                                    <div class="col col-6">
                                        <h3 class="mb-4">$ 250</h3>
                                        <p>Pending Payout</p>
                                    </div>
                                    <div class="col col-6">
                                        <h3 class="mb-4">$ 708</h3>
                                        <p>Previous Payout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <p class="lead">
                    5% of the total contributor rewards generated goes to the Moderators based on the amount of contributions they have reviewed. To become an Utopian Moderator you must have high reputation and often review submitted contributions.
                </p>
            </div>
        </div>

        <div id="faq">
            <div class="header-small">
                <h2><span>FAQ</span></h2>
            </div>
            <div class="container">
                <div id="faq-accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne">
                                    1. Question
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" data-parent="#faq-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo">
                                    2. Question
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#faq-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree">
                                    3. Question
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#faq-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="blog">
            <div class="header-small">
                <h2><span>Blog</span></h2>
            </div>
            <div class="container">
                <div id="utopian-steemit-blog">
                    <div class="text-center"><i class="fa fa-2x fa-spin fa-spinner text-muted"></i></div>
                </div>
            </div>
        </div>

        <footer class="mt-5">
            <div class="border-top"></div>
            <div class="container">
                <div class="social-links">
                    <a href="#">
                        <img src="assets/img/facebook2.png"/>
                    </a>
                    <a href="#">
                        <img src="assets/img/twitter2.png"/>
                    </a>
                    <a href="#">
                        <img src="assets/img/instagram2.png"/>
                    </a>
                    <a href="#">
                        <img src="assets/img/linkedin2.png"/>
                    </a>
                </div>
                utopian.io
            </div>
        </footer>
    </div>

</div>

<template id="blog-template">
    <a href="${URL}" class="blog-post" target="_blank">
        ${TITLE}
        <span>${DATE}</span>
    </a>
</template>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/TweenMax.min.js"></script>
<script type="text/javascript" src="assets/js/TimelineMax.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/vue.min.js"></script>
<script type="text/javascript" src="assets/js/ScrollMagic.min.js"></script>
<script type="text/javascript" src="assets/js/animation.gsap.min.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
<script type="text/javascript" src="assets/js/index-steem.js"></script>
<script src="https://cdn.steemjs.com/lib/latest/steem.min.js"></script>
<script src="https://mktcode.github.io/steemit-widgets/assets/js/steemit-widgets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

</body>
</html>
