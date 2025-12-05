<?php
  $_SESSION['page_name'] = 'Data User';
?>

<div class="container-fluid py-4">
  <div class="row p-4 bg-white rounded shadow">
    <div class="col-md 12">
      <table id="data_user" class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mahayoga</td>
            <td>myoga.bahtiar@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php include "pages/layout/admin/footer.php";?>
</div>

<script>
  $(document).ready( function () {
    $('#data_user').DataTable();
  });
</script>