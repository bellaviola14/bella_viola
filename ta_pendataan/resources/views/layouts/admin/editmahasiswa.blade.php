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
                      Mahasiswa
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
                          <div class="card-title text-slate-900 dark:text-white">Update Data {{ $mahasiswa->nama_mahasiswa}}</div>
                        </div>
                      </header>
                      <div class="card-text h-full ">
                        <form class="space-y-4" action="{{ route('mahasiswa.prosesupdatemahasiswa', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                                      @csrf		
                                @method('PUT')
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Nama </label>
                            <input type="text" class="form-control" required value="{{ $mahasiswa->nama_mahasiswa}}" name="nama_mahasiswa">
                          </div>
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">NIM</label>
                            <input type="text" class="form-control" required value="{{ $mahasiswa->nim}}" name="nim">
                          </div>		
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Kelas</label>
							<select class="form-control" required name="kelas">
							<option selected value="{{ $mahasiswa->foreign_kelas->id}}">{{ $mahasiswa->foreign_kelas->nama_kelas}}</option>
											@forelse ($kelas as $tampilkelas)												
												<option value="{{ $tampilkelas->id }}">{{ $tampilkelas->nama_kelas }}</option>
												@empty
												<option disabled>Tidak ada data</option>
											@endforelse
							</select>
                          </div>						  
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Jenis Kelamin</label>
							<select class="form-control" required name="jenis_kelamin">
								<option>{{ $mahasiswa->jenis_kelamin}}</option>
								<option>LAKI-LAKI</option>
								<option>PEREMPUAN</option>
							</select>
                          </div>		
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel"> Tanggal<br> Lahir</label>
                            <input type="date" class="form-control" required value="{{ $mahasiswa->ttl}}"  name="ttl">
                          </div>		
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">No Telepon</label>
                            <input type="text" class="form-control" required value="{{ $mahasiswa->no_telp}}" name="no_telp">
                          </div>		
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Email</label>
                            <input type="email" class="form-control" value="{{ $mahasiswa->email}}" required name="email">
                          </div>		
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Tahun Masuk</label>
                            <input type="text" class="form-control" required value="{{ $mahasiswa->tahun_masuk}}" name="tahun_masuk">
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Alamat</label>
                            <input type="text" class="form-control" value="{{ $mahasiswa->alamat}}" required name="alamat">
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Jalur Masuk</label>
							<select class="form-control" required name="jalur_masuk">
								<option selected>{{ $mahasiswa->jalur_masuk}}</option>
								<option>Mandiri</option>
								<option>Prestasi</option>
								<option>SNMPTN</option>	
								<option>B2P</option>
								<option>SBMPTN</option>
								<option>KIP</option>
							</select>
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Data Lainnya</label>
                            <textarea class="form-control" name="data_lainnya">{{ $mahasiswa->nim}}</textarea>
                          </div>	
                          <div class="input-area relative pl-28">
                            <label for="largeInput" class="inline-inputLabel">Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                    <strong class="text-info"><a href="{{ url ('foto/') }}/{{ $mahasiswa->foto }}" target="_blank">Gambar Sekarang: {{ $mahasiswa->foto }}</a></strong>
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