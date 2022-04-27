@extends('layouts.app')

@section('content')
    @include('layouts.cards.cust-cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Customers</h3>
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
                            <th scope="col" class="sort" data-sort="name">Name</th>
                            <th scope="col" class="sort" data-sort="email">E-mail</th>
                            <th scope="col" class="sort" data-sort="phone">Phone Number</th>
                            <th scope="col" class="sort" data-sort="idtag">ID Tag</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <tr>
                            <th scope="row">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <span class="name mb-0 text-sm">Dionysius Aldion Renata</span>
                                </div>
                              </div>
                            </th>
                            <td class="email">
                              dion@brin.go.id
                            </td>
                            <td class="phone">
                              +62-819-555-908
                            </td>
                            <td class="idtag">
                              047583FA472880
                            </td>
                            <td class="status">
                              <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">Verified</span>
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
                                    <span class="name mb-0 text-sm">Prasetyo Aji</span>
                                  </div>
                                </div>
                              </th>
                              <td class="email">
                                aji@brin.go.id
                              </td>
                              <td class="phone">
                                +62-815-555-823
                              </td>
                              <td class="idtag">
                                04673122b12d80
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">Verified</span>
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
                                    <span class="name mb-0 text-sm">Tisha Aditya Anggraini Jamaluddin</span>
                                  </div>
                                </div>
                              </th>
                              <td class="email">
                                tisha@brin.go.id
                              </td>
                              <td class="phone">
                                +62-838-555-972
                              </td>
                              <td class="idtag">
                                04546a1aac4f80
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-info"></i>
                                  <span class="status">Pending</span>
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
                                    <span class="name mb-0 text-sm">Adisa Larasati</span>
                                  </div>
                                </div>
                              </th>
                              <td class="email">
                                adisa@brin.go.id
                              </td>
                              <td class="phone">
                                +62-899-555-038
                              </td>
                              <td class="idtag">
                                042e8392a22a80
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-danger"></i>
                                  <span class="status">Unverified</span>
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
                                    <span class="name mb-0 text-sm">Hafsah Halidah</span>
                                  </div>
                                </div>
                              </th>
                              <td class="email">
                                hafsah@brin.go.id
                              </td>
                              <td class="phone">
                                +62-898-555-487
                              </td>
                              <td class="idtag">
                                042a5f9ab02d80
                              </td>
                              <td class="status">
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-info"></i>
                                  <span class="status">Pending</span>
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
