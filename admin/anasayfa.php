<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

<?php 

$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:id");
$anasayfa->execute(["id" => 1]);
$row = $anasayfa->fetch(PDO::FETCH_OBJ);

?>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
                 <div class="box">
                     <div class="box-header">
                Anasayfa Ayarları
            </div>
            <div class="box-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Yazı 1</label>
                <textarea name="yazi1" class="form-control" /><?= $row->yazı1; ?></textarea>
            
        </div>
                     <div class="form-group">
                        <label>Yazı 2</label>
                <textarea name="yazi2" class="form-control" /><?= $row->yazı2; ?></textarea>
            
        </div>
                     <div class="form-group">
                  <button type="submit" class="btn btn-primary">Güncelle</button>
            
        </div>

    </section>

    
<?php  

if ($_POST) { 
   

        $sql = "UPDATE anasayfa SET yazı1='".$_POST['yazi1']."', yazı2='".$_POST['yazi2']."' WHERE id=1";
          // Prepare statement
          $stmt = $db->prepare($sql);

          // execute the query
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            
            echo '<meta http-equiv="refresh" content="0; URL=http://localhost/portfolio/admin/anasayfa.php">';
          }else{
            echo "Güncelleme başarısız";

          }

   }


 ?>







    <!-- /.content -->
<?php include 'include/footer.php'; ?>
