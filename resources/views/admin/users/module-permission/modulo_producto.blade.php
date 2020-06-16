<div class="col-sm-4">
                        <!-- Tabs with icons on Card -->
                        <div class="card card-nav-tabs">
                            <div class="header header-success">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            
                                            <li class="active" >
                                                <a href="#settings" data-toggle="tab">
                                                    <i class="material-icons">build</i>
                                                    Modulo Producto
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="settings">
                                        <div class="checkbox">
                                            <label>
                                                <!-- el value tiene que estar en true y con el nombre
                                                que viene del archivo wed ->name('products_list').
                                                
                                                 kvjf -> se encuentra en el archivo function.php-->
                                                <input type="checkbox" value="true" name="products_list" @if(kvjf($permissionid->permissions, 'products_list')) checked @endif>
                                                <label for="products_list">Puede ver el formulario de producto</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs with icons on Card -->
            </div>