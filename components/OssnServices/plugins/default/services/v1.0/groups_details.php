
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
if(!com_is_active('OssnGroups')) {
                $params['OssnServices']->throwError('201', ossn_print('ossnservices:component:notfound'));
}
$group_guids = input('group_guids');
$guid       = input('guid');
$user  = ossn_user_by_guid($guid);
$groups = array();
if($user) {

    foreach($group_guids as $group_guid){
        $group = ossn_get_group_by_guid($group_guid);
        if(!$group) {
                $params['OssnServices']->throwError('200', ossn_print('ossnservices:invalidgroup'));
    
        }
        $group->coverURL();
        $group->ismember       = $group->isMember(NULL, $guid);
		$group->request_exists = $group->requestExists($guid, true);
		$group->total_requests = $group->countRequests();
        array_push($groups,$group);
    }
    
    $params['OssnServices']->successResponse(array(
        'groups' => $groups
    ));
    
}else {
    $params['OssnServices']->throwError('103', ossn_print('ossnservices:nouser'));
}



