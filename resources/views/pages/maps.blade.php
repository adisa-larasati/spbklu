@extends('layouts.app')

@section('content')
    @include('layouts.cards.trans-cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Page visits</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                              <th scope="col" class="sort" data-sort="swap">Swapping Station</th>
                              <th scope="col" class="sort" data-sort="idtag">ID Tag</th>
                              <th scope="col" class="sort" data-sort="time">Time</th>
                              <th scope="col" class="sort" data-sort="batteryid">Battery ID</th>
                              <th scope="col" class="sort" data-sort="status">Status</th>
                              <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                          <tr>
                            <th scope="row">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">SPBKLU Serpong</span>
                                </div>
                              </div>
                            </th>
                            <td class="chargebox">
                              T54_IT1_4118_062
                            </td>
                            <td class="city">
                              Tangerang Selatan
                            </td>
                            <td class="heartbeat">
                              2022-04-16 06:32:22
                            </td>
                            <td class="status">
                              <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">Available</span>
                              </span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                  <a class="dropdown-item" href="#">View</a>
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">SPBKLU Thamrin</span>
                                  </div>
                                </div>
                              </th>
                              <td class="chargebox">
                                T54_IT1_4118_063
                              </td>
                              <td class="city">
                                Jakarta Pusat
                              </td>
                              <td class="heartbeat">
                                2022-04-19 17:23:56
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">Available</span>
                                </span>
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                              <tr>
                                  <th scope="row">
                                    <div class="media align-items-center">
                                      <div class="media-body">
                                        <span class="name mb-0 text-sm">SPBKLU MT Haryono</span>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="chargebox">
                                    T54_IT1_4118_062
                                  </td>
                                  <td class="city">
                                    Jakarta Timur
                                  </td>
                                  <td class="heartbeat">
                                    2022-04-17 12:23:09
                                  </td>
                                  <td class="status">
                                    <span class="badge badge-dot mr-4">
                                      <i class="bg-success"></i>
                                      <span class="status">Available</span>
                                    </span>
                                  </td>
                                  <td class="text-right">
                                    <div class="dropdown">
                                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              <tr>
                                  <th scope="row">
                                    <div class="media align-items-center">
                                      <div class="media-body">
                                        <span class="name mb-0 text-sm">SPBKLU Lenteng Agung</span>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="chargebox">
                                    T54_IT1_4118_062
                                  </td>
                                  <td class="city">
                                    Jakarta Selatan
                                  </td>
                                  <td class="heartbeat">
                                    2022-04-06 12:21:35
                                  </td>
                                  <td class="status">
                                    <span class="badge badge-dot mr-4">
                                      <i class="bg-success"></i>
                                      <span class="status">Available</span>
                                    </span>
                                  </td>
                                  <td class="text-right">
                                    <div class="dropdown">
                                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                          <tr>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">SPBKLU Grogol</span>
                                  </div>
                                </div>
                              </th>
                              <td class="chargebox">
                                T54_IT1_4118_062
                              </td>
                              <td class="city">
                                Jakarta Barat
                              </td>
                              <td class="heartbeat">
                                2022-04-22 04:45:16
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">Available</span>
                                </span>
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
