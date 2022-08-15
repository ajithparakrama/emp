<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class inactiveuserDataTable extends DataTable
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
            ->addColumn('role',function($item){
                return ($item->role==1)?'Admin':'Operator';
            })
            ->addColumn('action', function($item){
           //     $btn = '<a class="btn btn-sm btn-primary" href="'.route('user.edit',$item->id).'" >Edit <i class="fa fa-pen"></i></a>';
         //       $btn .= '<a class="btn btn-sm btn-info" href="'.route('user.show',$item->id).'">View <i class="fa fa-eye"></i></a>';
                $btn = '<a class="btn btn-sm btn-success" href="'.route('user.active',$item->id).'">Activate <i class="fa fa-recycle"></i></a>';
                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\inactiveuserDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->where('active','=',0);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('inactiveuserdatatable-table')
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
            Column::make('name'),
            Column::make('username'),
            Column::make('phone'),
            Column::make('role'),
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
        return 'inactiveuser_' . date('YmdHis');
    }
}
