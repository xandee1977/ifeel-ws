<?php
header('Access-Control-Allow-Origin: *'); // Allow Cross-Domain
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-type: application/json; charset=utf8", true);// Setting charset

//ini_set('max_execution_time', 0);
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting( E_ALL );
//error_reporting(1);

/* Returns data on JSONP format */
include_once 'configs/WS_CONF.php';
include_once 'class/db.class.php';
require_once(SMARTY_PATH);

$smarty = new Smarty();
$database = new Database();

$status = "OK";
$message = "Dale!";

try {
    if( !isset($_REQUEST['service'])) {
        throw new Exception("Por favor informe o service.");
    }
    if( !isset($_REQUEST['action'])) {
        throw new Exception("Por favor informe o action.");
    }

    // Verifying the service
    switch($_REQUEST['service']) {
        case 'comment':
            include_once 'class/comments.class.php';
            $comment_obj = new Comments();
            switch($_REQUEST['action']) {
                case 'list':
                    $parent = 0;
                    if(isset($_REQUEST['comment_id'])) {
                        $parent = $_REQUEST['comment_id'];
                    }
                    
                    $start = 0; // Page to start
                    if(isset($_REQUEST['start'])) {
                        $start = $_REQUEST['start'];
                    }
                    $limit = 20; // Registers per page
                    if(isset($_REQUEST['limit'])) {
                        $limit = $_REQUEST['limit'];
                    }                    

                    $list_comments = $comment_obj->listComments($parent, $start, $limit);
                    $smarty->assign("list_comments", $list_comments);
                break;

                case 'show':
                    if( !isset($_REQUEST['comment_id'])) {
                        throw new Exception("Por favor informe o comment_id.");
                    }
                    $comment = $comment_obj->showComment($_REQUEST["comment_id"]);
                    if(!$comment) {
                        throw new Exception("Erro ao carregar comentario.");
                    }

                    // Get the comment parents
                    $parent_list = array();
                    $comment_obj->getParents($comment["id"], $parent_list);

                    $smarty->assign("parent_list", array_reverse($parent_list));
                    $smarty->assign("comment", $comment);
                break;
                case 'save':
                    $json_data = $HTTP_RAW_POST_DATA;
                    $array_data = json_decode($json_data, true);                

                    $array_data["gcm_id"] = null;
                    if(isset($_REQUEST["gcm_id"])) {
                        $array_data["gcm_id"] = $_REQUEST["gcm_id"];
                    }

                    $comment_id = $comment_obj->saveComment($array_data);
                    if(!$comment_id) {
                       throw new Exception("Erro ao salvar comentario."); 
                    } else {
                        $comment = $comment_obj->showComment($comment_id);
                        if(!$comment) {
                            throw new Exception("Erro ao carregar comentario.");
                        }
                        /*
                        // Se recebeu o ID do GCM
                        if(isset($_REQUEST["gcm_id"])) {
                            include_once 'class/GCM.class.php';
                            $gcm = new GCM(GCM_API_KEY);
                            $gcm->setRegistrationIds([$_REQUEST["gcm_id"]]);
                            $gcm_result = $gcm->sendMessage("Mensagem recebida");
                        }
                        */
                        $smarty->assign("comment", $comment);
                    }
                break;
            }
        break;
        case 'push':
            switch($_REQUEST['action']) {
                case 'register':
                    if( !isset($_REQUEST['gcm_id'])) {
                        throw new Exception("Por favor informe o gcm_id.");
                    }                
                    $smarty->assign("gcm_id", $_REQUEST["gcm_id"]);
                break;
            }            
        break;
        default:
            // Case passed service (and|or) action are unexpected
            $status = "NOT_OK";
            $message = "Action (and|or) Service was unexpected.";
            $dataPartial = "error.tpl";
        break;
    }

    // Defining sub-template "service-action.tpl"
    $dataPartial = sprintf("%s-%s.tpl", $_REQUEST['service'], $_REQUEST['action']);    
} catch (Exception $e) {
    $status = "NOT_OK";
    $message = $e->getMessage();
    $dataPartial = "error.tpl";
}

// Show template
$smarty->assign("status", $status);
$smarty->assign("message", $message);
$smarty->assign("request", json_encode($_REQUEST));
$smarty->assign("dataPartial", $dataPartial);

//$smarty->display("result.tpl");
$output  = $smarty->fetch("result.tpl");

// If passa callback returns JSONP
if(isset($_REQUEST['callback'])) {
    $output  = sprintf("%s(%s);", $_REQUEST['callback'], $output);
} else {
    $output  = sprintf("%s", $output);    
}
echo $output;
?>
