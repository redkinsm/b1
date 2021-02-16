<?php
namespace app\commands;

use app\daemons\CommentNotif;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use yii\console\Controller;

class DaemonsController extends Controller
{
    public function actionStartCommentDaemons()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new CommentNotif()
                )
            ),
            \Yii::$app->params['wsPort']
        );

        $server->run();
    }
}