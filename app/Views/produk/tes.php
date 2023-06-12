<?php foreach ($data as $value): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="p-3 md:px-6 md:py-3">
                            <?= $value['id_produk'] ?>
                        </td>
                        <td class="p-3 md:px-6 md:py-3">
                            <?= $value['nama_produk'] ?>
                        </td>
                        <td class="p-3 md:px-6 md:py-3">
                            <?= $value['harga'] ?>
                        </td>
                        <td class="p-3 md:px-6 md:py-3">
                            <?= $value['kategori'] ?>
                        </td>
                        <td class="p-3 md:px-6 md:py-3">
                            <?= $value['status'] ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>