<?php
//importing name space
/*
 *  Author : Sangit
 * /*
 */
namespace App\Library;
use DB;

class CrudSangit {

    public function create($model)
    {
        DB::beginTransaction();
        try {
            $model->save();
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        } catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        }
        DB::commit();
        return $model;
        //return response()->json(['message' => "Done successfully"], 201);

    }
    public function update($model)
    {
        DB::beginTransaction();
        try {
            $model->save();
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        } catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        }
        DB::commit();
        return  $model;
    }
    public function delete($model)
    {

        DB::beginTransaction();
        try {
            $model->delete();
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        } catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        }
        DB::commit();
        return  $model;
    }
    public function restore($model)
    {

        DB::beginTransaction();
        try {
            $model->restore();
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        } catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        }
        DB::commit();
        return $model;
    }
}

?>
