{{-- <link rel="stylesheet" href="{{ asset('css/table.css') }}"> --}}
<style>
    .dataTables_filter {
        display: none;
    }

    tfoot {
        display: table-header-group !important;
    }
</style>
<div class="col-md-9 col-sm-9 col-lg-9">
    <div class="card">
        <div class="card-header">
            Student Lists
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-lg-12 py-2">
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table table-bordered table-sm yajra-datatable">
                            <thead>
                                <tr style="background-color: #903731;">
                                    <th class="text-white text-center" style="width: 1%;">
                                        #
                                    </th>
                                    <th class="text-white text-center" style="width: 100px;">
                                        Name
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Gender
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Age
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Japanese Level
                                    </th>
                                    <th class="text-white text-center" style="width: 100px;">
                                        Career
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Height
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Weight
                                    </th>
                                    <th class="text-white text-center" style="width: 100px;">
                                        Qualification
                                    </th>
                                    <th class="text-white text-center" style="width: 100px;">
                                        Special Skills
                                    </th>
                                    <th class="text-white text-center" style="width: 100px;">
                                        Visited to Japan or Not?
                                    </th>
                                    <th class="text-white text-center" style="width: 70px;">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tfoot>
                                <th>
                                    <input type="text" data-colum="0" style="width: 100%;" hidden>
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="1" placeholder="Name">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="2" placeholder="Gender">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="3" placeholder="Age">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="4"
                                        placeholder="Japanese Level">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="5" placeholder="Career">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="6" placeholder="Height">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="7" placeholder="Weight">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="8"
                                        placeholder="Qualification">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="9"
                                        placeholder="Special Skills">
                                </th>

                                <th>
                                    <input type="text" style="width: 100%;" data-colum="10"
                                        placeholder="Visited to Japan or Not?">
                                </th>

                                <th>
                                    <input type="text" data-colum="11" hidden>
                                </th>


                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(function() {
            var table = $('#datatable').DataTable({
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ordering: false,
                fixedHeader: true,
                scrollY: 500,
                scrollX: true,
                ajax: {
                    url: "{{ route('student_lists_datatable') }}",
                },
                lengthMenu: [20, 50, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300, 1500,
                    1700,
                    1900, 2000
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                    },
                    {
                        data: 'age',
                        name: 'age',
                    },
                    {
                        data: 'language_level',
                        name: 'language_level',
                    },

                    {
                        data: 'professional_career',
                        name: 'professional_career',
                    },

                    {
                        data: 'height',
                        name: 'height',
                    },

                    {
                        data: 'weight',
                        name: 'weight',
                    },

                    {
                        data: 'qualification',
                        name: 'qualification',
                    },

                    {
                        data: 'special_skills',
                        name: 'special_skills',
                    },

                    {
                        data: 'visited',
                        name: 'visited',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },

                ],
            });
        });

        $(document).ready(function() {
            $('#datatable thead th').each(function() {
                var title = $('#datatable thead th').eq($(this).index()).text();
            });
            var table = $('#datatable').DataTable();

            table.columns().eq(0).each(function(colIdx) {
                $('input', table.column(colIdx).footer()).on('change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });
        });

        $('body').on('click', '#addToMyStudent', function(e) {
            e.preventDefault();
            student_user_list_id = $(this).data('id');
            var url = '{{ url('add_company_user_list') }}';
            $.ajax({
                url: url,
                data: {
                    user_list_id: student_user_list_id,
                },
                method: 'GET',
                success: function(result) {
                    toastr.remove();
                    toastr.success("Your processing has been completed.");
                }
            });
        });
    </script>
@endsection
