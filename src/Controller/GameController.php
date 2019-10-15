<?php
    namespace App\Controller;

    use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class GameController extends AppController
    {
        public function index () {
            $game = $this->Game->find()->first();
            $this->redirect(['action' => 'play', $game->id]);
        }

        public function play($game) {

            
        }

    }