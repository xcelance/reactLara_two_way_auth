<?php
/*
*   07.11.2019
*   MenusMenu.php
*/
namespace App\Http\Menus;

use App\MenuBuilder\MenuBuilder;
use Illuminate\Support\Facades\DB;
use App\Models\Menus;
use App\MenuBuilder\RenderFromDatabaseData;

class GetSidebarMenu implements MenuInterface{

    private $mb; //menu builder
    private $menu;

    public function __construct(){
        $this->mb = new MenuBuilder();
    }

    private function getMenuFromDB($menuName, $role){
        $this->menu = Menus::join('menu_role', 'menus.id', '=', 'menu_role.menus_id')
            ->join('menulist', 'menulist.id', '=', 'menus.menu_id')
            ->select('menus.*')
            ->where('menulist.name', '=', $menuName)
            ->where('menu_role.role_name', '=', $role)
            ->orderBy('menus.sequence', 'asc')->get();       
    }

    private function getGuestMenu($menuName){
        $this->getMenuFromDB($menuName, 'guest');
    }

    private function getDeveloperMenu($menuName){
        $this->getMenuFromDB($menuName, 'Developer');
    }

    private function getManagerMenu($menuName){
        $this->getMenuFromDB($menuName, 'Manager');
    }

    private function getDesignerMenu($menuName){
        $this->getMenuFromDB($menuName, 'Designer');
    }

    private function getTraineeMenu($menuName){
        $this->getMenuFromDB($menuName, 'Trainee');
    }

    private function getHRMenu($menuName){
        $this->getMenuFromDB($menuName, 'HR');
    }

    private function getAdminMenu($menuName){
        $this->getMenuFromDB($menuName, 'admin');
    }

    private function getGraphicMenu($menuName){
        $this->getMenuFromDB($menuName, 'Graphic Designer');
    }

    private function getSEOMenu($menuName){
        $this->getMenuFromDB($menuName, 'SEO');
    }

    private function getTesterMenu($menuName){
        $this->getMenuFromDB($menuName, 'Software Tester');
    }

    private function getbidderMenu($menuName){
        $this->getMenuFromDB($menuName, 'Bidder');
    }

    public function get($roles, $menuName = 'sidebar menu'){
        $roles = explode(',', $roles);
        if(empty($roles)) {
            $this->getGuestMenu($menuName);
        } elseif(in_array('admin', $roles)) {
            $this->getAdminMenu($menuName);
        } elseif(in_array('Developer', $roles)) {
            $this->getDeveloperMenu($menuName);
        } elseif(in_array('Manager', $roles)) {
            $this->getManagerMenu($menuName);
        } elseif(in_array('Designer', $roles)) {
            $this->getDesignerMenu($menuName);
        } elseif(in_array('Trainee', $roles)) {
            $this->getTraineeMenu($menuName);
        } elseif(in_array('HR', $roles)) {
            $this->getHRMenu($menuName);
        } elseif(in_array('Bidder', $roles)) {
            $this->getbidderMenu($menuName);
        } elseif(in_array('Graphic Designer', $roles)) {
            $this->getGraphicMenu($menuName);
        } elseif(in_array('SEO', $roles)) {
            $this->getSEOMenu($menuName);
        } elseif(in_array('Software Tester', $roles)) {
            $this->getTesterMenu($menuName);
        } else {
            $this->getGuestMenu($menuName);
        }
        $rfd = new RenderFromDatabaseData;
        return $rfd->render($this->menu);
    }

    public function getAll( $menuId = 1 ){
        $this->menu = Menus::select('menus.*')
            ->where('menus.menu_id', '=', $menuId)
            ->orderBy('menus.sequence', 'asc')->get();  
        $rfd = new RenderFromDatabaseData;
        return $rfd->render($this->menu);
    }
}