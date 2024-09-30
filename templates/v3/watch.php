<?php require_once('include/movies.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Watch <?php echo $row['title'];?> full movie online for free</title>
    <meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
    <meta name="keywords" content="<?php echo $keywords;?>">
<meta property="og:image" content="<?php echo $images;?>" />
    

<link rel="icon" type="image/png" href="/view/favicon.png">
<script src="https://use.fontawesome.com/3db27005e3.js"></script>
<link href="https://use.fontawesome.com/3db27005e3.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="/view/include/extra/v1.css">
<script src="/view/include/extra/js.js"></script>
<meta name="theme-color" content="#161c23">
<meta name="robots" content="/">
<link rel="dns-prefetch" href="//image.tmdb.org"></head>
</div>
</div>
<div class="modal fade" id="modalLang" tabindex="-1" role="dialog" aria-labelledby="modalLangLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<dib class="h5 modal-title text-dark" id="modalLangLabel">Choose your language:</dib>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark navbar-mopie fixed-top">
<a class="navbar-brand" href="/">
<img width="30" src="/view/include/extra/logo.png">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarsExample04">
<ul class="navbar-nav mr-auto">
<li class="nav-item dropdown">
<a class="nav-link" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<div class="dropdown-menu mop" aria-labelledby="dropdown04">
<div class="row">
<div class="col-12">
<a class="dropdown-item" href="/" title="Popular">Popular</a>
<a class="dropdown-item" href="/" title="Now Playing">Now Playing</a>
<a class="dropdown-item" href="/" title="Top Rated">Top Rated</a>
<a class="dropdown-item" href="/" title="Upcoming">Upcoming</a>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="/" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TV Shows <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<div class="dropdown-menu mop" aria-labelledby="dropdown04">
<div class="row">
<div class="col-12">
<a class="dropdown-item" href="/" title="Popular">Popular</a>
<a class="dropdown-item" href="/" title="Top Rated">Top Rated</a>
<a class="dropdown-item" href="/" title="On TV">On TV</a>
<a class="dropdown-item" href="/" title="Airing Today">Airing Today</a>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres <i class="fa fa-angle-down" aria-hidden="true"></i></a>
<div class="dropdown-menu px-3" aria-labelledby="dropdown04">
<div class="row">
<div class="col-6 px-0">
<a class="dropdown-item" href="/" title="Action">Action</a>
<a class="dropdown-item" href="/" title="Adventure">Adventure</a>
<a class="dropdown-item" href="/" title="Animation">Animation</a>
<a class="dropdown-item" href="/" title="Comedy">Comedy</a>
<a class="dropdown-item" href="/" title="Crime">Crime</a>
<a class="dropdown-item" href="/" title="Documentary">Documentary</a>
<a class="dropdown-item" href="/" title="Drama">Drama</a>
<a class="dropdown-item" href="/" title="Family">Family</a>
<a class="dropdown-item" href="/" title="Fantasy">Fantasy</a>
<a class="dropdown-item" href="/" title="History">History</a>
</div>
<div class="col-6 px-0">
<a class="dropdown-item" href="/" title="Horror">Horror</a>
<a class="dropdown-item" href="/" title="Music">Music</a>
<a class="dropdown-item" href="/" title="Mystery">Mystery</a>
<a class="dropdown-item" href="/" title="Romance">Romance</a>
<a class="dropdown-item" href="/" title="Science Fiction">Science Fiction</a>
<a class="dropdown-item" href="/" title="TV Movie">TV Movie</a>
<a class="dropdown-item" href="/" title="Thriller">Thriller</a>
<a class="dropdown-item" href="/" title="War">War</a>
<a class="dropdown-item" href="/" title="Western">Western</a>
</div>
</div>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="/" title="Popular People">Popular People</a>
</li>
<li class="nav-item">
<a href="/signup.php" class="btn btn-theme ml-md-3">Register</i></a>
</li>
</ul>
</div>
</nav>
<section class="px-4r">
<div class="backdrop" style="background-image: url<?php echo $images;?>"></div>
<div class="container">
<div id="player-1" class="row">
<div class="embed-responsive embed-responsive-16by9">
<video id="play-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="none" width="600" height="315" poster="<?php echo $images;?>" data-setup="" webkit-playsinline="true" playsinline="true">
<source src="/view/include/extra/movie.mp4" type="video/mp4" label="SD">
<source src="/view/include/extra/movie.mp4" type="video/mp4" label="HD">
<track kind="subtitles" src="" srclang="en" label="English">
<track kind="subtitles" src="" srclang="fr" label="French">
<track kind="subtitles" src="" srclang="de" label="Germany">
<track kind="subtitles" src="" srclang="nl" label="Netherland">
<track kind="subtitles" src="" srclang="it" label="Italy">
</video>
</div>
</div>
<script>var playDuration=129*60;</script>
</div>
<div class="container py-4">
<div class="row">
<div class="col d-flex justify-content-center">
<a href="/signup.php" class="btn btn-outline-theme mx-1">Watch Now <i class="fa fa-film" aria-hidden="true"></i></a>
<a href="/signup.php" class="btn btn-outline-theme mx-1">Download <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
</div>
</div>
</div>
</section>
<section class="container p-3 p-md-4 rounded-lg mb-5" style="background-color: #0e1117">
<div class="row">
<div class="col-12">
<div class="row">
<div class="col-md-2 col-sm-4 col-3">
<img class="img-fluid" src="<?php echo $images_small;?>" alt="<?php echo $row['original_name'];?>" title="<?php echo $row['original_name'];?>">
</div>
<div class="col-md-10 col-sm-8 col-9">
<div class="entry-title d-flex flex-column-reverse flex-md-row justify-content-between">
<h1 class="h2"><?php echo $row['title'];?><span class="tiny text-muted"></span></h1>
<div class="sub-r">
<a href="/signup.php" class="btn subs">Subscribe to Watch | $0.00</a>
</div>
</div>
<div class="entry-info mb-3">
<div class="__rate">
<i class="fa fa-star text-warning"></i>
<i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star-o text-muted"></i><i class="fa fa-star-o text-muted"></i><i class="fa fa-star-o text-muted"></i><i class="fa fa-star-o text-muted"></i><i class="fa fa-star-o text-muted"></i> </div>
<div class="__info">
<span class="text-muted small">8.1/10</span> <span class="text-muted small">by 2072 users</span>
</div>
</div>
<div class="entry-desciption text-muted">
                            <p><?php echo $row['original_title'];?></p>
                        </div>
                        <div class="entry-table">
                            <ul>
                                <li>Released: <span><?php echo $row['release_date'];?></span></li>
                                <li>Runtime: <span><?php echo $row['runtime'];?> min.</span></li>
                                <li>Genre: <span><?php echo $genre;?></span></li>
                                <li>Stars: <span><?php echo $cast;?></span></li>
                                <li>Title: <span><?php echo $_ocim->short($row['overview']);?></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<div id="modal-watch" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body mopie-modal-content p-0 border" style="background-image: url('<?php echo $images;?>')">
<div class="align-items-center d-flex flex-column justify-content-center position-relative p-3 pt-5 text-center">
<div class="ex-icon">
<i class="fa fa-exclamation fa-4x" aria-hidden="true"></i>
</div>
<div class="h3 font-bold mt-3">Activate your FREE Account!</div>
<p>You must create an account to continue watching</p>
<a href="/signup.php" class="btn btn-lg bg-theme bg-hover-theme mb-4">Continue to watch for FREE ➞</a>
</div>
</div>
<div class="modal-footer align-items-center d-flex flex-column justify-content-center text-center text-dark">
<p class="text-large mb-1"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i><span class="text-large font-bold" style="font-weight: 700">Quick Sign Up!</span></p>
<p class="small">It takes less then 1 minute to Sign Up, then you can enjoy Unlimited Movies &amp; TV titles.</p>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container">
<div class="footer_wrapper d-flex flex-column flex-md-row">
<div class="copyright">Copyright © 2023 <span class="text-capitalize"></span> | All rights
reserved</div>
</footer>
<script src="/view/include/extra/s.js"></script>
</body>
</html>


