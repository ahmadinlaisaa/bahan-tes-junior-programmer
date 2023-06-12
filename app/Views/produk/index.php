<?= $this->extend('layout/appLayout') ?>

<?= $this->section('content') ?>

<div class="pt-5">
    <div class="sm:flex justify-between border-b pb-2 sm:pb-4">
        <h1 class="text-xl md:text-3xl font-medium title">Daftar Produk</h1>
        <a href="/createproduk"><button class="bg-green-500 p-1 sm:p-2 text-sm text-slate-50 font-medium rounded-full">Tambah produk</button></a>
    </div>

    <?php if(session()->has('message')): ?>
    <script>
        alert("<?= session('message') ?>")
    </script>
    <?php endif ?>
    
    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-slate-400 ">
                <tr>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        No.
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        id produk
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        nama produk
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        Harga
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        Kategori
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        Status
                    </th>
                    <th scope="col" class="p-3 md:px-6 md:py-3 ">
                        aksi
                    </th>
                </tr>
            </thead>
            <tbody id="produk_table">
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>