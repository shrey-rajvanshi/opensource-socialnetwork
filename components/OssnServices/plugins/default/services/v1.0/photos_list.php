<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright © SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$album_guid = input('album_guid');
if($album_guid) {
		$albums = new OssnAlbums;
		$photos = $albums->GetAlbum($album_guid);
		if(isset($photos->photos)) {
				$list = array();
				foreach($photos->photos as $photo) {
						$image   = str_replace('album/photos/', '', $photo->value);
						$image   = ossn_site_url() . "album/getphoto/{$album_guid}/{$image}?size=album";
						$lists[] = array(
								'guid' => $photo->guid,
								'image_url' => $image
						);
				}
				$params['OssnServices']->successResponse(array(
						'album' => $photos->album,
						'list' => $lists
				));
		}
}
$params['OssnServices']->throwError('103', ossn_print('ossnservices:noresponse'));