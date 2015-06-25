<div role="tabpanel">

  <!-- Nav tabs -->
    <ul id="panelGestion" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#Localidades" aria-controls="Localidades" role="tab" data-toggle="tab">Localidades</a></li>
        <li role="presentation"><a href="#provincias" aria-controls="provincias" role="tab" data-toggle="tab">Provincias</a></li>
        <li role="presentation"><a href="#dia" aria-controls="dia" role="tab" data-toggle="tab">Dias</a></li>
        <li role="presentation"><a href="#turno" aria-controls="turno" role="tab" data-toggle="tab">Turnos</a></li>
        <li role="presentation"><a href="#tAct" aria-controls="tAct" role="tab" data-toggle="tab">Tipo Actividad</a></li>
        <li role="presentation"><a href="#gActividad" aria-controls="gActividad" role="tab" data-toggle="tab">Grupo Actividad</a></li>
        <li role="presentation"><a href="#genero" aria-controls="genero" role="tab" data-toggle="tab">Generos</a></li>
        <li role="presentation"><a href="#tProducto" aria-controls="tProducto" role="tab" data-toggle="tab">Tipo Producto</a></li>
        <li role="presentation"><a href="#talle" aria-controls="talle" role="tab" data-toggle="tab">Talles</a></li>
        <li role="presentation"><a href="#marca" aria-controls="marca" role="tab" data-toggle="tab">Marcas</a></li>
        <li role="presentation"><a href="#categoria" aria-controls="categoria" role="tab" data-toggle="tab">Categorias</a></li>
    </ul>

  <!-- Tab panes -->
    <div  class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Localidades">
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-local" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-local">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Localidad">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Quilmes</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Avellaneda</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Moron</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
              
            
        
        </div>
        <div role="tabpanel" class="tab-pane" id="provincias"> 
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-provincias" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-provincias">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Provincia">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Buenos Aires</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Cordoba</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>La Pampa</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        
        </div>
        <div role="tabpanel" class="tab-pane" id="dia"> 
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-dia" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-dia">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Dia">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Lunes</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Miercoles</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        
        </div>
        <div role="tabpanel" class="tab-pane" id="turno"> 
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-turno" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-turno">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Turno">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Mañana</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Tarde</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Noche</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        
        </div>
        <div role="tabpanel" class="tab-pane " id="tAct">
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-tAct" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-tAct">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Tipo de Actividad. Ej: cardio">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Cardio</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Postural y Conciente</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tecnico</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
            
        </div>
        <div role="tabpanel" class="tab-pane " id="gActividad"> 
        
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-gActividad" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-gActividad">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Grupo de Actividad. Ej:Acuatica">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Acuatica</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Baile</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Aerobica</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>
        <div role="tabpanel" class="tab-pane" id="genero">
        
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-genero" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-genero">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Genero">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Masculino</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Femenino</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Niños</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>       
        <div role="tabpanel" class="tab-pane" id="tProducto">
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-tProducto" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-tProducto">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Tipo de Producto">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Camperas</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Remeras</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Buzos</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>
        <div role="tabpanel" class="tab-pane" id="talle"> 
        
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-talle" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-talle">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Talle">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>XL</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>L</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>
        <div role="tabpanel" class="tab-pane" id="categoria"> 
        
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-categoria" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-categoria">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Categoria">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                                <td>Calzados</td>
                                <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Bolsos y Mochilas</td>
                                <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Accesorios</td>
                                <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                </td>
                                    
                                
                            </tr>
                            <tr>
                                <td>Insumos Varios</td>
                                <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                </td>
                                    
                            </tr>


                </tbody>

            </table>
        </div>
        <div role="tabpanel" class="tab-pane" id="marca"> 
        
            <button class="btn btn-primary btnLista" type="button" data-toggle="collapse" data-target="#coll-marca" aria-expanded="false" aria-controls="collapseExample">
              Agregar
            </button>
            <div class="collapse" id="coll-marca">
              <div class="well">
                <form>
                    <div class="form-group">
                        <label for="nombre-actividad">Descripcion</label>
                        <input id="nombre-actividad" type="text" class="form-control" placeholder="Talle">
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                </form>
              </div>
            </div>
                  
          <table class="table table-bordered">
                <thead class="cabecera-tabla">
                    <tr >
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>Adidas</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>

                    </tr>
                    <tr>
                        <td>Nike</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Reebok</td>
                        <td>
                                <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>
        
    </div>

    
</div>
