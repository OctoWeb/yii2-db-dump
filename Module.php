<?
namespace octoweb\DbDump;

class Module extends \yii\base\Module{
    
    public $controllerNamespace = 'octoweb\DbDump\controllers';
    public $path='@vendor/../_backup_db/';
    

    public function init(){
        parent::init();
    }
    
}