@include('layouts.components.header')
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">




                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                  <ul class="m-0 p-0 list-none">
                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                      <a href="#">
                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                      </a>
                    </li>
                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                      Users
                      <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                      Edit Data</li>
                  </ul>
                </div>
                <!-- END: BreadCrumb -->
                <div class="grid xl:grid-cols-1 grid-cols-1 gap-6">
                  <div class="card">
                    <div class="card-body flex flex-col p-6">
                      <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                          <div class="card-title text-slate-900 dark:text-white">Edit Data {{ $user -> name}}</div>
                        </div>
                      </header>
                      <div class="card-text h-full ">
                        <form class="space-y-4" action="{{ route('users.prosesupdateuser', $user->id) }}" method="post" enctype="multipart/form-data">
                                @csrf		
                                @method('PUT')
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user -> name}}" required autocomplete="name" autofocus>
                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Email</label>
                                    <input id="email" readonly type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user -> email}}" required autocomplete="email">
                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror   
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="kosongkan jika tidak ingin mengganti password">
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Tempat Lahir</label>
                            <input type="text" class="form-control" required name="tempat_lahir" value="{{ $user ->tempat_lahir }}" >
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Tanggal Lahir</label>
                            <input type="date" class="form-control" required name="tgl_lahir" value="{{ $user -> tgl_lahir}}">
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Gender</label>
							<select class="form-control" required name="gender">
								<option>{{ $user -> gender}}</option>
								<option>Laki-Laki</option>
								<option>Perempuan</option>
							</select>
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">No Telepon</label>
                            <input type="text" class="form-control" required name="telp" value="{{ $user -> telp}}">
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Alamat</label>
                            <input type="text" class="form-control" required name="alamat" value="{{ $user -> alamat}}">
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Jabatan</label>
							<select class="form-control" required name="jabatan">
							<option value="{{ $user ->foreign_jabatan->id}}">{{ $user ->foreign_jabatan->nama_jabatan}}</option>
											@forelse ($jabatan as $tampiljabatan)
												<option value="{{ $tampiljabatan->id }}">{{ $tampiljabatan->nama_jabatan }}</option>
												@empty
												<option disabled>Tidak ada data</option>
											@endforelse
							</select>
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Status</label>
							<select class="form-control" required name="status_karyawan">
							<option>{{ $user -> status_karyawan}}</option>
								<option>aktif</option>
								<option>tidak aktif</option>
								<option>cuti</option>
							</select>
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Level</label>
							<select class="form-control" required name="level">
							<option>{{ $user -> level}}</option>
								<option>pimpinan</option>
								<option>sekretaris</option>
								<option>pegawai</option>
							</select>
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                    <strong class="text-info"><a href="{{ url ('foto/') }}/{{ $user->foto }}" target="_blank">Gambar Sekarang: {{ $user->foto }}</a></strong>
                                    @error('foto')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror   
                          </div>						  
                          <button type="submit" class="btn inline-flex justify-center btn-dark ml-28">Update</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>

 @include('layouts.components.footer')