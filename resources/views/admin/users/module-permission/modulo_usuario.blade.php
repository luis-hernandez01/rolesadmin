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
                                                    Modulo usuario
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <div class="checkbox">
                                            <label>
                                                <!-- el value tiene que estar en true y con el nombre
                                                que viene del archivo wed ->name('users_list').
                                                
                                                 kvjf -> se encuentra en el archivo function.php-->
        <input type="checkbox" value="true"  name="users_list"  @if(kvjf($permissionid->permissions, 'users_list')) checked @endif>
                                                <label for="users_list">Puede ver el formulario de usuarios</label>
                                            </label>
                                            <label>
                                                <!-- el value tiene que estar en true y con el nombre
                                                que viene del archivo wed ->name('users_form_edit').
                                                
                                                 kvjf -> se encuentra en el archivo function.php-->
        <input type="checkbox" value="true"  name="users_form_edit"  @if(kvjf($permissionid->permissions, 'users_form_edit')) checked @endif>
                                                <label for="users_form_edit">Puede editar datos del usuarios</label>
                                            </label>
                                            <label>
                                                <!-- el value tiene que estar en true y con el nombre
                                                que viene del archivo wed ->name('users_form_show').
                                                
                                                 kvjf -> se encuentra en el archivo function.php-->
        <input type="checkbox" value="true"  name="users_form_show"  @if(kvjf($permissionid->permissions, 'users_form_show')) checked @endif>
                                                <label for="users_form_show">Puede ver datos del usuarios</label>
                                            </label>
                                            <label>
                                                <!-- el value tiene que estar en true y con el nombre
                                                que viene del archivo wed ->name('users_banned').
                                                
                                                 kvjf -> se encuentra en el archivo function.php-->
        <input type="checkbox" value="true"  name="users_banned"  @if(kvjf($permissionid->permissions, 'users_banned')) checked @endif>
                                                <label for="users_banned">Puede suspender un usuario.</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs with icons on Card -->
            </div>