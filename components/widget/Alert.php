<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.03.2018
 * Time: 14:02
 */
namespace app\components\widget;

use Yii;
use yii\base\Widget;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class Alert extends Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - key: the name of the session flash variable
     * - value: the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $alertTypes = [
        'primary '  => 'alert-primary',
        'danger'    => 'alert-danger',
        'success'   => 'alert-success',
        'info'      => 'alert-info',
        'warning'   => 'alert-warning',
        'custom'    => 'text-violet-800 alpha-violet'
    ];
    /**
     * @var array the options for rendering the close button tag.
     * Array will be passed to [[\yii\bootstrap\Alert::closeButton]].
     */
    public $closeButton = [];


    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $flash) {
            if (!isset($this->alertTypes[$type])) {
                continue;
            }

            foreach ((array) $flash as $i => $message) {
                echo
                '<div class="alert no-border '. $this->alertTypes[$type] .'">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span>
                        <span class="sr-only">Закрыть</span>
                    </button>'.
                    $message.'
                </div>';
            }

            $session->removeFlash($type);
        }
    }
}
