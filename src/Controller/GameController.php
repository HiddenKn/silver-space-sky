<?php
    namespace App\Controller;

    use App\Controller\AppController;
use App\Model\Entity\Empire;
use Cake\Controller\Component\AuthComponent;
use Cake\ORM\TableRegistry;
use Psr\Log\LogLevel;

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
               $games = TableRegistry::getTableLocator()->get('Game');
               $current_game = $games->get($game);

               $empires = TableRegistry::getTableLocator()->get('empires');
               
               $nempire = $empires->newEntity(['uid' => $userid]);
               $nempire->game = $current_game;
               
               $empires->save($nempire);

               $this->log("Automatically created new empire for user $userid.", LogLevel::INFO, $nempire);
           }
           
        }

    }