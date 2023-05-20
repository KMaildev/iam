<link rel="stylesheet" href="{{ asset('css/table.css') }}">
{{-- <style>
    .dataTables_filter {
        display: none;
    }

    tfoot {
        display: table-header-group !important;
    }
</style> --}}
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
                                    <th class="text-white text-center" style="width: 100px;">
                                        Name
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Date of Birth
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Age
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Gender
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Height
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Weight
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Japanese Level
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Education
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Foreign Experience
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Other Qualification
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Marital Status
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Blood Type
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Wearing Glasses/ Not
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Birth Place
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Nationality
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Religion
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Address
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Phone No.
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Action
                                    </th>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="display: none"></td>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr style="background-color: #903731;">
                                    <th class="text-white text-center" style="width: 100px;">
                                        Name
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Date of Birth
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Age
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Gender
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Height
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Weight
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Japanese Level
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Education
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Foreign Experience
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Other Qualification
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Marital Status
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Blood Type
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Wearing Glasses/ Not
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Birth Place
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Nationality
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Religion
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Address
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                        Phone No.
                                    </th>

                                    <th class="text-white text-center" style="width: 100px;">
                                    </th>
                                </tr>
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
                ordering: true,
                fixedHeader: true,
                scrollY: 200,
                scrollX: true,
                dom: 'Btip',
                ajax: {
                    url: "{{ route('student_lists_datatable') }}",
                },
                lengthMenu: [20, 50, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300, 1500,
                    1700,
                    1900, 2000
                ],
                columns: [
                    // {
                    //     data: 'DT_RowIndex',
                    //     name: 'DT_RowIndex',
                    // },

                    {
                        data: 'name',
                        name: 'name',
                    },

                    {
                        data: 'date_of_birth',
                        name: 'date_of_birth',
                    },

                    {
                        data: 'age',
                        name: 'age',
                    },

                    {
                        data: 'gender',
                        name: 'gender',
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
                        data: 'language_level',
                        name: 'language_level',
                    },

                    {
                        data: 'education',
                        name: 'education',
                    },

                    {
                        data: 'foreign_experience',
                        name: 'foreign_experience',
                    },
                    {
                        data: 'other_qualification',
                        name: 'other_qualification',
                    },
                    {
                        data: 'marital_status',
                        name: 'marital_status',
                    },
                    {
                        data: 'blood_type',
                        name: 'blood_type',
                    },
                    {
                        data: 'wearing_glasses_or_not',
                        name: 'wearing_glasses_or_not',
                    },
                    {
                        data: 'birth_place',
                        name: 'birth_place',
                    },
                    {
                        data: 'nationality',
                        name: 'nationality',
                    },
                    {
                        data: 'religion',
                        name: 'religion',
                    },
                    {
                        data: 'address',
                        name: 'address',
                    },
                    {
                        data: 'phone_no',
                        name: 'phone_no',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ],

                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var col = this.index();
                        var select = $(
                                '<select style="width: 100%;"><option value=""></option></select>'
                            )
                            .appendTo($('thead tr:eq(1) td').eq(col))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, true)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d +
                                '">' + d +
                                '</option>')
                        });
                    });
                }
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
            student_id = $(this).data('id');
            var url = '{{ url('add_company_user_list') }}';
            $.ajax({
                url: url,
                data: {
                    student_id: student_id,
                },
                method: 'GET',
                success: function(result) {
                    toastr.remove();
                    toastr.success("Your processing has been completed.");
                    table.ajax.reload();
                }
            });
        });
        
    </script>
@endsection
