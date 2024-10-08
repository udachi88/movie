<?php require_once('include/tvseries.php');?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Watch <?php echo $row['name'];?><?php echo $movie_title;?> <?php echo $config->meta_title;?></title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="/templates/v3/style.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
	<script src="/include/js/css3-mediaqueries.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <b><a class="navbar-brand" href="/"><img width=85 height=10 src='/include/images/starfox.png' /><?php echo $config->title;?></a></b>
                </div><!-- navbar-header -->
                <div class="navbar-collapse collapse" id="searchbar">
                        <ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
					</li>
                                <li>&nbsp;</li>
                        </ul>
                        <form class="navbar-form" method="get" action="/search.php">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input class="form-control search-form" name="q" placeholder="Type Movie title here?" autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- nav-collapse -->
        </div><!-- container -->
</div>
		
<div class="container box-container">

	<div class="row">

		<div class="col-md-12">

        		<div id="player">
                		<div class="vcontainer">
                        		<div id="streaming" data-toggle="modal" data-target="#modal-watch">
                                		<img class="img-backdrop" src="<?php echo $images;?>" alt="<?php echo $row['name'];?><?php echo $movie_title;?>" width="720" height="524" itemprop="image">
                                		<span class="mpaa">hd 720p</span>
                                		<div class="watermark"><?php echo $_ocim->get_domain($_ocim->home_url());?></div>
                                		<div class="inline play-button registration">
                                        		<span class="player-loader"></span>
                                        		<i class="fa fa-youtube-play"></i>
                                		</div>
                        		</div>

                            		<div class="progress progress-striped active">
                                		<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">45% Complete</span>
                                		</div>
                            		</div>
                        		<div id="controls">
                                		<div class="control-wrap">
                                                	<div class="cplay"></div>
                                                	<div class="cvolu">
                                                	<div class="cvol"></div>
                                                        	<div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div>
							</div>
							<div class="ctime">
								<span class="cmin" title="0">00:00:00</span> / <span class="cmax"><?php echo $runtime;?></span>
							</div>
                                                	<div class="progres">
								<span class="buffering"><span class="progressbar"></span></span>
							</div>
							<div class="cfull"></div>
							<div class="cset"><span class="chade"></span></div>
                                		</div>
                        		</div>
                		</div><br>
                		<center>
<div class="available-formats-img-mobile"><img src="/include/images/available-formats-img.png" class="img-responsive"> </div></center>
        		</div>
        		<h1 class="text-center media-heading" style="margin-top: 20px;margin-bottom: 15px;"> Watch Full Series Online for Free</h1>	
					<tr>
						<center><td class="text-center"><div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-watch"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg" target="" href="<?php echo $_ocim->home_url();?>/signup.php"><i class="fa fa-youtube-play"></i> Watch Now </a></td></center>
					</tr>
			<center><div class="row" style="margin-top:25px;">
			<div class="col-sm-3 col-xs-12">			
                    <div class="pw-widget pw-counter-vertical">         
                    <a class="pw-button-facebook pw-look-native"></a>           
                    <a class="pw-button-twitter pw-look-native"></a>             
                    <a class="pw-button-post-share"></a>        
                    </div>
                    <script src="https://i.po.st/static/v3/post-widget.js#publisherKey=ef9n2ohq0tuspgqbi51n&retina=true" type="text/javascript"></script></center>			
        <ul class="nav nav-tabs" style="margin-top:25px;">
        	<li class="active"><a data-toggle="tab" href="#sectionA">Film Info</a></li>
        	<li><a data-toggle="tab" href="#sectionB">Season List</a></li>
        	<?php if (!$_id[2] AND $row2 != null ):?><li><a data-toggle="tab" href="#sectionC">Episode List</a></li><?php endif;?>
	</ul>

	<div class="tab-content">
        	<div id="sectionA" class="tab-pane fade in active">
			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-3 col-xs-12">
					<img src="<?php echo $images_small;?>" alt="<?php echo $row['original_name'];?><?php echo $movie_title;?>" class="img-responsive thumbnail" style="margin:0 auto;">
                                                <div class="rating-stars text-center">
				                        <?php
				                        for($ki=1;$ki<=$index_rating;$ki++){?><i class="fa fa-star"></i><?php }?><?php for($ei=$empty_rating;$ei>=1;$ei--){?><i class="fa fa-star-o"></i><?php $ki++; }
                                                        ?>
                                                </div> <!-- rating-stars -->
                                                <div class="rating-vote text-center">
                                                        <?php echo $vote_average;?>/10 by <?php echo $vote_count;?> users
                                                </div> <!-- rating-vote -->
				</div><!-- col-sm-3 -->
				<div class="col-sm-9 col-xs-12">
					<table class="table table-striped">
                                                <tbody>
							<tr><th width="150">Title</th><td>:</td><td><?php echo $row['name'];?></td></tr>
							<tr><th>Genre</th><td>:</td><td> <?php echo $genre;?></td></tr>
                                                        <?php if ($_id[2] != null):?>
                                                        <tr>
                                                                <th>Air Date</th><td>:</td>
                                                                <td><?php echo $row3['air_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Season Number</th><td>:</td>
                                                                <td><?php echo $row3['season_number'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Episodes Number</th><td>:</td>
                                                                <td><?php echo $row3['episode_number'];?></td>
                                                        </tr>
                                                        <?php elseif ($_id[1] != null): ?>
                                                        <tr>
                                                                <th>Air Date</th><td>:</td>
                                                                <td><?php echo $row2['air_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Season Number</th><td>:</td>
                                                                <td><?php echo $row2['season_number'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Total Episodes</th><td>:</td>
                                                                <td><?php echo $episodec;?></td>
                                                        </tr>
                                                        <?php else: ?>
							<tr><th>First Air Date</th><td>:</td><td> <?php echo $row['first_air_date'];?></td></tr>
							<tr><th>Last Air Date</th><td>:</td><td> <?php echo $row['last_air_date'];?></td></tr>
							<tr><th>Number of Seasons</th><td>:</td><td> <?php echo $row['number_of_seasons'];?></td></tr>
							<tr><th>Number of Episodes</th><td>:</td><td> <?php echo $row['number_of_episodes'];?></td></tr>
							<tr><th>Runtime</th><td>:</td><td> <?php echo $row['episode_run_time'][0];?> min</td></tr>
                                                        <?php endif;?>
							<tr><th>Overview</th><td>:</td><td> <?php echo $overview;?></td></tr>
							<tr><th>Stars</th><td>:</td><td> <?php echo $cast;?></td></tr>							
 			                        </tbody>
					</table>
				</div><!-- col-sm-9 -->
				</div><!-- row -->
			</div><!-- col-md-12 -->
			
			</div><!-- row -->
		</div><!-- sectionA  -->

		<div id="sectionB" class="tab-pane fade" style="padding-bottom:25px;">
                        <div class="list-group" style="margin-top: 10px;">
                        <?php 
                        if ($row['seasons']!=null) { 
                        foreach($row['seasons'] as $resultseasons) {
                        if( $resultseasons['season_number'] == 0 ) {
                                continue;
                        }
                        ?>
				<a class="list-group-item" href="<?php echo seo_tv($row[id].'-'.$resultseasons['season_number'],$row[original_name]);?>" itemprop="season" itemscope itemtype="http://schema.org/TVSeason">
					<span class="badge"><?php echo date('F d, Y', strtotime($resultseasons['air_date']));?></span>
                                        <span itemprop="name">Season <?php echo $resultseasons['season_number'];?></span> 
                                        <span class="label label-info"><?php echo $resultseasons['episode_count'];?> Episodes</span>	
				</a>		
                        <?php 
                        }
                        }
                        ?>
			</div>
		</div><!-- sectionB  -->

        	<?php if (!$_id[2] AND $row2 != null ):?>
		<div id="sectionC" class="tab-pane fade">
		<div class="col-md-12">
		<h3 class="text-center">All Episodes on season <?php echo $row2['season_number'];?></h3>
			<?php
                  	if ($row2['episodes']!=null) {
                      		foreach( $row2['episodes'] as $episodes) {

                                        if ($episodes['still_path']!=null) {
                                           	$still_path = '//image.tmdb.org/t/p/w185'.$episodes['still_path'];
                                       	}else{
                                           	$still_path = '/include/images/no-backdrop.png';
                                        }	
                        	?>
				<div class="col-md-4 col-sm-6 col-xs-12 media">
                                        <div class="media-left">
						<a href="<?php echo seo_tv($row[id].'-'.$row2['season_number'].'-'.$episodes['episode_number'],$row[original_name]);?>" title="<?php echo $episodes['name'];?>"><img src="<?php echo $still_path;?>" alt="<?php echo $episodes['name'];?>" class="media-object" style="min-height:85px;max-height:85px;"></a>
			                </div>
                                        <div class="media-body">
						<h4 class="media-heading" style="font-size: 14px;font-weight: 700;"><a href="<?php echo seo_tv($row[id].'-'.$row2['season_number'].'-'.$episodes['episode_number'],$row[original_name]);?>" title="<?php echo $episodes['name'];?>">Episode <?php echo $episodes['episode_number'];?> : <?php echo $episodes['name'];?></a></h4>
						<div style="font-size:11px;"><?php echo date('F d, Y', strtotime($episodes['air_date']));?></div>
			                </div>

				</div>
				<?php 
                                }   
                        }
                        ?>
		</div>
        	</div><!-- sectionC  -->
        	<?php endif;?>
	</div><!-- tab-content  -->

</div>
</div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modal-watch" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content clearfix">
                <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH FULL TV SERIES!</h4>
                </div>
                <div class="modal-body clearfix">
                        <div class="row">
                                <div class="col-md-6" id="login">
                                        <img class="img-responsive" src="<?php echo $images;?>">
                                        <hr>
                                        <h5>Member Login</h5>
                                        <div class="form-group">
                                                <input type="text" class="form-control input-sm" id="userid" placeholder="username">
	                                </div>
                                        <div class="form-group">
                                                <input type="password" class="form-control input-sm" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                                <span class="onload label label-info" style="display: none;">Please wait...</span>
                                                <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span>
                                        </div>
                                        <input type="submit" id="submov" class="btn btn-success" value="Log me in">
                                </div>
		
                                <div class="col-md-6">
                                        <ul class="list-group">
						<li class="list-group-item">
							<h4 class="list-group-item-heading">High Quality TV Series</h4>
							<p class="list-group-item-text">All of the TV Series are available in the superior HD Quality or even higher!</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch Without Limits</h4>
							<p class="list-group-item-text">You will get access to all of your favourite the TV Series without any limits.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">100% Free Advertising</h4>
							<p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch anytime, anywhere</h4>
							<p class="list-group-item-text">It works on your TV, PC, or MAC!</p>
						</li>							
					</ul>
                                </div>
                        </div>
                </div>
                <div class="modal-footer bg-info">
                        <a class="btn btn-danger" href="<?php echo $_ocim->home_url();?>/signup.php">Sign Up For Free</a>
                </div>
        </div>
</div>
<?php include('footer.php');?>