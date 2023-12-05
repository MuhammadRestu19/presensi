<form action="/departemen/{{ $departemen->kode_dept }}/update" method="POST" id="frmDepartemen">
    @csrf
    <div class="row">
       <div class="col-12">
        <div class="input-icon mb-3">
            <span class="input-icon-addon">
              <!-- Download SVG icon from http://tabler-icons.io/i/user -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M9 8l1 0" /><path d="M9 12l1 0" /><path d="M9 16l1 0" /><path d="M14 8l1 0" /><path d="M14 12l1 0" /><path d="M14 16l1 0" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" /></svg>
            </span>
            <input type="text" value="{{$departemen->kode_dept}}" id="kode_dept" class="form-control" name="kode_dept" placeholder="Kode Dept" readonly>
          </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-12">
         <div class="input-icon mb-3">
             <span class="input-icon-addon">
               <!-- Download SVG icon from http://tabler-icons.io/i/user -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
             </span>
             <input type="text" value="{{$departemen->nama_dept}}" id="nama_dept" class="form-control" name="nama_dept" placeholder="Nama Departemen">
           </div>
         </div> 
     </div>
     <div class="row mt-3">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">Simpan</button>
            </div>
        </div>
     </div>
  </form>