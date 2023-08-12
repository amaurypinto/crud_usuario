<div class="content">
                    <div class="container-fluid">
                        <br>
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="?c=products&m=create" class="btn  btn-primary">crear nuevo producto</a>
                                     <div class="table-responsive">
                                        <table class="table table-border table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>nombre</th>
                                                    <th>precio</th>
                                                    <th>descripcion</th>
                                                    <th>imagen</th>
                                                    <th>id productos</th>
                                                    <th>comprar</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php  for($i=1;$i<10;$i++){?>
                                            <tr>
                                               <td><?php echo $i?></td>
                                               <td>croissants</td>
                                               <td>precios</td>
                                               <td>descripcion</td>
                                               <td>imagen</td>
                                               <td>id productos</td>
                                               <td>comprar</td>
                                               <td>
                                                <a href="?c=products&m=show" class="btn btn-sm btn-info">ver detalles</a>
                                                <a href="?c=products&m=edit"class="btn btn-sm btn-warning">editar</a>
                                                <a href=""class="btn btn-sm btn-danger">eliminar</a>
                                               </td>
                                               
                                            </tr>
                                            <?php } ?>
                                           </tbody>
                                        </table>
                                     </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                       
                    </div> 

                </div> 

            