<?php
namespace app\components\widgets;

use yii\base\Widget;
use app\modules\pages\models\Tree;
use Yii;


class MenuPagesWidget extends Widget{
    public $rootPages;
    public $pages;

    public function init(){
        parent::init();

        $db = Yii::$app->db;


        $cacheKey = 'pagesmenu_data';
        $cacheKey2 = 'pagesmenu_data2';
        $this->rootPages  = Yii::$app->cache->get($cacheKey);
        if(!$this->rootPages) {
            $params = [':limit' => 3];
            $this->rootPages = $db->createCommand("SELECT * FROM tree WHERE parent = '0' LIMIT :limit")->bindValues($params)->queryAll();
            Yii::$app->cache->set($cacheKey, $this->rootPages, 3600);
        }

        $rootId = '';
        if(is_array($this->rootPages)&&count($this->rootPages)>0){
            foreach($this->rootPages as $r){
                $rootId.= "'".$r['id']."',";
            }
            $rootId = rtrim($rootId,",");
            if(!empty($rootId)){
                $this->pages  = Yii::$app->cache->get($cacheKey2);
                if(!$this->pages) {
                    $this->pages = $db->createCommand("SELECT * FROM tree WHERE parent IN ($rootId) ")->queryAll();
                    Yii::$app->cache->set($cacheKey2, $this->pages, 3600);
                }
            }
        }

    }

    public function run(){
        return $this->render('menupages',[
            'rootPages'=>$this->rootPages,
            'pages'=>$this->pages,
        ]);
    }
}