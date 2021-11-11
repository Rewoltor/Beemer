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
                        <a class="nav-link" href="#rewards">Rewards</a>
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
                        Regisztráció
                    </a>
                    <a href="Regist/login.php">
                        Bejelentkezés
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div data-spy="scroll" data-target="#navbar">
        <div id="header">
            <div class="container" id="header-content">
                <h3 class="text-white text-center">Utopian.io</h3>
                <h1 class="text-white text-center font-weight-bold text-uppercase">Open Source Economy</h1>
                <h2 class="text-white text-center">Earn rewards by contributing to your<br>favorite open source projects!</h2>
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

        <div id="rewards">
            <div class="header">
                <h2><span>Rewards</span></h2>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3 id="statsPendingRewards">$5725</h3>
                                <p>Pending Rewards</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3 id="statsAuthorRewards">$1246</h3>
                                <p>Released Contributor Rewards</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3 id="statsCuratorRewards">$292</h3>
                                <p>Released Curator Rewards</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="box">
                                <h3 id="statsTotalRewards">$7263</h3>
                                <p class="text-uppercase font-weight-bold">Total Generated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rewards-trigger"></div>
            <div class="container" id="steem">
                <div class="row">
                    <div class="col text-center mb-5 order-12 order-md-1">
                        <div id="steem-logo-container">
                            <svg id="steem-logo" viewBox="0 0 28 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M4.5238222,0.23195745 C4.2419556,0.09004255 0.6324444,3.07148936 0.6324444,5.265 C0.6280889,8.2631064 4.8399111,15.0552766 5.5498667,17.6825532 C6.1596444,19.9359149 4.5144889,22.6403191 4.9662222,22.7631064 C5.3818667,23.0284255 9.3124444,19.0486383 9.4630222,17.3518298 C9.6596444,14.6498936 4.8741333,6.77114894 4.4920889,4.73682979 C4.0503111,2.36253191 4.8424,0.28502128 4.5238222,0.23195745 L4.5238222,0.23195745 L4.5238222,0.23195745 Z" id="path-1"></path>
                                    <path d="M5.2321778,0.130191489 C4.8700444,-0.0505957447 0.26871111,3.74778723 0.26871111,6.54844681 C0.26373333,10.3715106 5.6353778,19.0338723 6.5394667,22.3812128 C7.3172444,25.2546809 5.2197333,28.7038298 5.7934222,28.8580851 C6.3235556,29.1949787 11.3324444,24.1242979 11.5296889,21.9573191 C11.7823111,18.5131064 5.6764444,8.46738298 5.1904889,5.86910638 C4.6267556,2.84878723 5.6353778,0.197446809 5.2321778,0.130191489 L5.2321778,0.130191489 L5.2321778,0.130191489 L5.2321778,0.130191489 Z" id="path-2"></path>
                                    <path d="M4.22924444,0.23195745 C3.94488889,0.09004255 0.337866667,3.07148936 0.337866667,5.265 C0.332888889,8.2631064 4.54533333,15.0552766 5.25466667,17.6825532 C5.86506667,19.9359149 4.21928889,22.6403191 4.67164444,22.7631064 C5.0848,23.0284255 9.01475556,19.0486383 9.16782222,17.3518298 C9.36506667,14.6498936 4.57893333,6.77114894 4.19751111,4.73682979 C3.75511111,2.36253191 4.54782222,0.28502128 4.22924444,0.23195745 L4.22924444,0.23195745 L4.22924444,0.23195745 L4.22924444,0.23195745 Z" id="path-3"></path>

                                    <mask id="mask-1" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-2"></use>
                                    </mask>
                                    <mask id="mask-3" fill="white">
                                        <use xlink:href="#path-3"></use>
                                    </mask>

                                </defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="logo-steemit">
                                        <g id="circle1" transform="translate(0.000000, 3.000000)">
                                            <g mask="url(#mask-1)">
                                                <image x="-2" y="-38" width="100" height="100" xlink:href="data:image/png;base64,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">
                                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="30 46 12" to="390 46 12" dur="4s" repeatCount="indefinite"></animateTransform>
                                                </image>
                                            </g>
                                        </g>

                                        <g id="circle2" transform="translate(8.000000, 0.000000)">
                                            <g mask="url(#mask-2)">
                                                <image x="-4" y="-35" width="100" height="100" xlink:href="data:image/png;base64,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">
                                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0 46 15" to="360 46 15" dur="4s" repeatCount="indefinite"></animateTransform>
                                                </image>
                                            </g>
                                        </g>
                                        <g id="circle3" transform="translate(18.000000, 3.000000)">

                                            <g mask="url(#mask-3)">
                                                <image x="-4" y="-38" width="100" height="100" xlink:href="data:image/png;base64,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">
                                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" from="60 46 12" to="420 46 12" dur="4s" repeatCount="indefinite"></animateTransform>
                                                </image>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="#" class="btn btn-light">Learn more about Steem</a><br>
                            <br>
                            <a href="#" class="btn btn-light">Delegate Steem Power</a>
                        </div>
                    </div>
                    <div class="col order-1 order-md-12">
                        <h1 class="text-uppercase font-weight-bold mb-4">Who pays the rewards?</h1>
                        <p class="lead">
                            To pay the rewards, Utopian.io uses the <a href="#">Steem blockchain</a>. This means the money is created in the form of the cryptocurrency STEEM by votings of the community. Noone has to directly pay for the rewards. They are generated by an algorithm called "Proof-Of-Brain", encouraging people to create and curate quality content.<br>
                            <br>
                            In the case of Utopian.io this quality content are your contributions to the Open Source world. By upvoting your contributions the community creates money to reward you for your work.<br>
                            <br>
                            The worth of a user's vote is based on his own investment in the platform and the value the user generates through curation. Utopian.io itself can vote on your contributions. Over 1 mio. STEEM Power were delegated to the Utopian.io platform, making a vote worth close to $100.
                        </p>
                    </div>
                </div>
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
