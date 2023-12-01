@extends('layouts.master')


@section('page_title', 'Kelola Kurikulum')
@section('sidebar-size', 'collapsed')
@section('url_back', '')


@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Filter Data Absensi</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class=" col col-xl-3 col-md-6 col-9">
                    <div class="mb-1">
                        <label class="form-label" for="basicInput">Homebase</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Hombase</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col col-xl-3 col-md-6 col-9">
                    <div class="mb-1">
                        <label class="form-label" for="helpInputTop">Status Pegawai</label>
                        <select class="form-select" aria-label="Pilih Status Pegawai">
                            <option selected>Pilih Status Pegawai</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col col-xl-3 col-md-6 col-9">
                    <div class="mb-1">
                        <label class="form-label" for="fp-default">Bulan</label>
                        <input type="date" id="fp-default" class="form-control flatpickr-basic"
                            placeholder="YYYY-MM-DD" />
                    </div>
                </div>
                <div class="d-grid col col-xl-3 col-md-6 col-9  align-items-end">
                    <div class="mb-1">
                        <button type="button" class="btn btn-primary"><i data-feather="filter"></i> Filter Data</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <h4 class="card-title">Filter Data Saat Ini</h4>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-auto ">
                    <div class="mb-1">
                        <a href="#" class="btn btn-outline-primary"> Software Engineer <i data-feather="x"></i></a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="mb-1">
                        <a href="#" class="btn btn-outline-primary"> Semua Pegawai <i data-feather="x"></i></a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="mb-1">
                        <a href="#" class="btn btn-outline-primary"> 11-2023 <i data-feather="x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <i class="fas fa-user-slash"></i>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Cuti</h6>
                            <small>Jumlah Pegawai Cuti</small>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h6><span class="number">1</span> Pegawai</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <i class="fas fa-user-check"></i>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Hadir</h6>
                            <small>Jumlah Pegawai Hadir</small>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h6><span class="number">98</span> Pegawai</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <i class="fas fa-user-times"></i>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Izin</h6>
                            <small>Jumlah Pegawai Izin</small>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h6><span class="number">5</span> Pegawai</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <i class="fas fa-user-cog"></i>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Alpha</h6>
                            <small>Jumlah Pegawai Alpha</small>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h6><span class="number">5</span> Pegawai</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <i class="fas fa-user-clock"></i>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">TAP 1</h6>
                            <small>Jumlah Pegawai TAP 1</small>
                        </div>
                    </div>
                    <div class="d-inline-block">
                        <h6><span class="number">1</span> Pegawai</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Status Dosen & Pegawai</h4>
                    <small>Status Dosen & Pegawai</small>
                </div>
                <div class="card-body">
                    <div id="earnings-donut-chart" class="my-1"></div>
                    <div class="row">
                        <div class="col-12 col-md-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:10px; height:10px;">
                                <circle cx="5" cy="5" r="5" fill="#fcba03" id="color0"
                                    data-id="0"></circle>
                            </svg> <br>
                            <small>Dosen Tetap</small>
                            <h5>50%</h5>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:10px; height:10px;">
                                <circle cx="5" cy="5" r="5" fill="#89CFF0" id="color0"
                                    data-id="0"></circle>
                            </svg> <br>
                            <small>Dosen Luar Biasa</small>
                            <h5>30%</h5>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:10px; height:10px;">
                                <circle cx="5" cy="5" r="5" fill="#000080" id="color0"
                                    data-id="0"></circle>
                            </svg> <br>
                            <small>Dosen Asing</small>
                            <h5>10%</h5>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:10px; height:10px;">
                                <circle cx="5" cy="5" r="5" fill="#90EE90" id="color0"
                                    data-id="0"></circle>
                            </svg> <br>
                            <small>Dosen Transfer</small>
                            <h5>10%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="card card-employee-task">
                <div class="card-header">
                    <div class="float-start">
                        <h4>Kehadiran Pegawai</h4>
                        <p>Daftar Kehadiran Pegawai Tercepat Hari ini!</p>
                    </div>
                    <div class="avatar float-end bg-light-primary rounded">
                        <div class="p-1">
                            Detail <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded"
                                    width="42" height="42" alt="Avatar" />
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">Ryan Harrington</h6>
                                <small>iOS Developer</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="text-muted me-75">07:00 WIB</small>
                        </div>
                    </div>
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded"
                                    width="42" height="42" alt="Avatar" />
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">Ryan Harrington</h6>
                                <small>iOS Developer</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="text-muted me-75">07:00 WIB</small>
                        </div>
                    </div>
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded"
                                    width="42" height="42" alt="Avatar" />
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">Ryan Harrington</h6>
                                <small>iOS Developer</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="text-muted me-75">07:00 WIB</small>
                        </div>
                    </div>
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded"
                                    width="42" height="42" alt="Avatar" />
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">Ryan Harrington</h6>
                                <small>iOS Developer</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="text-muted me-75">07:00 WIB</small>
                        </div>
                    </div>
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded"
                                    width="42" height="42" alt="Avatar" />
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">Ryan Harrington</h6>
                                <small>iOS Developer</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="text-muted me-75">07:00 WIB</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Status Kehadiran Pegawai</h4>
                    <small>Data Kehadiran Pegawai</small>
                </div>
                <div class="card-body">
                    <div id="column-chart" class="my-1"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- List DataTable -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table-laporan table">
                        <thead>
                            <tr>
                                <th>Nama Lengkap/NIP</th>
                                <th>Hadir</th>
                                <th>Alpha</th>
                                <th>Izin</th>
                                <th>Cuti</th>
                                <th>TAP 1</th>
                                <th>Persentase Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td class="text-end">16</td>
                                <td class="text-end">2</td>
                                <td class="text-end">2</td>
                                <td class="text-end">1</td>
                                <td class="text-end">1</td>
                                <td class="text-center text-success">80%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--/ List DataTable -->
    </section>
    <!-- Dashboard Analytics end -->

    </div>
    </div>
    </div>

    <div class="modal fade" id="curriculum-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Kurikulum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="curriculum-form" onsubmit="return _curriculumActions.save()">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="form-label">Nama Kurikulum</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Tulis Nama Kurikulum">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Program Studi</label>
                                <select name="studyprogram_id" class="form-control">
                                    <option value="">Pilih Program Studi</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Tanggal Mulai Berlaku</label>
                                <input type="text" class="form-control daterange-single" name="applied_date"
                                    autocomplete="off" placeholder="Pilih Tanggal">
                            </div>
                        </div>
                        <h4 class="text-danger mt-3 mb-2 fw-bolder">Upload Dokumen</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Dokumen Buku Kurikulum</label>
                                <input type="file" id="book_document" class="my-pond"
                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                <p class="update-data-section" style="margin: 0; margin-top: -10px; font-size: 10px;">
                                    <a class="document-preview text-decoration-underline fw-bold"
                                        href="javascript:void(0)" target="_blank">Berkas</a>
                                    <span>sudah di upload, silahkan upload kembali untuk memperbarui berkas</span>
                                </p>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Dokumen SK</label>
                                <input type="file" id="sk_document" class="my-pond"
                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                <p class="update-data-section" style="margin: 0; margin-top: -10px; font-size: 10px;">
                                    <a class="document-preview text-decoration-underline fw-bold"
                                        href="javascript:void(0)" target="_blank">Berkas</a>
                                    <span>sudah di upload, silahkan upload kembali untuk memperbarui berkas</span>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Dokumen Laporan</label>
                                <input type="file" id="report_document" class="my-pond"
                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                <p class="update-data-section" style="margin: 0; margin-top: -10px; font-size: 10px;">
                                    <a class="document-preview text-decoration-underline fw-bold"
                                        href="javascript:void(0)" target="_blank">Berkas</a>
                                    <span>sudah di upload, silahkan upload kembali untuk memperbarui berkas</span>
                                </p>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Dokumen BA</label>
                                <input type="file" id="ba_document" class="my-pond"
                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                <p class="update-data-section" style="margin: 0; margin-top: -10px; font-size: 10px;">
                                    <a class="document-preview text-decoration-underline fw-bold"
                                        href="javascript:void(0)" target="_blank">Berkas</a>
                                    <span>sudah di upload, silahkan upload kembali untuk memperbarui berkas</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-2" style="justify-content: flex-start;">
                        <button type="submit" class="btn btn-info">
                            Simpan Kurikulum
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js_section')
    <!-- datpicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Filepond sources -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <!-- Include Filepond class wrapper for make your life eazier -->
    <script src="{{ url('/plugins/filepond.js') }}?version={{ config('version.js_config') }}"></script>

    <script>
        $(window).on('load', function() {
            T = document.querySelector("#earnings-donut-chart");
            CC = document.querySelector("#column-chart");
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
            (h = {
                chart: {
                    type: "donut",
                    height: 200,
                    toolbar: {
                        show: !1
                    }
                },
                dataLabels: {
                    enabled: !1
                },
                series: [50, 30, 10, 10],
                legend: {
                    show: !1
                },
                comparedResult: [2, -3, 8],
                labels: ["Dosen Tetap", "Dosen Luar Biasa", "Dosen Asing", "Dosen Transfer"],
                stroke: {
                    width: 0
                },
                colors: ["#fcba03", "#89CFF0", "#000080", "#90EE90"],
                grid: {
                    padding: {
                        right: -20,
                        bottom: -8,
                        left: -20
                    }
                },
                plotOptions: {
                    pie: {
                        startAngle: -10,
                        donut: {
                            labels: {
                                show: true,
                                total: {
                                    showAlways: true,
                                    show: true
                                }
                            },
                        },
                    },
                },
                responsive: [{
                        breakpoint: 1325,
                        options: {
                            chart: {
                                height: 100
                            }
                        }
                    },
                    {
                        breakpoint: 1200,
                        options: {
                            chart: {
                                height: 120
                            }
                        }
                    },
                    {
                        breakpoint: 1065,
                        options: {
                            chart: {
                                height: 100
                            }
                        }
                    },
                    {
                        breakpoint: 992,
                        options: {
                            chart: {
                                height: 120
                            }
                        }
                    },
                ],
            }),
            new ApexCharts(T, h).render();

            var c = {
                chart: {
                    height: 300,
                    type: 'bar',
                    events: {
                        click: function(chart, w, e) {
                            // console.log(chart, w, e)
                        }
                    }
                },
                series: [{
                    data: [90, 10, 10, 1, 1]
                }],
                colors: [window.colors.solid.success, window.colors.solid.warning, window.colors.solid.danger,
                    window.colors.solid.info, window.colors.solid.primary
                ],
                plotOptions: {
                    bar: {
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                        distributed: true
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val;
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                legend: {
                    show: true,
                    position: 'bottom',
                },
                labels: [
                    'Hadir',
                    'Izin',
                    'Alpha',
                    'Cuti',
                    'TAP 1',
                ],
                xaxis: {
                    categories: [
                        'Hadir',
                        'Izin',
                        'Alpha',
                        'Cuti',
                        'TAP 1',
                    ],
                    labels: {
                        style: {
                            colors: colors,
                            fontSize: '12px'
                        }
                    }
                }
            };

            // var t = "rtl" === $("html").attr("data-textdirection");
            // var  c = {
            //   chart: {
            //     height: 400,
            //     type: "bar",
            //     to
            //   },
            //   legend: { show: !0, position: "top", horizontalAlign: "start" },
            //   colors: [window.colors.solid.warning, window.colors.solid.primary, window.colors.solid.success],
            //   series: [
            //     {
            //       name: "Angular",
            //       data: [
            //         [5.4, 170],
            //         [5.4, 100],
            //         [6.3, 170],
            //         [5.7, 140],
            //         [5.9, 130],
            //         [7, 150],
            //         [8, 120],
            //         [9, 170],
            //         [10, 190],
            //         [11, 220],
            //         [12, 170],
            //         [13, 230],
            //       ],
            //     },
            //     {
            //       name: "Vue",
            //       data: [
            //         [14, 220],
            //         [15, 280],
            //         [16, 230],
            //         [18, 320],
            //         [17.5, 280],
            //         [19, 250],
            //         [20, 350],
            //         [20.5, 320],
            //         [20, 320],
            //         [19, 280],
            //         [17, 280],
            //         [22, 300],
            //         [18, 120],
            //       ],
            //     },
            //     {
            //       name: "React",
            //       data: [
            //         [14, 290],
            //         [13, 190],
            //         [20, 220],
            //         [21, 350],
            //         [21.5, 290],
            //         [22, 220],
            //         [23, 140],
            //         [19, 400],
            //         [20, 200],
            //         [22, 90],
            //         [20, 120],
            //       ],
            //     },
            //   ],
            //   xaxis: {
            //     tickAmount: 10,
            //     labels: {
            //       formatter: function (e) {
            //         return parseFloat(e).toFixed(1);
            //       },
            //     },
            //   },
            //   yaxis: { opposite: t },
            // };

            new ApexCharts(CC, c).render();
        })
    </script>
    <script>
        $(function() {
            "use strict";
            var e = $(".table-laporan"),
                t = $(".dt-date"),
                a = $(".dt-complex-header"),
                s = $(".dt-row-grouping"),
                l = $(".dt-multilingual"),
                o = "app-assets/";
            var n = e.DataTable({
                dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 10,
                lengthMenu: [10, 25, 50, 75, 100],
                buttons: [{
                    extend: "collection",
                    className: "btn btn-outline-secondary dropdown-toggle me-2",
                    text: feather.icons.share.toSvg({
                        class: "font-small-4 me-50"
                    }) + "Export",
                    buttons: [{
                            extend: "print",
                            text: feather.icons.printer.toSvg({
                                class: "font-small-4 me-50"
                            }) + "Print",
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [3, 4, 5, 6, 7]
                            }
                        },
                        {
                            extend: "csv",
                            text: feather.icons["file-text"].toSvg({
                                class: "font-small-4 me-50"
                            }) + "Csv",
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [3, 4, 5, 6, 7]
                            }
                        },
                        {
                            extend: "excel",
                            text: feather.icons.file.toSvg({
                                class: "font-small-4 me-50"
                            }) + "Excel",
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [3, 4, 5, 6, 7]
                            }
                        },
                        {
                            extend: "pdf",
                            text: feather.icons.clipboard.toSvg({
                                class: "font-small-4 me-50"
                            }) + "Pdf",
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [3, 4, 5, 6, 7]
                            }
                        },
                        {
                            extend: "copy",
                            text: feather.icons.copy.toSvg({
                                class: "font-small-4 me-50"
                            }) + "Copy",
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [3, 4, 5, 6, 7]
                            }
                        },
                    ],
                    init: function(e, t, a) {
                        $(t).removeClass("btn-secondary"),
                            $(t).parent().removeClass("btn-group"),
                            setTimeout(function() {
                                $(t).closest(".dt-buttons").removeClass("btn-group")
                                    .addClass("d-inline-flex");
                            }, 50);
                    },
                }, ],
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(e) {
                                return "Details of " + e.data().full_name;
                            },
                        }),
                        type: "column",
                        renderer: function(e, t, a) {
                            var s = $.map(a, function(e, t) {
                                return "" !== e.title ? '<tr data-dt-row="' + e.rowIdx +
                                    '" data-dt-column="' + e.columnIndex + '"><td>' + e.title +
                                    ":</td> <td>" + e.data + "</td></tr>" : "";
                            }).join("");
                            return !!s && $('<table class="table"/>').append("<tbody>" + s +
                            "</tbody>");
                        },
                    },
                },
                language: {
                    paginate: {
                        previous: "&nbsp;",
                        next: "&nbsp;"
                    }
                },
            });
            $("div.head-label").html('<h6 class="mb-0">Laporan Kehadiran Pegawai</h6>');
        });
    </script>

    <script>
        $(function() {
            _curriculumTable.init()
            _curriculumForm.uploader.init()
            _curriculumForm.initStudyProgramSearch()
            _datepicker.init()
        })
        const _datepicker = {
            init: () => {
                $('.daterange-single').datepicker({
                    format: "yyyy-mm-dd",
                    todayHighlight: true,
                    autoclose: true
                })
            }
        }
        const _curriculumTable = {
            ..._datatable,

            selected: null,

            init: function() {
                this.instance = $('#curriculum-table').DataTable({
                    ajax: {
                        url: _baseURL + '/api/curriculum?' + $.param({
                            withData: ['studyprogram']
                        })
                    },
                    columns: [{
                            render: (data, __, row) => {
                                return `
                                <div class="nav-item dropdown dt-action-group">
                                    <a href="#" class="btn btn-light rounded-pill btn-icon" aria-expanded="false" data-bs-toggle="dropdown">
                                        <i class="mdi mdi-dots-vertical ficon-dropdown"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start">
                                        <a href="javascript:void(0)" onclick="_curriculumActions.edit(this)" class="dropdown-item">
                                            <i class="me-50" data-feather="edit"></i> Ubah Data
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" onclick="_curriculumActions.delete(this)" class="dropdown-item">
                                            <i class="me-50" data-feather="x"></i> Hapus Data
                                        </a>
                                    </div>
                                </div>
                            `
                            },
                            data: null,
                            orderable: false,
                            searchable: false,
                            className: 'text-center'
                        },
                        {
                            render: (data, __, row) => {
                                return `
                            <a class="fw-bolder" href="#">
                                ${row.name}
                            </a>
                        `
                            },
                            data: 'name',
                            name: 'name'
                        },
                        {
                            render: (data, __, row) => {
                                return moment row.applied_date
                            },
                            data: 'applied_date',
                            name: 'applied_date'
                        },
                        {
                            render: (data, __, row) => {
                                return `
                            <p class="m-0">${row.studyprogram?.name ?? '-'}</p>
                        `
                            },
                            data: null,
                            orderable: false,
                            searchable: false
                        },
                        {
                            render: (data, __, row) => {
                                const docuComp = (title, data) => {
                                    return `
                                <div class="col-6">
                                    <p class="fw-bolder">${title}</p>
                                    ${ data == null ? `
                                                            <span style="color: #828282;">Berkas belum diupload<span>
                                                        ` : `
                                                            <a href="${data}" target="_blank" class="text-info">
                                                                <i data-feather="paperclip"></i>
                                                                <span>Lihat Dokumen</span>
                                                            </a>
                                                        ` }
                                </div>
                            `
                                }

                                return `
                            <div class="row p-0">
                                ${ docuComp('Dokumen Buku Kurikulum', row.book_document) }
                                ${ docuComp('Dokumen SK', row.sk_document) }
                            </div>
                            <div class="row mt-1 p-0">
                                ${ docuComp('Dokumen Laporan', row.report_document) }
                                ${ docuComp('Dokumen BA', row.ba_document) }
                            </div>
                        `
                            },
                            data: null,
                            searchable: false,
                            orderable: false
                        }
                    ],
                    "drawCallback": function(settings) {
                        feather.replace();
                    }
                })
                $('.dtb').append(`
                <button class="btn btn-info" onclick="_curriculumActions.add()">
                    <i data-feather="plus-circle"></i>
                    <span class="d-none d-lg-inline-block ml-2">Tambah Kurikulum</span>
                </button>
            `);
                this.implementSearchDelay()
            }
        }
        const _curriculumActions = {
            add: function() {
                $("#curriculum-modal").modal('show')
                $("#curriculum-modal .create-data-section").show()
                $("#curriculum-modal .update-data-section").hide()

                _curriculumForm.clearForm()
                _curriculumForm.setTitle("Tambah Kurikulum")
                _curriculumTable.selected = null
            },
            edit: function(e) {
                $("#curriculum-modal").modal('show')
                $("#curriculum-modal .create-data-section").hide()
                $("#curriculum-modal .update-data-section").show()

                _curriculumForm.clearForm()
                _curriculumForm.setTitle("Update Kurikulum")
                _curriculumTable.selected = _curriculumTable.getRowData(e)

                _curriculumForm.setData(_curriculumTable.selected)
            },
            save: function() {
                // get submit data from form
                let formRequest = FormDataJson.toJson("#curriculum-form")
                // remove unused field
                delete formRequest['filepond']
                // decide request method and url
                let url = _baseURL + '/api/curriculum'
                if (_curriculumTable.selected != null) {
                    url = url + '/' + _curriculumTable.selected.id
                    formRequest['_method'] = 'PUT'
                }
                // append and validate document data
                let uploader = _curriculumForm.uploader
                for (const item of uploader.getDocuments()) {
                    if (!item.instance.allFileUploaded()) {
                        _toastr.error('Anda sedang mengupload dokumen', 'Failed')
                        return false
                    }

                    formRequest[`${item.name}`] = item.instance.getFileId()
                }
                // submit data
                $.post(url, formRequest, function(data) {
                    if (data.success) {
                        $("#curriculum-modal").modal('hide')
                        _toastr.success('Berhasil menyimpan data', 'Success')
                        _curriculumTable.reload()
                    } else {
                        _toastr.error('Gagal menyimpan data', 'Failed')
                    }
                }).fail(function(error) {
                    _responseHandler.formFailResponse(error)
                })

                return false
            },
            delete: async function(e) {
                const data = _curriculumTable.getRowData(e)

                const confirmed = await _swalConfirmSync({
                    title: 'Apakah anda yakin ?',
                    text: 'Menghapus kurikulum ' + data.name
                })
                if (!confirmed)
                    return

                $.post(_baseURL + '/api/curriculum/' + data.id, {
                    _method: 'DELETE'
                }, function(data) {
                    _toastr.success('Berhasil menghapus kurikulum', 'Success')
                    _curriculumTable.reload()
                }).fail((error) => {
                    _responseHandler.generalFailResponse(error)
                })
            }
        }
        const _curriculumForm = {
            uploader: {
                book: {
                    name: 'book_document',
                    title: 'Dokumen Buku Kurikulum',
                    instance: null
                },
                sk: {
                    name: 'sk_document',
                    title: 'Dokumen SK',
                    instance: null
                },
                ba: {
                    name: 'ba_document',
                    title: 'Dokumen BA',
                    instance: null
                },
                report: {
                    name: 'report_document',
                    title: 'Dokumen Laporan',
                    instance: null
                },
                init: function() {
                    FilePond.registerPlugin(FilePondPluginFileValidateType)

                    this.book.instance = new Filepond("#book_document")
                    this.sk.instance = new Filepond("#sk_document")
                    this.ba.instance = new Filepond("#ba_document")
                    this.report.instance = new Filepond("#report_document")
                },
                getDocuments: function() {
                    let list = []
                    for (const item of Object.keys(this)) {
                        if (typeof(this[item]) == 'function')
                            continue;

                        list.push(this[item])
                    }

                    return list
                }
            },
            clearForm: function() {
                FormDataJson.clear('#curriculum-form')
                $("#curriculum-form .select2").val('').trigger('change')
                // clear document uploader
                let uploader = _curriculumForm.uploader
                for (const item of uploader.getDocuments()) {
                    item.instance.clearInput()
                }
            },
            setData: function(data) {
                console.log({
                    data
                })
                FormDataJson.fromJson("#curriculum-form", data)
                // set studyprogram
                $("#curriculum-form [name=studyprogram_id]").append($(`
                <option selected>${data.studyprogram?.name ?? '-'}</option>
            `).val(data.studyprogram_id)).trigger('change')
                // set document link
                let uploader = _curriculumForm.uploader
                for (const item of uploader.getDocuments()) {
                    let el = `#curriculum-form #${item.name}`
                    if (data[item.name] == null) {
                        $(el).next().hide()
                    } else {
                        $(el).next().show()
                        $(el).next().find(".document-preview").attr({
                            href: data[item.name].replace('amp;', '')
                        })
                    }
                }
            },
            setTitle: function(title) {
                $("#curriculum-modal .modal-title").html(title)
            },
            initStudyProgramSearch: function() {
                $("#curriculum-form [name=studyprogram_id]").select2(
                    _select2AjaxWithDTOptions({
                        url: _baseURL + "/api/studyprogram",
                        searchColumns: ['name'],
                        item: (item) => {
                            return {
                                id: item.id,
                                text: `${item.name}`
                            }
                        },
                        dropdownParent: $('#curriculum-modal')
                    })
                )
            }
        }
    </script>
@endsection
