@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div>
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th >id</th>
                                <th >Kategori</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($kategori as $item)
                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>
                                    <td>
                                        {{ $item->nama_kategori }}
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                                                    fdprocessedid="30uvxc">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('kategori.edit', $item->id) }}">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('kategori.delete', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-danger"> Delete</button>
                                                    </form>
                                                </div>
                                            </div>

                                    </td>
                                </tr>



                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Tidak ada data
                                    </td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal modal-blur fade show" id="modal-danger" tabindex="-1" style="display: block;" aria-modal="true" role="dialog">
              <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <div class="modal-status bg-danger"></div>
                  <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 9v4"></path><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path><path d="M12 16h.01"></path></svg>
                    <h3>Anda yakin</h3>
                    <div class="text-secondary">Yakin mau menghapus data yang sudah anda buat? perubahan tidak dapat dikembalikan.</div>
                  </div>
                  <div class="modal-footer">
                    <div class="w-100">
                      <div class="row">
                        <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                            Cancel
                          </a></div>
                        <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                            Delete 84 items
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-end">
                <a href="/kategori-create" class="btn btn-primary mt-3">Input data</a>
            </div>
        </div>
    </div>
@endsection
