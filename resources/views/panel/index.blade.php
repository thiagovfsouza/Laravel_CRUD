@extends('layouts.header')

@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ url('welcome') }}">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        {{ trans('messages.Home') }} </a>
                </li>
                <li class="breadcrumb-item active"><a href="/">{{ trans('messages.Service List') }}</a></li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bst-seller">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">{{ trans('messages.New Service') }}</h4>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 bst-seller">
                    <div class="card h-auto">
                        <div class="card-body">
                            <div class="col-sm-12">
                                <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <input type="hidden" name="crud_id" id="crud_id">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label required">{{ trans('messages.Name') }}</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">{{ trans('messages.Phone WhatsApp') }}</label>
                                                <input type="text" class="form-control" name="phone_whatsapp"
                                                    id="phone_whatsapp">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">{{ trans('messages.Phone Contact') }}</label>
                                                <input type="text" class="form-control" name="phone_contact"
                                                    id="phone_contact">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">{{ trans('messages.CPF') }}</label>
                                                <input type="text" class="form-control" name="cpf" id="cpf">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">{{ trans('messages.CEP') }}</label>
                                                <input type="text" class="form-control" name="cep" id="cep">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label
                                                    class="form-label">{{ trans('messages.How did you hear about the Company?') }}</label>
                                                <select class="form-control selectpicker" name="know_company"
                                                    id="know_company" data-live-search="true">
                                                    <option value="">{{ trans('messages.Select') }}</option>
                                                    <option value="Facebook">{{ trans('messages.Facebook') }}</option>
                                                    <option value="Linkedin">{{ trans('messages.Linkedin') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 30px;">
                                        <div id="button-container" class="col-sm-3">
                                            <button id="btn-register" class="btn btn-success btn-block"
                                                type="button">{{ trans('messages.Register') }}</button>
                                        </div>
                                        <div id="edit-button-container" class="col-sm-3" style="display: none;">
                                            <button id="btn-edit" class="btn btn-success btn-block"
                                                type="button">{{ trans('messages.Edit') }}</button>
                                        </div>
                                        <div id="delete-button-container" class="col-sm-3" style="display: none;">
                                            <button id="btn-delete" class="btn btn-danger btn-block"
                                                type="button">{{ trans('messages.Delete') }}</button>
                                        </div>
                                        <div id="cancel-button-container" class="col-sm-3" style="display: none;">
                                            <button id="btn-cancel" class="btn btn-info btn-block"
                                                type="button">{{ trans('messages.Cancel') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 bst-seller">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">{{ trans('messages.Records') }}</h4>
                    </div>
                    <div class="card h-auto">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1 dt-filter exports" style="overflow-x: hidden;">
                                <div class="tbl-caption"></div>
                                <table id="tablelist" class="table shorting">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('messages.Edit') }}</th>
                                            <th>{{ trans('messages.Name') }}</th>
                                            <th>{{ trans('messages.Phone WhatsApp') }}</th>
                                            <th>{{ trans('messages.Phone Contact') }}</th>
                                            <th>{{ trans('messages.CPF') }}</th>
                                            <th>{{ trans('messages.CEP') }}</th>
                                            <th>{{ trans('messages.Where meet') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input user-checkbox"
                                                            id="customCheckBox{{ $item->id }}"
                                                            data-resultado-id="{{ $item->id }}">
                                                        <label class="form-check-label"
                                                            for="customCheckBox{{ $item->id }}"></label>
                                                    </div>
                                                </td>
                                                <td><span>{{ $item->name }}</span></td>
                                                <td><span>{{ $item->phone_whatsapp }}</span></td>
                                                <td><span>{{ $item->phone_contact }}</span></td>
                                                <td><span>{{ $item->cpf }}</span></td>
                                                <td><span>{{ $item->cep }}</span></td>
                                                <td>
                                                    <span class="badge {{ $item->know_company == 'Facebook' ? 'badge-success' : 'badge-info' }} light border-0 col-sm-5">{{ $item->know_company }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#phone_whatsapp').mask('(00) 00000-0000');
            $('#phone_contact').mask('(00) 00000-0000');
            $('#cpf').mask('000.000.000-00');
            $('#cep').mask('00000-000');

            $('#phone_whatsapp').blur(function(event) {
                if ($(this).val().length === 15) {
                    $("#phone_whatsapp").mask('(00) 00000-0009');
                } else {
                    $("#phone_whatsapp").mask('(00) 0000-00009');
                }
            });
            $('#phone_contact').blur(function(event) {
                if ($(this).val().length === 15) {
                    $("#phone_contact").mask('(00) 00000-0009');
                } else {
                    $("#phone_contact").mask('(00) 0000-00009');
                }
            });

            var table = $('#tablelist').DataTable({
                'ajax': {
                    'url': 'api/getdata',
                    'type': 'GET',
                    'headers': {
                        'Authorization': 'Bearer {{ csrf_token() }}'
                    },
                    'error': function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', error);
                        // Trate o erro, como redirecionar para o login se o token estiver inválido
                    }
                },
                'columns': [
                    { 'data': null, 'render': function (data) {
                        return `
                            <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input user-checkbox"
                                    id="customCheckBox${data.id}"
                                    data-resultado-id="${data.id}">
                                <label class="form-check-label" for="customCheckBox${data.id}"></label>
                            </div>`;
                        }
                    },
                    { 'data': 'name' },
                    { 'data': 'phone_whatsapp' },
                    { 'data': 'phone_contact' },
                    { 'data': 'cpf' },
                    { 'data': 'cep' },
                    { 'data': null, 'render': function (data) {
                        return `<span class="badge ${data.know_company === 'Facebook' ? `badge-success` : `badge-info`} light border-0 col-sm-5">${data.know_company}</span>`;
                        }
                    },
                ],
                'dom': 'ZBfrltip',
                buttons: [{
                    extend: 'excel',
                    text: "<i class='fa-solid fa-file-excel'></i> {{ __('messages.Export Report') }}",
                    className: 'btn btn-sm border-0',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6],
                    },
                }],
                searching: true,
                select: false,
                pageLength: 10,
                lengthChange: false,
                language: {
                    paginate: {
                        next: '<i class="fa-solid fa-angle-right"></i>',
                        previous: '<i class="fa-solid fa-angle-left"></i>'
                    },
                    'search': ' <i class="fa-solid fa-magnifying-glass"></i>',
                    searchPlaceholder: "{{ __('messages.Search') }}..."
                },
            });

            $('#tablelist').on('change', '.user-checkbox', function() {
                $('.user-checkbox').not(this).prop('checked', false);

                if ($(this).is(':checked')) {
                    let itemId = $(this).data('resultado-id');

                    $.ajax({
                        url: 'api/getitem/' + itemId,
                        type: 'GET',
                        success: function(data) {
                            $('#crud_id').val(data.id);
                            $('#name').val(data.name);
                            $('#phone_whatsapp').val(data.phone_whatsapp).trigger('blur');
                            $('#phone_contact').val(data.phone_contact).trigger('blur');
                            $('#cpf').val(data.cpf);
                            $('#cep').val(data.cep);
                            $('#know_company').val(data.know_company).change();

                            $('#edit-button-container').show();
                            $('#delete-button-container').show();
                            $('#cancel-button-container').show();
                            $('#button-container').hide();
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro na requisição AJAX:', error);
                        }
                    });
                } else {
                    resetFormFields();
                }
            });

            $('#btn-register').click(function(e) {
                e.preventDefault();

                let formData = {
                    name: $('#name').val(),
                    phone_whatsapp: $('#phone_whatsapp').val(),
                    phone_contact: $('#phone_contact').val(),
                    cpf: $('#cpf').val(),
                    cep: $('#cep').val(),
                    know_company: $('#know_company').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.ajax({
                    url: 'api/store',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            resetFormFields();
                            showAlert("success", "{{ __('messages.New record added successfully!') }}");
                        } else {
                            showAlert("error", response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', error);
                        showAlert("error", "{{ __('An error has occurred. Please try again later.') }}");
                    }
                });
            });

            $('#btn-edit').click(function(e) {
                e.preventDefault();

                let formData = {
                    id: $('#crud_id').val(),
                    name: $('#name').val(),
                    phone_whatsapp: $('#phone_whatsapp').val(),
                    phone_contact: $('#phone_contact').val(),
                    cpf: $('#cpf').val(),
                    cep: $('#cep').val(),
                    know_company: $('#know_company').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.ajax({
                    url: 'api/update',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            resetFormFields();
                            showAlert("success", "{{ __('messages.Registration updated successfully!') }}");
                        } else {
                            showAlert("error", response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', error);
                        showAlert("error", "{{ __('An error has occurred. Please try again later.') }}");
                    }
                });
            });

            $('#btn-delete').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "{{ __('messages.Delete') }}",
                    text: "{{ __('messages.Are you sure you want to delete this record?') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '##58bad7',
                    cancelButtonColor: '#FF5E5E',
                    confirmButtonText: "{{ __('messages.Yes') }}",
                    cancelButtonText: "{{ __('messages.Cancel') }}"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let itemId = $('#crud_id').val();

                        $.ajax({
                            url: 'api/destroy/' + itemId,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.success) {
                                    resetFormFields();
                                    showAlert("success", "{{ __('messages.Registration deleted successfully!') }}");
                                } else {
                                    showAlert("error", response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Erro na requisição AJAX:', error);
                                showAlert("error", "{{ __('An error has occurred. Please try again later.') }}");
                            }
                        });
                    }
                });
            });

            $('#btn-cancel').click(function() {
                resetFormFields();
            });

            function resetFormFields() {
                $('#name').val('');
                $('#phone_whatsapp').val('');
                $('#phone_contact').val('');
                $('#cpf').val('');
                $('#cep').val('');
                $('#know_company').val('').change();

                $('#edit-button-container').hide();
                $('#delete-button-container').hide();
                $('#cancel-button-container').hide();
                $('#button-container').show();

                $('#crud_id').val('');

                table.ajax.reload(null, false);

                $('form')[0].reset();
            }
        });
    </script>
@endsection
