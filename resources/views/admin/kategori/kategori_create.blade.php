     {{-- from tambah data --}}
     <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
         id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
         style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
         <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
             <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">
                 Tambah Data Kategori
             </h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body px-4">
             <div class="row justify-content-center">
                 <div class="col-lg-12">
                     <div class="card bg-white border-0 rounded-10 mb-4">
                         <div class="card-body p-4">
                             <div class="tab-content" id="myTabContent">
                                 <div class="con tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                     aria-labelledby="preview-tab" tabindex="0">
                                     <form action="/kategori/create" method="POST">
                                         @csrf
                                         <div class=" row">
                                             <div class="col-lg-12">
                                                 <div class="form-group mb-4">
                                                     <label class="label">Nama Kategori</label>
                                                     <div class="form-group position-relative">
                                                         <input type="text" name="nama_kategori"
                                                             class="form-control text-dark ps-5 h-58"
                                                             placeholder="Enter Name" required />
                                                         <i
                                                             class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <button type="submit"
                                             class="btn btn-primary text-white fs-16 fw-semibol py-2 px-3 mt-2 me-2">
                                             Simpan</button>

                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- end from tambah data --}}
