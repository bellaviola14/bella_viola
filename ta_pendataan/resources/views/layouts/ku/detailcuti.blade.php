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
              <a href="index.html">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
              </a>
            </li>
            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
              Cuti
              <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
              Detail Cuti {{ $cuti->foreign_users->name }}</li>
          </ul>
        </div>
        <!-- END: BreadCrumb -->

        <div class="lg:flex flex-wrap blog-posts lg:space-x-5 space-y-5 lg:space-y-0 rtl:space-x-reverse">
          <div class="flex-none">
            <div class="lg:max-w-[360px]">
              <div class="card">
                <div class="card-body p-6">

                  <!-- BEGIN: Blog Sidebar -->





                  <div class="space-y-5 divide-y divide-slate-100 dark:divide-slate-700 -mx-6">
                    <div class="pt-4 px-6">
                      <h4 class="text-slate-600 dark:text-slate-300 text-xl font-medium mb-4">
                        Data Diri
                      </h4>
                      <ul class="list-item space-y-6">

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Nama : {{ $cuti->foreign_users->name }}</span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Email : {{ $cuti->foreign_users->email }} </span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Tanggal Lahir : {{ $cuti->foreign_users->tgl_lahir }}</span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Tempat Lahir : {{ $cuti->foreign_users->tempat_lahir }}</span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Gender : {{ $cuti->foreign_users->gender }} </span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span> Telp : {{ $cuti->foreign_users->telp }} </span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Alamat : {{ $cuti->foreign_users->alamat }}</span>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Jabatan : {{ $cuti->foreign_jabatan->nama_jabatan }}</span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="flex space-x-1 items-start leading-[1] text-sm text-slate-500 dark:text-slate-300 hover:text-slate-900 transition
                                duration-150 rtl:space-x-reverse">
                            <span class="text-sm">
                              <iconify-icon icon="heroicons:chevron-right-solid"></iconify-icon>
                            </span>
                            <span>Status Karyawan : {{ $cuti->foreign_users->status_karyawan }}</span>
                          </a>
                        </li>

                      </ul>
                    </div>
                    <div class="pt-4 px-6">
                      <h5 class="text-slate-600 dark:text-slate-300 text-xl font-medium mb-4">
                        Status Cuti : {{ $cuti->status }}
                      </h5>

                      <form action="{{ route('ku.teruskancuti', $cuti->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Teruskan ke Sekretaris</button>
                      </form>
                                <form class="space-y-4" action="{{ route('ku.tolak', $cuti->id) }}" method="post">
                                  @csrf
                                  @method('PUT')					  
                       <button type="submit" class="btn btn-danger">Tolak</button>
					   </form>
<!--
                      <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modaltolak" tabindex="-1" aria-labelledby="dangerModalLabel" aria-hidden="true">
                        <div class="modal-dialog relative w-auto pointer-events-none">
                          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
														rounded-md outline-none text-current">
                            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                              <!-- Modal header 
                              <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-danger-500">
                                <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                  Tolak Data {{ $cuti->id }}
                                </h3>
                                <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
																	dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                  <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
																			11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                                </button>
                              </div>
                              <!-- Modal body -
                              <div class="p-6 space-y-4">
                                <form class="space-y-4" action="{{ route('sekretaris.tolak', $cuti->id) }}" method="post">
                                  @csrf
                                  @method('PUT')
                                  Keterangan <br>
                                  <input type="hidden" name="idfeed" value="{{ $feedback->id }}">
                                  <textarea id="froala-editor" name="keterangan"> </textarea>
                              </div>
                              <!-- Modal footer --
                              <div class="flex items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-danger">Tolak</button>
                              </div>

                              </form>
							  
                            </div>
                          </div>
                        </div>
                      </div>-->

                    </div>
                  </div>
                  <!-- END: Blog Sidebar -->
                </div>
              </div>
            </div>
          </div>
          <div class="flex-1">
            <div class="grid grid-cols-1 gap-5">
              <div class="card p-6">
                <h5 class="card-title text-slate-900">
                  <a href="#">{{ $cuti->foreign_jeniscuti->jenis_cuti }} ({{ $cuti->mulai_cuti }} - {{ $cuti->akhir_cuti }})</a>
                </h5>
                <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
                  <?php

                  echo $cuti->keterangan;

                  ?>
                </div>
                <div class="mt-6">

                  <h5 class="card-title text-slate-900">
                    <a href="#">Feedback Sekretaris </a>
                  </h5>
                  <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
                    <?php

                    echo $feedback->feedback_sekretaris;

                    ?>
                  </div>
                  <br>
                  <h5 class="card-title text-slate-900">
                    <a href="#">Feedback Pimpinan</a>
                  </h5>
                  <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
                    <?php

                    echo $feedback->feedback_pimpinan;

                    ?>
                  </div>
				  <br>
                  <h5 class="card-title text-slate-900">
                    <a href="#">Berkas Permohonan Cuti </a>
                  </h5>
                  <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
							
							<img class="img-fluid" src="{{ url ('doc/') }}/{{ $cuti->berkas_permohonan_cuti }}">
                    
                  </div>
                  <br>	
                  <h5 class="card-title text-slate-900">
                    <a href="#">Dokumen Kelengkapan </a>
                  </h5>
                  <div class="card-text dark:text-slate-300 mt-4 space-y-4 leading-5 text-slate-600 text-sm border-b border-slate-100
                            dark:border-slate-700 pb-6">
							
							<img class="img-fluid" src="{{ url ('doc/') }}/{{ $cuti->dokumen_kelengkapan }}">
                    
                  </div>
<br>				  

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.19/css/froala_editor.min.css" integrity="sha512-frSJfZcjS/cE378Llgugnv4c8y/0a3cS2oVHM08FSEq3dYfJe90KZBI2yEwXDlXnC9My2S2MTEU770dx1lJ9Pw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.19/js/froala_editor.min.js" integrity="sha512-yk3WwS2p/kV3MP4ehzwQZJeoNUJV7wypuelSfIG/C7NqRH8XEVgbroAePhzpd15NGR8YRS+AZMbeShS28e+W3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  new FroalaEditor('textarea#froala-editor', {
    toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo', 'trackChanges', 'markdown']
  })
</script>
@include('layouts.components.footer')