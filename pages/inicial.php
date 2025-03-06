    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
            .estilo{
                color: #152;
            }
        </style>
    </head>
    <body>
        
        </html>
        <div class="page-body">
            <div class="row">
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-pie-chart bg-c-blue card1-icon" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>    
                            </svg>
                            <span class="text-c-blue f-w-600">Operações</span>
                                <h4>
                                    <?php 
                                        $sql = "SELECT * FROM operacao;";
                                        $result = $mysqli->query($sql);
                                        $resultCheck = mysqli_num_rows($result);
                                        echo $resultCheck;  
                                    ?>
                                </h4>
                            <div>
                                <?php if($erro == "Admin"){ ?>
                                <span class="f-left m-t-10 text-muted estilo">
                                    <i class="ti-layout-tab"></i>>
                                    <a href="index.php?p=opRegistradas">Operações Registradas</a>
                                </span>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
    
                            <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-ui-home bg-c-pink card1-icon" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>   
                            </svg>
    
                            <span class="text-c-pink f-w-600">Usuarios</span>
                                <h4>
                                    <?php 
                                        $sql = "SELECT * FROM usuarios;";
                                        $result = $mysqli->query($sql);
                                        $resultCheck = mysqli_num_rows($result);
                                        echo $resultCheck;  
                                    ?>
                                </h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Cadastrados
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-warning-alt bg-c-green card1-icon" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
    
                            <span class="text-c-green f-w-600">Acessos</span>
                            <h4>
                                <?php 
                                    $sql = "SELECT * FROM logLogin;";
                                    $result = $mysqli->query($sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    echo $resultCheck;  
                                ?>    
                            </h4>
                            <div>
                                <?php if($erro == "Admin"){ ?>
                                <span class="f-left m-t-10 text-muted estilo">
                                    <i class="ti-user"></i>
                                    <a href="index.php?p=acessos">Todos Acessos</a>
                                </span>
                                <?php } ?>
                            </div>   
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-social-twitter bg-c-yellow card1-icon"width="16" height="16" fill="currentColor" class="bi bi-bookshelf" viewBox="0 0 16 16">
                                <path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5M3 14h10v-3H3zm0-4h10V7H3zm0-4h10V3H3z"/>
                            </svg>
    
                            <span class="text-c-yellow f-w-600">Diretrizes</span>
                            <h4>1</h4>
                            <div>
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Enviadas
                                </span>
                            </div>
                        </div>
                    </div>
                </div>                                                                                                 
            </div>
        </div>
    
        <div id="styleSelector">
    
        </div>
    </body>