<?php

namespace App\DataTables;

use App\Listing;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTablesEditor;
use Illuminate\Database\Eloquent\Model;

class ListsDataTablesEditor extends DataTablesEditor
{
    protected $ss = Listing::class;

    /**
     * Get create action validation rules.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            
            'email' => 'email',
            'name'  => 'required',
            
        ];
    }

    /**
     * Get edit action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function editRules(Model $ss)
    {
        return [
            'email' => 'sometimes|required|email|' . Rule::unique($ss->getTable())->ignore($ss->getKey()),
            'name'  => 'sometimes|required',
               ];
    }

    /**
     * Get remove action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function removeRules(Model $ss)
    {
        return [];
    }
    public function creating(Model $ss, array $data)
    {
        return $data;
    }
    public function updating(Model $ss, array $data)
    {
         return $data;
    }
}
