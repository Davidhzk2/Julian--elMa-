<?php
    class ViewsController{
      private $action;

      public function __CONSTRUCT(){
        // $this->$action->
      }

      public function main(){
        require_once "views/include/scope.header.php";
        require_once "views/modules/index.php";
        require_once "views/include/scope.footer.php";
      }

      public function Docente(){
        require_once "views/include/docente/scope.header.php";
        // require_once "views/include/docente/index.php";
        require_once "views/include/docente/scope.footer.php";
      }

    }
  ?>
