
@push('additional_css')
    <link href="{{  asset('assets/common/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        table.dataTable {
                color: #333;
                border-collapse: separate !important;
                border: 0px solid #ddd !important;
                margin: 0px !important;
                font-size: inherit;
            }

            div.dataTables_wrapper div.dataTables_processing {
                background-color: #233242;
                color: #fff;
                opacity: 0.7;
            }
            .dataTables_info{
                padding-left: 1rem;
                color: #656d77!important;
            }
            .pagination {
                display: flex;
                padding-right: 1rem;
                list-style: none;
                border-radius: .35rem;
            }

            .page-item.active .page-link {
                z-index: 3;
                color: #fff;
                background-color: #206bc4;
                border-color: #206bc4;
            }
            .dataTables_empty::before{
                font-family: "FontAwesome";
                font-weight: 400;
                content: "\f1c0";
                font-size: 3rem;
                display: block;
                padding: 10px;
                color: #656d77!important;
                margin-bottom: 10px;
                opacity: 0.5;
            }
          tfoot {
                display: table-header-group;
          }
    </style>
@endpush
<div class="table-responsive">
    <i class="ti ti-2fa"></i>
    <table {{ $attributes->merge(['class' => 'table card-table table-vcenter text-nowrap', 'width' => '100%', 'cellspacing' => '0']) }}  >
        <thead>
            <tr>
                @foreach($columns as $column)
                    <th data-priority="{{ $column['priority'] }}" data-filter="{{ $column['priority'] }}">{{ $column['th'] }}</th>
                @endforeach
            </tr>
        </thead>
    </table>
</div>

@push('scripts')
<script src="{{ asset('assets/common/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/common/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
@endpush
@push('page_script')
    <script type="text/javascript">
         function loadDataTable(params){

            if($.fn.DataTable.isDataTable('#{{ $attributes["id"] }}')){
                $('#{{ $attributes["id"] }}').DataTable().destroy();
            }
            $('#{{ $attributes["id"] }}').DataTable({
                buttons:  [],
                processing: {{ $processing}},
                serverSide: {{ $server_side}},
                ajax: {
                url:'{!! $route_name !!}',
                type: 'GET',
                data: params
                },
                columns: @json($columns),
                order: [[{{$sort}}, 'desc']],
            });
        }
    </script>
@endpush
