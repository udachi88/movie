<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('include/tmdb-api.php');
require_once('include/function.php');
require_once('include/meta.php');

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );

/**
* Construct Class
*/
$_ocim   = new _Ocim;
$config  = new stdClass();
$config->prefix = 'ocim_';

$config->templates        = 'v3'; //template v1,v2 or v3

/**
* Meta Seo Header
*/
$config->title            = 'POLICEADC MODS'; //Logo Title
$config->meta_title       = 'Watch Movies and TV Series Stream Online'; //Meta Home Title
$config->meta_description = 'Watch movies and tv series stream full hd online for free';
$config->meta_keywords    = 'watch movie online,watch movie online, watch full movie,tv series, watch movie free, tv show';

$config->meta_playing     = 'Now Playing | Watch Movies and TV Series Stream Online'; //Meta playing Title
$config->meta_toprated    = 'Toprated Movies | Watch Movies and TV Series Stream Online'; //Meta toprated Title
$config->meta_upcoming    = 'Upcoming Movies | Watch Movies and TV Series Stream Online'; //Meta upcoming Title

/**
* Permalink
*/
$config->seo              = 'false'; // true or false
$config->url_movie        = 'movie'; // true or false
$config->url_tv           = 'tv'; // true or false

/**
* Other
*/
$config->email            = 'dmcamp33@gmail.com';
$config->url_affliasi     = '//look.ufinkln.com/offer?prod=3&ref=5100580&sub_id=lp1'; //if user from US,NO,FR,DE,TR,IT,DK,BE,NL,JP,TT,KW,AT,PE,SE,FI,IE,NZ,AE,QA,GY,CH,LU,CA,MX
$config->url_default      = '//look.ufinkln.com/offer?prod=3&ref=5100580&sub_id=lp1'; //example if user from ID,MAL,THA,ID,IN,ZA,BR,SA,TH,MY,LK,PH,BN,PT,CL,CY,JM,EC,CO,AU,ES,SG,PR,GB,KY,BS,BM

$config->dmca             = '#'; // ganti nama domainnya, pisahkan dengan baris baru, example --> http://prntscr.com/8ko225

/**
* TMDB Configuration
*/
// Example array(
//	"api 1",
//	"api 2",
//	); 

$config->tmdbapi = array(
	"4e0167e4783aaf63e43f8931ec2aa54d"
	); 

$apikey      = $config->tmdbapi[mt_rand(0, count($config->tmdbapi) - 1)];
$language    = 'en';
$tmdb        = new TMDB($apikey, $language, true);

if($config->dmca != null){
        if($_ocim->strposa($_ocim->canonical(), preg_split('/\n|\r\n?/',$config->dmca) )) :
              //  header(Location: /);
        endif;
}