<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * The server side.
     *
     * @var bool
     */
    public $server_side;

    /**
     * The processing.
     *
     * @var bool
     */
    public $processing;


    /**
     * The processing.
     *
     * @var array
     */
    public $columns;


    /**
     * The processing.
     *
     * @var string
     */
    public $route_name;


        /**
     * The processing.
     *
     * @var string
     */
    public $sort;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($routeName, $serverSide, $processing , $columns, $sort=0)
    {
        $this->route_name = $routeName;
        $this->server_side = $serverSide;
        $this->processing = $processing;
        $this->columns = $columns;
        $this->sort= $sort;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.data-table');
    }
}
