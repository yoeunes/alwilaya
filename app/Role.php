<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {
    public static function formSelectArray() {
        $all = Self::all()->toArray();
        $out = [ ];
        if (count($all)) foreach ($all as $o) {
            $out[ $o[ 'id' ] ] = $o[ 'display_name' ] ?: $o[ 'name' ];
        }

        return $out;
    }

    public static function hasPermission($role, $permissionName) {
        $role_permissions = $role->perms()->get();
        foreach ($role_permissions as $permission) {
            if ($permission->name == $permissionName) {
                return true;
            }
        }

        return false;
    }
}