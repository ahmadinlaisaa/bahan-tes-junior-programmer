<div id="update-modal" class="modal" style="display: none; padding: 0;">
    <div class="bg-slate-300 rounded-t-lg border-b-1 border-slate-900 h-12 p-2 flex items-center">
        <p class="font-medium text-lg sm:text-2xl">edit produk</p>
    </div>
    <div id="form_update" class="mx-auto rounded-lg p-5">
        <input type="hidden" name="id_produk" id="id_produk">
        <div class="relative z-0 w-full my-6 group">
            <input type="text" name="nama_produk" id="nama_produk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
            <label for="nama_produk" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Nama produk</label>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="harga" id="harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="harga" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Harga</label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <label for="kategori" class="sr-only">Kategori</label>
                <select id="kategori" name="kategori" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="">Pilih Kategori</option>
                    <option value="L MTH AKSESORIS (IM)">L MTH AKSESORIS (IM)</option>
                    <option value="L MTH AKSESORIS (LK)">L MTH AKSESORIS (LK)</option>
                    <option value="L MTH TABUNG (LK)">L MTH TABUNG (LK)</option>
                    <option value="SP MTH SPAREPART (LK)">SP MTH SPAREPART (LK)</option>
                    <option value="CI MTH TINTA LAIN (IM)">CI MTH TINTA LAIN (IM)</option>
                    <option value="S MTH STEMPEL (IM)">S MTH STEMPEL (IM)</option>
                </select>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="status" class="sr-only">Status</label>
                <select id="status" name="status" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="">Status</option>
                    <option value="bisa dijual">bisa dijual</option>
                    <option value="tidak bisa dijual">tidak bisa dijual</option>
                </select>
            </div>
        </div>
        <a href="" rel="modal:close" id="update_save" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</a>
    </div>
</div>