<?php
    namespace App\Controller;

    use App\Controller\AppController;
use App\Model\Entity\Empire;
use Cake\Controller\Component\AuthComponent;
use Cake\ORM\TableRegistry;


class GameController extends AppController
    {
        public function index () {
            $game = $this->Game->find()->first();
            $this->redirect(['action' => 'play', $game->id]);
        }

        public function play($game) {
           $userid = $this->Auth->user('id');
        
           $users = TableRegistry::getTableLocator()->get('Users');
           $empire = $users->get($userid)->empire;
           if($empire == null) {
               $empires = TableRegistry::getTableLocator()->get('empires');
               $empire = $empires->newEntity(['uid' => $userid]);
               $empires->save($empire);
           }
           
        }

    }