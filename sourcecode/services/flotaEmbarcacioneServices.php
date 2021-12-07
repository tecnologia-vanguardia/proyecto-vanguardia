<?php
                    $conexion = mysqli_connect("localhost", "u107623996_almar", "Almar123", "u107623996_almar") or die("Problemas con la conexión");
                    $query = "select NombreEmbarcacion,TipoEmbarcacion,Descripcion,Foto, Precio, link FROM embarcaciones";

                        $registros=mysqli_query($conexion, $query)
                            or die("Problemas en el select" . mysqli_error($conexion));
                        
                            while ($reg = mysqli_fetch_array($registros)) {
                                
                                echo "
                        
                                    <div class='column ".$reg['TipoEmbarcacion']." col-sm-4'>
                                        <div class='card border-primary mb-3'>
                                            <img class='card-img-top' src='../".$reg['Foto']."' alt='Card image' style='width:100%'>
                                            <div class='card-body text-center'>
                                                <h5 class='card-title'>".$reg['NombreEmbarcacion']."</h5>
                                                <p class='card-text'>".$reg['Descripcion']."</p>
                                                <p class='card-text'>Precio: $" .$reg['Precio']." dlls</p>
                                                <a href=" .$reg['link']." class='btn btn-primary'>Reservar</a>
                                            </div>
                                        </div>
                                    </div>
                            
                                ";              
                            }mysqli_close($conexion);
    ?>