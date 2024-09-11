<?php 
include ("../../bd.php");
include ("../../templates/header.php");

    if($_POST){
        $titulo=(isset($_POST["titulo"]))?$_POST["titulo"]:"";
        $descripcion=(isset($_POST["descripcion"]))?$_POST["descripcion"]:"";
        $link=(isset($_POST["link"]))?$_POST["link"]:"";

        $sentencia=$conexion->prepare("INSERT INTO `tbl_banners` 
        (`ID`, `titulo`, `descripcion`, `link`) 
        VALUES (NULL, :titulo, :descripcion,:link);");


        $sentencia->bindParam(":titulo",$titulo);
        $sentencia->bindParam(":descripcion",$descripcion);
        $sentencia->bindParam(":link",$link);


        $sentencia->execute();
        header("Location:index.php");
    }


?>
<br/>
<div class="card">
    <div class="card-header">Banners</div>
    <div class="card-body">
        <form action="" method="post">
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo:</label>
            <input type="text"class="form-control"name="titulo"id="titulo"aria-describedby="helpId"placeholder="Escribe el titulo del banner"/>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <input type="text"class="form-control"name="descripcion"id="descripcion"aria-describedby="helpId"placeholder="Escribe la descripcion del banner "/>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link:</label>
            <input type="text"class="form-control"name="link"id="link"aria-describedby="helpId"placeholder="Escribe el enlace"/>
        </div>

            <button type="submit" class="btn btn-success">Crear banner</button>
            <a name=""id=""class="btn btn-primary"href="index.php"role="button">Cancelar</a>
            


        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include ("../../templates/footer.php"); ?>
