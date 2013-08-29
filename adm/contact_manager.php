<?php

include_once('header.inc.php');

//Start Build Base URL
//?action=contacts{if $get.letter}&amp;letter={$get.letter}{/if}&amp;user_id={$item.user_id}
//$base_url = $_SERVER['QUERY_STRING'];
//echo($base_url);
//End Build Base URL

//Start Common Contact Menu

	$basename = SITE_URL.ADMIN_DIR.basename($_SERVER['PHP_SELF']);
if(!empty($_GET['user_id'])){
	
	$contact_common_menu = array(

//	'view_contact'=>array('title'=>'View Contact Details',
//	'onclick'=>'window.location=\''.$basename.'?action=view_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;info=general&amp;user_id='.$_GET['user_id'].'\''),

	'edit_contact'=>array('title'=>'Edit/View Contact Details',
	'onclick'=>'window.location=\''.$basename.'?action=edit_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;info=general&amp;user_id='.$_GET['user_id'].'\''),

	'send_mm'=>array('title'=>'Send Marketing Materials',
	'onclick'=>'window.location=\''.$basename.'?action=mm_email_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'email_contact'=>array('title'=>'Send Text Email',
	'onclick'=>'window.location=\''.$basename.'?action=email_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'note_contact'=>array('title'=>'Add Note',
	'onclick'=>'window.location=\''.$basename.'?action=note_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'impdate_contact'=>array('title'=>'Important Dates',
	'onclick'=>'window.location=\''.$basename.'?action=impdate_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'meeting_contact'=>array('title'=>'Schedule Meetings',
	'onclick'=>'window.location=\''.$basename.'?action=meeting_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'call_contact'=>array('title'=>'Schedule Phone Calls',
	'onclick'=>'window.location=\''.$basename.'?action=call_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'task_contact'=>array('title'=>'Schedule Tasks',
	'onclick'=>'window.location=\''.$basename.'?action=task_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'print_letter_contact'=>array('title'=>'Print Letters',
	'onclick'=>'window.location=\''.$basename.'?action=print_letter_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'print_envelopes_contact'=>array('title'=>'Print Envelopes',
	'onclick'=>'window.location=\''.$basename.'?action=print_envelopes_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),

	'print_contact'=>array('title'=>'Print Contact Info',
	'onclick'=>'window.open(\''.CM_TEMPLATES_DIR.'contact_info_print.php?user_id='.$_GET['user_id'].'\', \'_blank\')'),

	'delete_contact'=>array('title'=>'Delete Contact',
	'onclick'=>'if(confirm(\'Delete This?\'))window.open(\'contact_manager.php?action=contacts&amp;udelete='.$_GET['user_id'].'\', \'_self\')'),

	'campaign_contact'=>array('title'=>'Add To Campaign',
	'onclick'=>'window.location=\''.$basename.'?action=campaign_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),
         'referral_partner'=>array('title'=>'Add To Referral Partner',
	'onclick'=>'window.location=\''.$basename.'?action=add_referral_contact'.(($_GET['letter'])?'&amp;letter='.$_GET['letter']:'').'&amp;user_id='.$_GET['user_id'].'\''),
	);

	$smarty->assign('contact_common_menu', $contact_common_menu);
}
//End Common Contact Menu

//Start Common Contact Menu

if(!empty($_GET['g_id'])){

	$group_common_menu = array(

	'send_mm'=>array('title'=>'Send Marketing Materials',
	'onclick'=>'window.location=\''.$basename.'?action=mm_email_group&amp;g_id='.$_GET['g_id'].'\''),

	'email_group'=>array('title'=>'Send Text Email',
	'onclick'=>'window.location=\''.$basename.'?action=email_group&amp;g_id='.$_GET['g_id'].'\''),

	'note_group'=>array('title'=>'Add Note',
	'onclick'=>'window.location=\''.$basename.'?action=note_group&amp;g_id='.$_GET['g_id'].'\''),

	'impdate_group'=>array('title'=>'Important Dates',
	'onclick'=>'window.location=\''.$basename.'?action=impdate_group&amp;g_id='.$_GET['g_id'].'\''),

	'meeting_group'=>array('title'=>'Schedule Meetings',
	'onclick'=>'window.location=\''.$basename.'?action=meeting_group&amp;g_id='.$_GET['g_id'].'\''),

	'call_group'=>array('title'=>'Schedule Phone Calls',
	'onclick'=>'window.location=\''.$basename.'?action=call_group&amp;g_id='.$_GET['g_id'].'\''),

	'task_group'=>array('title'=>'Schedule Tasks',
	'onclick'=>'window.location=\''.$basename.'?action=task_group&amp;g_id='.$_GET['g_id'].'\''),

	'print_letter_group'=>array('title'=>'Print Letters',
	'onclick'=>'window.location=\''.$basename.'?action=print_letter_group&amp;g_id='.$_GET['g_id'].'\''),

	'print_envelopes_group'=>array('title'=>'Print Envelopes',
	'onclick'=>'window.location=\''.$basename.'?action=print_envelopes_group&amp;g_id='.$_GET['g_id'].'\''),

	'print_group'=>array('title'=>'Print Contact Info',
	'onclick'=>'window.open(\''.CM_TEMPLATES_DIR.'group_info_print.php?g_id='.$_GET['g_id'].'\', \'_blank\')'),

	'download_group'=>array('title'=>'Download Contacts',
	'onclick'=>'window.location=\''.$basename.'?action=download_group&amp;g_id='.$_GET['g_id'].'\''),

	);

	$smarty->assign('group_common_menu', $group_common_menu);
}

//End Common Group Menu


$action = GPCSSV('action', 'G');

if(isset($_POST["multiple_action"])){

	$action = $_POST["multiple_action"];

	if(count($_POST['user_id'])){

		$user_ids = '';

		foreach($_POST['user_id'] as $k=>$v) $user_ids.= '<input type="hidden" name="user_id['.$k.']" value="'.$v.'" />';

		$smarty->assign('user_ids', $user_ids);

	}

	if(count($_POST['g_id']) || count($_POST['group_id'])){

		$group_ids = '';
		foreach($_POST['g_id'] as $k=>$v) $group_ids.= '<input type="hidden" name="group_id['.$k.']" value="'.$v.'" />';
		foreach($_POST['g_id'] as $k=>$v) $group_ids.= '<input type="hidden" name="g_id['.$k.']" value="'.$v.'" />';
		$smarty->assign('group_ids', $group_ids);

	}

	$smarty->assign('multiple_action', $_POST["multiple_action"]);
	//dump($action, $_POST);
}

//$contact_managment_menu = array('contacts'=>'Contacts', 'groups'=>'Groups','find_a_contact'=>'Find A Contact',
//								'add_contact'=>'Add A Contact', 'import_contacts'=>'Import Contacts',
//								'manage_groups'=>'Manage Groups', 'send_email'=>'Send Email', 'purchase_new_list'=>'Purchase New List');

$contact_managment_menu = array('contacts'=>'Contacts', 'groups'=>'Groups','find_a_contact'=>'Find A Contact',
								'add_contact'=>'Add A Contact', 'import_contacts'=>'Import Contacts',
								'manage_groups'=>'Manage Groups', 'send_email'=>'Send Email','purchase_new_list'=>'Email Reports');

$smarty->assign('contact_managment_menu', $contact_managment_menu);

//Get Edit User Id
		if(!empty($_REQUEST['user_id']) && !is_array($_REQUEST['user_id'])) $edit_user_id = $_REQUEST['user_id'];

		//Start Check Form User - Editor Permissions
		/**if(!empty($edit_user_id)){
		$post_user_check = $engine->get_query_value("SELECT user_id FROM ".USERS." WHERE user_id=".db_quote($edit_user_id)." AND editor_id=".db_quote($editor_id));
			if(!$post_user_check) {  include_once('403.php'); die; }
		}**/
		//echo $edit_user_id;exit;
		if(!empty($edit_user_id)){
			if(!empty($_SESSION[ADMIN_SESSION]['user_id']) && $editor_id==1) 
			{
                            $post_user_check = $engine->get_query_value("SELECT user_id FROM ".USERS." WHERE user_id=".db_quote($edit_user_id));
			} 
                        else if($editor_id==2)
                        {
                            $post_user_check = $engine->get_query_value("SELECT user_id FROM ".USERS." WHERE user_id=".db_quote($editor_id));
                        }
                        else {
				$post_user_check = $engine->get_query_value("SELECT user_id FROM ".USERS." WHERE user_id=".db_quote($edit_user_id)." AND editor_id=".db_quote($editor_id));
			}
			//$post_user_check = $engine->get_query_value("SELECT user_id FROM ".USERS." WHERE user_id=".db_quote($edit_user_id)." AND editor_id=".db_quote($editor_id));
			if(!$post_user_check) {  include_once('403.php'); die; }
		}
		//End Check Form User - Editor Permissions


//Get Edit Group Id
		if(!empty($_REQUEST['g_id']) && !is_array($_REQUEST['g_id'])) $edit_group_id = $_REQUEST['g_id'];

		//Start Check Form Group - Editor Permissions
		
		
		/*if(!empty($edit_group_id)){
		$post_group_check = $engine->get_query_value("SELECT g_id FROM ".GROUPS." WHERE g_id=".db_quote($edit_group_id)." AND editor_id=".db_quote($editor_id));
			if(!$post_group_check) {  include_once('403.php'); die; }
		}*/
		//End Check Form Group - Editor Permissions

//Here lose $action var i hope this will work grrrrrrrrrrrrrrrrr
if($action == '') $action = $_GET['action'];

//I'm So sTired Of All This
		 if(!empty($edit_user_id)) $smarty->assign('user_full_name', $engine->get_query_value("SELECT CONCAT(f_name, ' ', m_name, ' ', l_name) as user_full_name FROM ".USERS." WHERE user_id=".db_quote($edit_user_id)));


switch ($action) {
	case 'add_contact':
	case 'edit_contact':
	case 'view_contact':
	case 'contacts':

		//Start Delete User
		if(!empty($_GET['udelete'])){
			$engine->simple_query("DELETE FROM ".USERS." WHERE user_id=".db_quote($_GET['udelete'])." AND editor_id=".db_quote($editor_id));
			@header('Location: contact_manager.php?action=contacts');
		}
		//End Delete User

		//Add/Edit Contact Menu Pages
		$add_edit_contact_menu = array('general'=>'Contact Information', 'personal'=>'Personal Information', 'purchase'=>'Loan Information',
									   'realtor'=>'Realtor Information', 'groups'=>'Groups/Interests', 'phone'=>'Phone Numbers',
									   'email'=>'Email Addresses', 'mail'=>'Mail Addresses', 'preferences'=>'Preferences');

		$smarty->assign('add_edit_contact_menu', $add_edit_contact_menu);

		//Start Include Pages
		//$tpl = 'contact_list.html';
		$info = GPCSSV('info', 'G');

		switch ($info) {
			case 'general':

				include_once(CONTACT_MANAGER_PAHT . 'contact_general.php');

				break;

			case 'personal':

				include_once(CONTACT_MANAGER_PAHT . 'contact_personal.php');

				break;

			case 'purchase':

				include_once(CONTACT_MANAGER_PAHT . 'contact_purchase.php');

				break;

			case 'realtor':

				include_once(CONTACT_MANAGER_PAHT . 'contact_realtor.php');

				break;

			case 'groups':

				include_once(CONTACT_MANAGER_PAHT . 'contact_groups.php');
				$contact_form_template = CONTACT_MANAGER_DIR . 'contact_groups.html';

				break;

			case 'phone':

				include_once(CONTACT_MANAGER_PAHT . 'contact_phone.php');

				break;

			case 'email':

				include_once(CONTACT_MANAGER_PAHT . 'contact_email.php');

				break;

			case 'mail':

				include_once(CONTACT_MANAGER_PAHT . 'contact_mail.php');

				break;

			case 'preferences':

				include_once(CONTACT_MANAGER_PAHT . 'contact_preferences.php');

				break;

				default:

				if( $action == 'add_contact' )
					include_once(CONTACT_MANAGER_PAHT . 'contact_general.php');
				else
					include_once(CONTACT_MANAGER_PAHT . 'contact_summary.php');

				break;
		}
		//End Include Pages

			if(!empty($contact_form_template)) $smarty->assign('contact_form_template', $smarty->fetch($contact_form_template));
			include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'note_contact':

		include_once(CONTACT_MANAGER_PAHT . 'contact_note.php');
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;
            
        case 'add_referral_contact':

		include_once(CONTACT_MANAGER_PAHT . 'referral_contact.php');
		break;

	case 'download_group':

		include_once(CONTACT_MANAGER_PAHT . 'group_download.php');
	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'multi_group_add':

		include_once(CONTACT_MANAGER_PAHT . 'contact_groups.php');
	   include_once(CONTACT_MANAGER_PAHT . 'multi_group_add.php');
	   include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'contact_multi_download':

	   include_once(CONTACT_MANAGER_PAHT . 'group_download.php');
	   include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'group_multi_download':

		include_once(CONTACT_MANAGER_PAHT . 'group_download.php');
	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'contact_multi_print':

		$smarty->assign('user_ids', $_POST['user_id']);
		$smarty->assign('contact_form_template', $smarty->fetch(CONTACT_MANAGER_DIR . 'contact_multi_print.html'));

		include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'group_multi_print':

		$smarty->assign('group_ids', $_POST['g_id']);
		$smarty->assign('contact_form_template', $smarty->fetch(CONTACT_MANAGER_DIR . 'group_multi_print.html'));

		include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'contact_multi_delete':

	   //dump($_POST['user_id']);
	   foreach($_POST['user_id'] as $delete_user_id)
           {    
                $engine->simple_query("DELETE FROM ".CAMPAIGNS_PREBUILT_TO_USERS." WHERE editor_id=".db_quote($editor_id)." AND user_id=".db_quote($delete_user_id));
                $engine->simple_query("DELETE FROM ".USERS." WHERE editor_id=".db_quote($editor_id)." AND user_id=".db_quote($delete_user_id));
           }
	   include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'email_contact':

		//echo $edit_user_id;
		$edit_user_email = '';
		include_once(CONTACT_MANAGER_PAHT . 'send_email.php');
		$contact_form_template = CONTACT_MANAGER_DIR . 'send_email.html';
		$smarty->assign('contact_form_template', $smarty->fetch($contact_form_template));
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'mm_email_contact':
	case 'mm_email_group':


		//echo $edit_user_id;
		$edit_user_email = '';
		include_once(CONTACT_MANAGER_PAHT . 'mm_send_email.php');
		$contact_form_template = CONTACT_MANAGER_DIR . 'mm_send_email.html';
		$smarty->assign('contact_form_template', $smarty->fetch($contact_form_template));

		if($action == 'mm_email_contact')include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');
		if($action == 'mm_email_group')include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'campaign_contact':

		include_once(CONTACT_MANAGER_PAHT . 'contact_campagn.php');
		$contact_form_template = CONTACT_MANAGER_DIR . 'contact_campaign.html';
		$smarty->assign('contact_form_template', $smarty->fetch($contact_form_template));
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'email_group':

		include_once(CONTACT_MANAGER_PAHT . 'send_email.php');
		$contact_form_template = CONTACT_MANAGER_DIR . 'send_email.html';
		$smarty->assign('contact_form_template', $smarty->fetch($contact_form_template));
	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'task_contact':
	case 'call_contact':
	case 'meeting_contact':
	case 'impdate_contact':


		include_once(CONTACT_MANAGER_PAHT . 'contact_staff.php');
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'task_group':
	case 'call_group':
	case 'meeting_group':
	case 'impdate_group':

		$tpl = 'groups.html';
		include_once(CONTACT_MANAGER_PAHT . 'contact_staff.php');
	  	include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'note_group':

		$tpl = 'groups.html';
		include_once(CONTACT_MANAGER_PAHT . 'contact_note.php');
		include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'print_letter_contact':

		include_once(CONTACT_MANAGER_PAHT . 'contact_print_letters.php');
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'print_letter_group':

		include_once(CONTACT_MANAGER_PAHT . 'contact_print_letters.php');
	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'print_envelopes_contact':

		include_once(CONTACT_MANAGER_PAHT . 'contact_print_envelopes.php');
	    include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;

	case 'print_envelopes_group':

		include_once(CONTACT_MANAGER_PAHT . 'contact_print_envelopes.php');
	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'mailing_list':

	    include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'purchase_new_list':
            
            $email_report_menu = array('total_report'=>'Total Email Report', 'detail_report'=>'Detailed Email Report');

            $info = GPCSSV('info', 'G');

            switch ($info) {

                    case 'total_report':
                            $tpl = 'contact_total_report.html';
                            include_once(CONTACT_MANAGER_PAHT . 'contact_total_report.php');                            
                            break;

                    case 'detail_report':
                            $tpl = 'contact_detail_report.html';
                            include_once(CONTACT_MANAGER_PAHT . 'contact_detail_report.php');                            
                            break;

                    case 'non_delivered':
                            $tpl = 'contact_nondelivered_report.html';
                            include_once(CONTACT_MANAGER_PAHT . 'contact_nondelivered_report.php');                            
                            break;
            }
            break;

	case 'find_a_contact':

		//Search Contact Menu Pages
		$search_contact_menu = array('general'=>'Contact Information', 'personal'=>'Personal Information', 'groups'=>'Groups/Interests',
										'purchase'=>'Loan Information', 'realtor'=>'Realtor Information', 'phone'=>'Phone Numbers', 'all'=>'All');

		$smarty->assign('search_contact_menu', $search_contact_menu);

		$tpl = 'contact_find.html';

		include_once(CONTACT_MANAGER_PAHT . 'contact_find.php');

		break;


	case 'send_email':

		//Send Email Menu Pages
		$email_menu = array('mm'=>'Marketing Material Email', 'text'=>'Plain Text Email');

		$smarty->assign('email_menu', $email_menu);

		$tpl = 'send_email.html';

		include_once(CONTACT_MANAGER_PAHT . 'send_email.php');

		break;

	case 'mm_send_email':


		$tpl = 'mm_send_email.html';

		include_once(CONTACT_MANAGER_PAHT . 'mm_send_email.php');

		break;
		
	case 'add_campaign':
		
		$tpl = 'addgroups_list.html';
		
		include_once(CONTACT_MANAGER_PAHT . 'manage_groups.php');
		
		break;
		
	case 'groups':

		include_once(CONTACT_MANAGER_PAHT . 'groups.php');

		break;

	case 'manage_groups':

		$tpl = 'manage_groups.html';

		include_once(CONTACT_MANAGER_PAHT . 'manage_groups.php');

		break;

	case 'import_contacts':

		$tpl = 'contacts_import.html';

		include_once(CONTACT_MANAGER_PAHT . 'contacts_import.php');

		break;

	default:

		include_once(CONTACT_MANAGER_PAHT . 'contact_list.php');

		break;
}
//echo $tpl;
$smarty->assign('get', $_GET);
$smarty->assign('post', $_POST);
$smarty->assign('contact_manager', $smarty->fetch(_SMARTY_TEMPLATES_PATH . CONTACT_MANAGER_DIR . $tpl));
$engine->display_page('contact_manager.html', 'Customer Opportunity &amp; Retention Engine');
?>
