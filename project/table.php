<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($semuaData as $value) {
            ?>
            <tr>
              <td> <?php echo $value['ID'] ? $value['ID'] : 'NULL' ; ?> </td>
              <td> <?php echo $value['name'] ? $value['name'] : '-'  ; ?> </td>
              <!-- harus di tutup } dan tanda {} bisa dipisah untuk setiap deklrasi php di html nya -->
              <td> <?php echo $value['address'] ? $value['address'] : '-' ; 
            } ?> </td>
            </tr>

           
        </tbody>
      </table>