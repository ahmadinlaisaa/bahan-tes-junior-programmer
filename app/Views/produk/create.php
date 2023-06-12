<?= $this->extend('layout/appLayout') ?>

<?= $this->section('content') ?>


<div class="pt-5">
    <div class="sm:flex justify-between sm:w-3/4 mx-auto">
        <h1 class="text-xl md:text-3xl font-medium title">Tambah Produk</h1>
        <span class="text-gray-400"><a href="/" class="text-gray-900 hover:text-gray-400">Semua produk</a> / tambah produk</span>
    </div>
    
    <?php if(session()->has('validation')) {?>
        <?php $validation = session('validation'); ?>
    <?php }?>

    <form method="POST" action="<?= base_url('/storeproduk') ?>" class="sm:w-3/4  p-5 mx-auto mt-5 rounded-lg">
        <div class="relative z-0 w-full my-6 group">
            <input type="text" name="nama_produk" value="<?= old('nama_produk') ?>" id="floating_nama_produk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
            <label for="floating_nama_produk" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Nama produk</label>

            <!-- error message -->
            <?php if(session()->has('validation')) {?>
                <?php if($validation->getError('nama_produk')) {?>
                    <div class='text-sm text-red-500'>
                    <?= $error = $validation->getError('nama_produk'); ?>
                    </div>
                <?php }?>
            <?php }?>
            <!-- end error message -->
        </div>
        <div class="grid">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="harga" value="<?= old('harga') ?>" id="floating_harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_harga" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Harga</label>

                <!-- error message -->
                <?php if(session()->has('validation')) {?>
                    <?php if($validation->getError('harga')) {?>
                        <div class='text-sm text-red-500'>
                        <?= $error = $validation->getError('harga'); ?>
                        </div>
                    <?php }?>
                <?php }?>
                <!-- end error message -->
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <label for="kategori_select" class="sr-only">Kategori</label>
                <select id="kategori_select" name="kategori" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="">Pilih Kategori</option>
                    <option value="L MTH AKSESORIS (IM)">L MTH AKSESORIS (IM)</option>
                    <option value="L MTH AKSESORIS (LK)">L MTH AKSESORIS (LK)</option>
                    <option value="L MTH TABUNG (LK)">L MTH TABUNG (LK)</option>
                    <option value="SP MTH SPAREPART (LK)">SP MTH SPAREPART (LK)</option>
                    <option value="CI MTH TINTA LAIN (IM)">CI MTH TINTA LAIN (IM)</option>
                    <option value="S MTH STEMPEL (IM)">S MTH STEMPEL (IM)</option>
                </select>
                <!-- error message -->
                <?php if(session()->has('validation')) {?>
                    <?php if($validation->getError('kategori')) {?>
                        <div class='text-sm text-red-500'>
                        <?= $error = $validation->getError('kategori'); ?>
                        </div>
                    <?php }?>
                <?php }?>
                <!-- end error message -->
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="status_select" class="sr-only">Status</label>
                <select id="status_select" name="status" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="">Status</option>
                    <option value="bisa dijual">bisa dijual</option>
                    <option value="tidak bisa dijual">tidak bisa dijual</option>
                </select>
                <!-- error message -->
                <?php if(session()->has('validation')) {?>
                    <?php if($validation->getError('status')) {?>
                        <div class='text-sm text-red-500'>
                        <?= $error = $validation->getError('status'); ?>
                        </div>
                    <?php }?>
                <?php }?>
                <!-- end error message -->
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>