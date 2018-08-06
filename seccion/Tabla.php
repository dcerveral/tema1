<div class="area_tabla ">

  <div class="container">
    <div class="row">



      <div class="col-sm-12">
        <? if ($seccion['titulo'] || $seccion['subtitulo']) { ?>

          <h3>
            <? echo $seccion['titulo']; ?>
          </h3>
          <h5>
            <? echo $seccion['subtitulo']; ?>
          </h5>

      </div>
      <? } ?>







    </div>



    <div class="mitabla" >

      <?
      
     
      $seccion['descripcion']= str_replace ('por bono',' <span class="hidden-xs ">por bono</span>',$seccion['descripcion']);
			$seccion['descripcion']=str_replace (':',' <span class="hidden-xs ">................</span>',$seccion['descripcion']); 
       $seccion['descripcion']= str_replace ('<strong>',' <strong style="color:white; ">',$seccion['descripcion']);
      echo  $seccion['descripcion'];
?>
        
        <div class="col-lg-9  col-md-9 col-sm-9  col-xs-12  " style=" color:white; text-align:right;">
           IVA no incluido
        </div>
      <div style="clear:both;"></div>
     
    </div>
  </div>





</div>
</div>