<?php
function oc_title() {
    global $config, $do;
    if ( isset($do) ) {
        $title	= ucwords( htmlspecialchars( $do ) ). ' | ' . $config->meta_title;
    }else{
	$title	= $config->meta_title;
    }
    return $title;			
}
function oc_description() {
    global $config, $do;
    if ( isset($do) ) {
        $title	= ucwords( htmlspecialchars( $do ) ) . ' ' . $config->meta_description;
    }else{
	$title	= $config->meta_description;
    }
    return $title;			
}
function seo_movie( $id, $query ) {
        global $config,$homeurl,$_ocim;
        if ( $config->seo == 'true' ):
                return $homeurl . '/'.$config->url_movie.'/'.$id.'/'.$_ocim->permalink($query).'.html'; 
        else:
                return $homeurl . '/?do=watch&action=movie&id='.$id;
        endif;
}
function seo_tv( $id, $query ) {
        global $config,$homeurl,$_ocim;
        if ( $config->seo == 'true' ):
                return $homeurl . '/'.$config->url_tv.'/'.$id.'/'.$_ocim->permalink($query).'.html'; 
        else:
                return $homeurl . '/?do=watch&action=tv&id='.$id;
        endif;
}
?>