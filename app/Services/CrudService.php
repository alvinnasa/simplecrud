<?php
namespace App\Services;
use App\Models\M_Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class CrudService {
    public function crud ($request,$crud, $action = null)
    {
        DB::beginTransaction();
        try {
            $data = [
                'name' => $request->name,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'slug' => str::slug($request->name)
            ];
            if ($action == 'create') {
                $data = M_Crud::insert($data);
            } else if ($action == 'update') {
                $data = M_crud::whereId($crud)->update($data);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return false;
        }
    }
    public function destroy($id,$action =null)
    {
        $data = M_Crud::findOrFail($id);
        $data->delete();
    }
}