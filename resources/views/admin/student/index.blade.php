@extends('admin.layouts.main')
@section('content')
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <div class="col-md-12 col-sm-12 col-lg-12 py-2">
        <div class="card">
            <div class="card-header">
                Students
            </div>
            <div class="card-body">
                <a href="{{ route('user_export') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-file"></i>
                    Excel Download
                </a>

                <div class="table-responsive text-nowrap py-2">
                    <table id="datatable" class="table  yajra-datatable">
                        <thead>
                            <tr style="background-color: #903731;">

                                <th class="text-white text-center" style="width: 100px;">
                                    Company Name
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    First Select Date
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    Second Select Date
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    Third Select Date
                                </th>

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

                                <th class="text-white text-center" style="width: 50px;">
                                    Photo
                                </th>

                                <th class="text-white text-center" style="width: 50px;">
                                    NRC Back
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    NRC Front
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    Household
                                </th>

                                <th class="text-white text-center" style="width: 100px;">
                                    Japan Certificate
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
                                <td></td>
                                <td></td>
                                <td style="display: none"></td>
                                <td style="display: none"></td>
                                <td style="display: none"></td>
                                <td style="display: none"></td>
                                <td style="display: none"></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
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
                    url: "{{ route('admin_student_lists_datatable') }}",
                },
                lengthMenu: [20, 50, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300, 1500,
                    1700,
                    1900, 2000
                ],
                columns: [{
                        data: 'company_name',
                        name: 'company_name',
                    },

                    {
                        data: 'first_select_date',
                        name: 'first_select_date',
                    },

                    {
                        data: 'second_select_date',
                        name: 'second_select_date',
                    },

                    {
                        data: 'third_select_date',
                        name: 'third_select_date',
                    },

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
                        data: 'language',
                        name: 'language',
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
                        data: 'photo',
                        name: 'photo',
                    },
                    {
                        data: 'nrc_photo_back',
                        name: 'nrc_photo_back',
                    },
                    {
                        data: 'nrc_photo_front',
                        name: 'nrc_photo_front',
                    },
                    {
                        data: 'household_members',
                        name: 'household_members',
                    },
                    {
                        data: 'japan_certificate',
                        name: 'japan_certificate',
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



        function updateSecondSelectDate(object) {
            var user_id = object.id;
            var second_select_date = object.value;
            var url = '{{ url('updateSecondSelectDate') }}';
            $.ajax({
                url: url,
                data: {
                    user_id: user_id,
                    second_select_date: second_select_date,
                },
                method: 'GET',
                success: function(result) {
                    toastr.remove();
                    toastr.success("Your processing has been completed.");
                }
            });
        }

        function updateThirdSelectDate(object) {
            var user_id = object.id;
            var second_select_date = object.value;
            var url = '{{ url('updateThirdSelectDate') }}';
            $.ajax({
                url: url,
                data: {
                    user_id: user_id,
                    second_select_date: second_select_date,
                },
                method: 'GET',
                success: function(result) {
                    toastr.remove();
                    toastr.success("Your processing has been completed.");
                }
            });
        }
    </script>
@endsection
