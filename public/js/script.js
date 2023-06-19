// run the function
let angka = 1
if (document.getElementById("produk_table") != null) {
  loadData()
}
  
// end run the function

$(document).on({
  ajaxStart: function () {
    document.getElementById("loading-modal").style.display= "block"
  },
  ajaxStop: function () {
    document.getElementById("loading-modal").style.display = "none";
  },
})

//function
  function getDataApi() {
    $.ajax({
      type: "POST",
      url: "https://recruitment.fastprint.co.id/tes/api_tes_programmer",
      data: {
        username: "tesprogrammer130623C10",
        password: md5('bisacoding-13-06-23')
      },
      dataType: "json",
      success: function (response) {
        $.ajax({
          type: "POST",
          url: "/getdata",
          data: { data: response.data },
          success: function () {
            loadData();
          },
          error: function (xhr, ajaxOptions, thrownError) {
            // alert(xhr.status)
            // alert(thrownError)
          },
        });
        loadData();
      },
      error: function (xhr, ajaxOptions, thrownError) {
        // alert(xhr.status)
        if (xhr.status === 400) {
          alert("Kredensial tidak sesuai!");
        } else {
          alert("terjadi kesalahan");
        }
      },
    });
  }

  function loadData() { 
    let num = 1
    $.ajax({
      type: "GET",
      url: "/loaddata",
      success: function (response) {
        let jsonData = response
        let table = ""

        if (jsonData.length == 0) {
          table += `<tr><td colspan="5"><p class="text-center text-3xl">Tidak ada data</p></td></tr>`
          $("#produk_table").html(table)
          return
        }
        

        Object.values(jsonData).map((a) => {
          table += `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="p-3 md:px-6 md:py-3">
                ${num++}
            </td>
            <td class="p-3 md:px-6 md:py-3">
                ${a.id_produk}
            </td>
            <td class="p-3 md:px-6 md:py-3">
                ${a.nama_produk}
            </td>
            <td class="p-3 md:px-6 md:py-3">
                ${a.harga}
            </td>
            <td class="p-3 md:px-6 md:py-3">
                ${a.kategori}
            </td>
            <td class="p-3 md:px-6 md:py-3">
                ${a.status}
            </td>
            <td class="p-3 md:px-6 md:py-3 grid grid-col sm:grid-flow-col gap-1">
                <a href="#delete-modal" rel="modal:open" class="delete_btn text-white bg-red-700 p-1 sm:p-2 text-sm rounded-lg text-center" data-id=${a.id_produk}>Hapus</a>
                <a href="#update-modal" rel="modal:open" class="update_btn text-white bg-blue-700 p-1 sm:p-2 text-sm rounded-lg text-center" data-id=${a.id_produk}>edit</a>
            </td>
          </tr>`
        })
        $("#produk_table").html(table)
      },
      error: function (e) { 
        console.error(e);
      }
    })
  }
// end function

// event
  // untuk mengambil tombol hapus yang digenerate oleh javascript
  $("#produk_table").on('click', ".delete_btn", function () {
    let id = $(this).data("id")
    $(".id-produk").text(id)
  })

  $("#delete-confirm").on('click', function () {
    let id = $(".id-produk").text()
    deleteData(id)
  })

  $("#produk_table").on("click", ".update_btn", function () {
    let id = $(this).data("id")
    showdata(id)
  })

  $("#update_save").on("click", function () {
    let id_produk=$("#id_produk").val();
    let nama_produk=$("#nama_produk").val();
    let harga=$("#harga").val();
    let kategori=$("#kategori").val();
    let status = $("#status").val();
    
    $.ajax({
      type: "POST",
      url: "/updatedata",
      data: {
        id_produk: id_produk,
        nama_produk: nama_produk,
        harga: harga,
        kategori: kategori,
        status: status
      },
      success: function (response) {
        if (response == '200') {
          loadData()
          alert("berhasil diupdate")
        }

        if (response == '400') {
          loadData()
          alert("Terdapat kesalahan validasi")
        }
      }
    });
    // deleteData(id);
  });
// end event
