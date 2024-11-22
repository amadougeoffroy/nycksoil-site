<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllModel extends Model
{
    public function get_table($table)
	{ 
		$result = DB::table($table)->get();
		return $result ;
    }

    public function get_table_where($table,$id_name, $id)
	{
		$result = DB::table($table)->where($id_name , $id)->get();
		return $result;
	}
    
    public function get_max_id($table,$nomchamp) 
	{
		$result = DB::table($table)->max($nomchamp);
		return $result;
    }
    
    public function get_quantity($table,$nomchamp,$idchamp,$id)
	{
		$result = DB::table($table)->where($idchamp, $id)->count($nomchamp);
		return $result;
    }
    
    public function get_simple_quantity($table,$nomchamp)
	{
		$result = DB::table($table)->count($nomchamp);
		return $result;
    }
    
    public function get_fullrow($table, $id_name, $id)
    {
		$result = DB::table($table)->where($id_name, $id)->get();
		return $result[0];
    }

    public function get_field_by_id($table, $field, $id_name, $id)
    {
		$result = DB::table($table)->select($field)->where($id_name, $id)->get();
		return $result[0]->$field;
    }
    
    public function add_ligne_with_return_id($table, $data)
	{ 
		$result = DB::table($table)->insertGetId($data);
		return $result;
    }

    public function add_ligne($table, $data)
    {
		$result = DB::table($table)->insert($data);
    }
    
    public function update_ligne($table, $data, $id_name, $id)
    {
		$result = DB::table($table)->where($id_name , $id)->update($data);
    }
    
    public function delete_ligne($table, $id_name, $id)
    {
		$result = DB::table($table)->where($id_name , $id)->delete();
	}
}
