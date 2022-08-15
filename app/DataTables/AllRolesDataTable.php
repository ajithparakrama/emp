<?php

namespace App\DataTables;

use App\Models\roles;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AllRolesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->addIndexColumn()
       
        ->addColumn('action', function($item){
            $btn = '<a class="btn btn-sm btn-primary" href="'.route('roles.edit',$item->id).'" >Edit <i class="fa fa-pen"></i></a>';
            $btn .= '<a class="btn btn-sm btn-info" href="'.route('roles.show',$item->id).'">View <i class="fa fa-eye"></i></a>';
            $btn .= '<a class="btn btn-sm btn-danger" href="'.route('roles.inactive',$item->id).'">Deactivate <i class="fa fa-trash"></i></a>';
            return $btn;
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\AllRole $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(roles $model)
    {
        return $model->where('active','=',1);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('allroles-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('#')->searchable(false)->orderColumn(false), 
            Column::make('role_name'),
            
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(220)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'AllRoles_' . date('YmdHis');
    }
}
